<?php namespace PragmaRX\Glottos\Repositories;
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

interface DataRepositoryInterface {

	/**
	 * Find a message
	 * 
	 * @param  Sentence $sentence 
	 * @return Sentence
	 */
	public function findMessage(Sentence $sentence);

	/**
	 * Find a translation
	 * 
	 * @param  Sentence $sentence 
	 * @param  Locale   $locale   
	 * @return Sentence
	 */
	public function findTranslation(Sentence $sentence, Locale $locale);

	/**
	 * Find a translation by id
	 * 
	 * @param  integer $message_id 
	 * @param  Locale $locale     
	 * @return object|null
	 */
	public function findTranslationById($message_id, Locale $locale);

	/**
	 * Find a message by id
	 * 
	 * @param  integer $message_id 
	 * @return object|null
	 */
	public function findMessageById($message_id);

	/**
	 * Get the default locale
	 * 
	 * @return Locale
	 */
	public function getDefaultLocale();

	/**
	 * Guess the secondary locale to be used by Glottos
	 * 
	 * @param  mixed $primaryLocale 
	 * @return string
	 */
	public function guessSecondaryLocale($primaryLocale);

	/**
	 * Add a translation
	 * 
	 * @param Sentence $translation 
	 * @param Locale   $locale      
	 */
	public function addTranslation(Sentence $translation, Locale $locale);

	/**
	 * Check if a particular locale is enabled
	 * 
	 * @param  mixed $locale 
	 * @return bool
	 */
	public function localeIsAvailable($locale);

	/**
	 * Get all languages
	 * 
	 * @return object|null
	 */
	public function getAllLanguages();

	/**
	 * Get all enabled languages
	 * 
	 * @return object|null
	 */
	public function getEnabledLanguages();

	/**
	 * Get all disabled languages
	 * 
	 * @return object|null
	 */
	public function getDisabledLanguages();

	/**
	 * Enable or disable a language
	 * @param  integer $id     
	 * @param  bool $enable 
	 * @return bool
	 */
	public function enableDisableLanguage($id, $enable);

	/**
	 * Get a result set of language stats
	 * @return object|null
	 */
	public function getLanguageStats();

	/**
	 * Get all translations
	 * 
	 * @param  Locale $localePrimary   
	 * @param  Locale $localeSecondary 
	 * @return object|null
	 */
	public function getTranslations(Locale $localePrimary = null, Locale $localeSecondary = null);

	/**
	 * Find a locale in the repository
	 * 
	 * @param  Locale $locale 
	 * @return object|null
	 */
	public function findLocale(Locale $locale);

	/**
	 * Update or create a translation
	 * 
	 * @param  string $message           
	 * @param  string $translatedMessage 
	 * @param  Locale $locale            
	 * @param  string $domain            
	 * @param  string $mode              
	 * @return object
	 */
	public function updateOrCreateTranslation($message, $translatedMessage, Locale $locale, $domain, $mode);

	/**
	 * Find the next untranslated message
	 * @param  Locale $primaryLocale   
	 * @param  Locale $secondaryLocale 
	 * @return object|null
	 */
	public function findNextUntranslated(Locale $primaryLocale, Locale $secondaryLocale);

}