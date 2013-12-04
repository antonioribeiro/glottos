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

class Country extends LocaleBase implements CountryInterface {

	/**
	 * Find a country in the datasource
	 * 
	 * @param  string $country 
	 * @return mixed
	 */
	public function find($country)
	{
		$cacheKey = __CLASS__.__FUNCTION__.$country;

		if( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model->find($country);
		}
	
		if( ! $cached && $model )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $model;
	}

}