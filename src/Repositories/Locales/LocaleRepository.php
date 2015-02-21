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

class LocaleRepository implements LocaleRepositoryInterface {

	private $language;

	private $country;

	private $countryLanguage;

	/**
	 * Create a Locale repository instance
	 * 
	 * @param Language        $language        
	 * @param Country         $country         
	 * @param CountryLanguage $countryLanguage 
	 */
	public function __construct(Language $language, Country $country, CountryLanguage $countryLanguage)
	{
		$this->language = $language;

		$this->country = $country;

		$this->countryLanguage = $countryLanguage;
	}

	/**
	 * Find a CountryLanguage in the dataset
	 * 	
	 * @param  Locale $locale
	 * @return object|null
	 */
	public function find(Locale $locale)
	{
		return $this->addLocaleObject( $this->countryLanguage->find($locale) );
	}

	/**
	 * Find, by id, a CountryLanguage in the dataset 
	 * 
	 * @param  integer $countryLanguage 
	 * @return object|null
	 */
	public function findById($id)
	{
		 return $this->addLocaleObject( $this->countryLanguage->findById($id) );
	}

	/**
	 * Check if a particular CountryLanguage is enabled
	 * 
	 * @param  Locale $locale 
	 * @return bool
	 */
	public function localeIsAvailable(Locale $locale)
	{
		$countryLanguage = $this->find($locale);

		return is_null($countryLanguage) 
			   ? false 
			   : $countryLanguage->enabled;
	}

	/**
	 * Get all CountryLanguages instances
	 * 	accepts a single column filter
	 * 	
	 * @param  string $column  
	 * @param  string $operand 
	 * @param  string $value   
	 * @return object|null
	 */
	public function getLanguages($column = null, $operand = null, $value = null)
	{
		return $this->countryLanguage->all($column, $operand, $value);
	}

	/**
	 * Enable or disable a CountryLanguage
	 * 
	 * @param  integer $id     
	 * @param  boolean $enable 
	 * @return bool
	 */
	public function enableDisableLanguage($id, $enable)
	{
		return $this->countryLanguage->enableDisableLanguage($id, $enable);
	}

	/**
	 * Get a result set of country and language statistics
	 * 
	 * @return object|null
	 */
	public function getLanguageStats()
	{
		return $this->countryLanguage->getStats();
	}

	/**
	 * Create an add a Locale instance into a CountryLanguage object
	 *
	 * @param object $locale
	 * @return object
	 */
	private function addLocaleObject( $locale )
	{
		if ( ! is_null($locale))
		{
			$locale->locale = new Locale($locale->language_id, $locale->country_id);
		}

		return $locale;
	}

	public function findNearest($locale)
	{
		$found = $this->find($locale);

		if ( ! $found || ! $found->enabled)
		{
			if ($found = $this->countryLanguage->findEnabledByLanguage($locale->getLanguage()))
			{
				$locale = new Locale($found->language_id, $found->country_id);
			}
		}

		return $locale;
	}
}