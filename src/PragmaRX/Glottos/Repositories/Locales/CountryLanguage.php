<?php namespace PragmaRX\Glottos\Repositories\Locales;
/**
 * Part of the Glottos package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Glottos
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

use PragmaRX\Glottos\Support\Locale;

class CountryLanguage extends LocaleBase implements CountryLanguageInterface {

	/**
	 * Find a CountryLanguage in the datasource
	 * 
	 * @param  Locale $locale 
	 * @return object|null
	 */
	public function find(Locale $locale)
	{
		$cacheKey = __CLASS__.__FUNCTION__.$locale->getLanguage().$locale->getCountry();

		if ( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model
							->with('language')
							->with('country')
							->where('language_id', $locale->getLanguage())
							->where('country_id', $locale->getCountry())
							->first();

		}
	
		if ( ! $cached && $model )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $model;
	}

	/**
	 * Find, by id, a CountryLanguage in the datasource
	 * 
	 * @param  integer $id 
	 * @return object|null
	 */
	public function findById($id)
	{
		$cacheKey = __CLASS__.__FUNCTION__.'id'.$id;

		if ( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model->find($id);

		}
	
		if ( ! $cached && $model )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $model;
	}
	
	/**
	 * Get all instances of CountryLanguages
	 * 	allows developer to use a single filter
	 * 
	 * @param  string $column  
	 * @param  string $operand 
	 * @param  string $value   
	 * @return object|null
	 */
	public function all($column = null, $operand = null, $value = null)
	{
		// $this->model->getConnection()->listen(function($sql, $bindings, $time) { var_dump($sql); var_dump($bindings); die; });

		$rows = $this->model
				->select($this->model->getConnection()->raw('
					  id
					, language_id
					, country_id
					, regional_name
					, enabled
					, (select count(*) from glottos_translations t where t.language_id = glottos_countries_languages.language_id and t.country_id = glottos_countries_languages.country_id) as translated
					'))
				->with('language')
				->with('country')
				->orderBy('enabled', 'desc')
				->orderBy('regional_name');

		if ($column)
		{
			$rows->where($column, $operand, $value);
		}

		return $rows->get();
	}

	/**
	 * Enable or disable a particular CountryLanguage
	 * 
	 * @param  integer $id     
	 * @param  boolean $enable 
	 * @return bool
	 */
	public function enableDisableLanguage($id, $enable)
	{
		if ($language = $this->findById($id))
		{
			$language->enabled = $enable;

			$language->save();

			return true;
		}

		return false;
	}

	/**
	 * Get a result set of CountryLanguages statistics
	 * 
	 * @return object
	 */
	public function getStats()
	{
		// this thing belongs to the data repository, but we would have to 
		// make the repository do stuff on database, so where to put this thing?

		$db = $this->model->getConnection();

		$rows = $db->select( $db->raw(

			'select 
			  (select count(*) from glottos_countries_languages where enabled = true) as languages
			, (select count(*) from glottos_countries_languages) as total_languages
			, (select count(*) from glottos_messages) as messages 
			, (select count(*) from glottos_translations) as translated

			') );

		return $rows;		
	}
}
