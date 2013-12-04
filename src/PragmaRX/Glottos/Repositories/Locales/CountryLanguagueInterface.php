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

interface CountryLanguageInterface {
	
	/**
	 * Find a CountryLanguage in the datasource
	 * 
	 * @param  Locale $locale 
	 * @return object|null
	 */
	public function find(Locale $locale);

	/**
	 * Find, by id, a CountryLanguage in the datasource
	 * 
	 * @param  integer $id 
	 * @return object|null
	 */
	public function findById($id);

	/**
	 * Get all instances of CountryLanguages
	 * 	allows developer to use a single filter
	 * 
	 * @param  string $column  
	 * @param  string $operand 
	 * @param  string $value   
	 * @return object|null
	 */
	public function all($column = null, $operand = null, $value = null);

	/**
	 * Enable or disable a particular CountryLanguage
	 * 
	 * @param  integer $id     
	 * @param  boolean $enable 
	 * @return void
	 */
	public function enableDisableLanguage($id, $enable);

	/**
	 * Get a result set of CountryLanguages statistics
	 * 
	 * @return object
	 */
	public function getStats();

}