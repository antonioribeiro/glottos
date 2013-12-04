<?php namespace PragmaRX\Glottos\Repositories\Messages;
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

use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Locale;

interface TranslationInterface {

	/**
	 * Find a translation in the database
	 * 
	 * @param  Sentence $sentence 
	 * @param  Locale   $locale   
	 * @return Sentence
	 */
	public function find(Sentence $sentence, Locale $locale);

	/**
	 * Find, by id, a translation in the data source
	 * 
	 * @param  integer $message_id 
	 * @param  Locale $locale     
	 * @return object|null
	 */
	public function findById($message_id, Locale $locale);

	/**
	 * Add a translation to data source
	 * 
	 * @param Sentence $translation 
	 * @param Locale   $locale      
	 * @return object
	 */
	public function add(Sentence $translation, Locale $locale);

	/**
	 * Get all translation instances, for particular locales, from data source
	 * 
	 * @param  Locale $localePrimary   
	 * @param  Locale $localeSecondary 
	 * @return object|null
	 */
	public function getAll(Locale $localePrimary = null, Locale $localeSecondary = null);

	/**
	 * Update or create a translation in the data source
	 * 
	 * @param  string $message           
	 * @param  string $translatedMessage 
	 * @param  string $domain            
	 * @param  Locale $locale            
	 * @param  string $mode              
	 * @return object
	 */
	public function updateOrCreate($message, $translatedMessage, $domain, Locale $locale, $mode);

	/**
	 * Find the next untranslated message based on locales
	 * 
	 * @param  Locale $localePrimary   
	 * @param  Locale $localeSecondary 
	 * @return object|null
	 */
	public function findNextUntranslated(Locale $localePrimary = null, Locale $localeSecondary = null);

	
}