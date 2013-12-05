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

class Language extends LocaleBase implements LanguageInterface {

	/**
	 * Find a language in dataset
	 * 
	 * @param  string $language 
	 * @return object|null
	 */
	public function find($language)
	{
		$cacheKey = __CLASS__.__FUNCTION__.$language;

		if ( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model->find($language);
		}
	
		if ( ! $cached && $model )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $model;
	}

}