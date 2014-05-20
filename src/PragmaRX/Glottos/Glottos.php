<?php namespace PragmaRX\Glottos;
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
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\FileSystem;
use PragmaRX\Glottos\Support\MessageSelector;

use PragmaRX\Glottos\Repositories\DataRepository;
use PragmaRX\Glottos\Repositories\Cache\Cache;

class Glottos
{
	private $config;

	private $domain;

	private $locale;

	private $paragraph;

	private $dataRepository;

	private $replacements = array();

	private $primaryLocale;

	private $secondaryLocale;

	private $selector;

	/**
	 * Initialize Glottos object
	 * 
	 * @param Locale $locale
	 */
	public function __construct(
									Config $config, 
									Locale $locale, 
									SentenceBag $paragraph, 
									DataRepository $dataRepository,
									Cache $cache,
									Mode $mode,
									FileSystem $fileSystem,
									MessageSelector $selector
								)
	{
		$this->locale = $locale;

		$this->config = $config;

		$this->paragraph = $paragraph;

		$this->dataRepository = $dataRepository;

		$this->cache = $cache;

		$this->mode = $mode;

		$this->fileSystem = $fileSystem;

		$this->domain = $this->config->get('default_domain');

		$this->selector = $selector;
	}

	/**
	 * Domain setter
	 * 
	 * @param integer $domain
	 */
	public function setDomain($domain)
	{
		$this->domain = $domain;
	}

	/**
	 * Domain getter
	 * 
	 * @return integer
	 */
	public function getDomain()
	{
		return $this->domain;
	}

	/**
	 * Selector setter
	 * 
	 * @param MessageSelector $selector 
	 */
	public function setSelector(MessageSelector $selector)
	{
		$this->selector = $selector;
	}

	/**
	 * Seletor getter
	 * 
	 * @return MessageSelector
	 */
	public function getSelector()
	{
		return $this->selector;
	}

	/**
	 * Mode setter
	 * 
	 * @param string $mode
	 */
	public function setMode($mode)
	{
		$this->mode = $mode;
	}

	/**
	 * Mode getter
	 * 
	 * @return string
	 */
	public function getMode()
	{
		return $this->mode;
	}


	/**
	 * Locale setter
	 * 
	 * @param Locale $locale
	 */
	public function setLocale($locale)
	{
		$this->locale = new Locale($locale);
	}

	/**
	 * Locale setter
	 * 
	 * @param Locale $locale
	 */
	public function setLanguage($language)
	{
		$this->locale->setLanguage($language);
	}

	/**
	 * Locale country setter
	 * 
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->locale->setCountry($country);
	}

	/**
	 * Add a replacement to the list
	 * 
	 * @param string $key   
	 * @param string $value
	 */
	public function addReplacement($key, $value)
	{
		$this->replacements[$key] = $value;
	}

	/**
	 * Clear the list of replacements
	 * 
	 * @return void
	 */
	public function clearReplacements()
	{
		$this->replacements = array();
	}

	/**
	 * Replacements setter
	 * 
	 * @param array $array 
	 */
	public function setReplacements(array $array)
	{
		$this->replacements = $array;
	}

	/**
	 * Replacements getter
	 * 
	 * @return array
	 */
	public function getReplacements()
	{
		return $this->replacements;
	}

	/**
	 * Locale getter
	 * 
	 * @return Locale
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * Locale getter
	 *
	 * @param null $language
	 * @param null $country
	 * @return Locale
	 */
	public function getLocaleAsText($language = null, $country = null)
	{
		if ( ! is_null($language))
		{
			return with(new Locale($language, $country))->getText();
		}

		return $this->locale->getText();
	}

	/**
	 * Translate a group of paragraph
	 * 
	 * @param  string  $paragraph
	 * @param  Locale  $locale
	 * @param  integer $domain
	 * @param  array  $replacements
	 * @return string
	 */
	public function translate($paragraph, $domain = null, $locale = null, $replacements = null)
	{
		return $this->processReplacements(
										$this->translateParagraph($paragraph, $domain ?: $this->domain, $this->makeLocale($locale)), 
										$replacements ?: $this->replacements
									);
	}

	/** 
	 * Translate a sentence and choose between singular or plural
	 * @param  string $id        
	 * @param  string $number    
	 * @param  array  $parameters
	 * @param  string $domain    
	 * @param  string $locale    
	 * @return string            
	 */
    public function choice($id, $number, $parameters = array(), $domain = null, $locale = null)
    {
    	$locale = $this->makeLocale($locale);

    	$translation = $this->translate($id, $domain, $locale, $parameters);

    	return $this->choose($translation, $number, $locale);
    }

    /**
     * Choose between singlular or plural
     * 
     * @param  string $translation
     * @param  string $number    
     * @param  string $locale    
     * @return string            
     */
    public function choose($translation, $number, $locale)
    {
    	return $this->selector->choose($translation, (int) $number, $locale);
    }

    /**
     * Create a Locale instance
     * 
     * @param  mixed $locale 
     * @return Locale
     */
	public function makeLocale($locale = null)
	{
		if ($locale == null)
		{
			return $this->locale;
		}
		else
		if (is_string($locale))
		{
			return new Locale($locale);
		}

		return $locale;
	}

	/**
	 * Iterate tru the paragraph and translate one by one
	 * 
	 * @param  string $paragraph
	 * @param  Locale $locale
	 * @param  integer $domain
	 * @return string
	 */
	private function translateParagraph($paragraph, $domain, Locale $locale)
	{
		$this->paragraph->parseParagraph($paragraph, $domain);

		foreach($this->paragraph->all() as $sentence)
		{
			$sentence->setTranslation($this->findTranslation($sentence, $locale)->getTranslation());
		}

		return $this->paragraph->getTranslatedParagraph();
	}

	/**
	 * Find a translation
	 * 
	 * @param  Sentence $translation
	 * @param  string   $locale     
	 * @return object|null
	 */
	public function findTranslation(Sentence $translation, $locale)
	{
		return $this->dataRepository->findTranslation($translation, $this->makeLocale($locale));
	}

	/**
	 * Find a translation by id
	 * 
	 * @param  integer $message_id
	 * @param  string   $locale     
	 * @return object|null
	 */
	public function findTranslationById($message_id, $locale)
	{
		return $this->dataRepository->findTranslationById($message_id, $this->makeLocale($locale));
	}

	/**
	 * Find a message by id
	 * 
	 * @param  integer $message_id
	 * @return object|null
	 */	
	public function findMessageById($message_id)
	{
		return $this->dataRepository->findMessageById($message_id);
	}

	/**
	 * Replace all user replacements by its respective values
	 * 
	 * @param  string $translation
	 * @param  array $replacements
	 * @return string
	 */
	private function processReplacements($string, array $replacements = array())
	{
		foreach($replacements as $key => $variable) {
			$string = $this->makeReplacement($key, $variable, $string);
		}

		return $string;
	}

	/**
	 * Replace one user replacements by its respective value
	 * 
	 * @param  string $key
	 * @param  string $variable
	 * @param  string $translation
	 * @return string
	 */
	private function makeReplacement($key, $variable, $translation)
	{
		return str_replace(
							$this->config->get('variable_delimiter_prefix') . "$key" . $this->config->get('variable_delimiter_suffix'), 
							$variable, 
							$translation
						);
	}

	/**
	 * Add a translation
	 *
	 * @param string $message
	 * @param string $translatedMessage
	 * @param string $domain
	 * @param string $locale
	 * @return null|object|\PragmaRX\Glottos\Support\Sentence|string
	 */
	public function addTranslation($message, $translatedMessage, $domain = null, $locale = null)
	{
		$domain = $domain ?: $this->domain;

		$locale = $this->makeLocale($locale, $this->locale);

		$translation = Sentence::makeTranslation($message, $translatedMessage, $domain, $this->mode);

		$translation = $this->findTranslation($translation, $locale);

		if (! $translation->translationFound)
		{
			return $this->dataRepository->addTranslation($translation, $locale);
		}

		return $translation;
	}

	/**
	 * Get the default locale
	 * 
	 * @return string
	 */
	public function getDefaultLocale()
	{
		return $this->dataRepository->getDefaultLocale();
	}

	/**
	 * Check if a locale is enabled
	 * 
	 * @param  mixed $locale 
	 * @return bool
	 */
	public function localeIsAvailable($locale)
	{
		return $this->dataRepository->localeIsAvailable($this->makeLocale($locale));
	}

	/**
	 * Get all languages
	 * 
	 * @return object|null
	 */
	public function getAllLanguages()
	{
		return $this->dataRepository->getAllLanguages();
	}

	/**
	 * Get all enabled languages
	 * 
	 * @return object|null
	 */
	public function getEnabledLanguages()
	{
		return $this->dataRepository->getEnabledLanguages();
	}

	/**
	 * Get all disabled languages
	 * 
	 * @return object|null
	 */
	public function getDisabledLanguages()
	{
		return $this->dataRepository->getDisabledLanguages();
	}

	/**
	 * Enable or disable a language
	 * 
	 * @param  integer $id     
	 * @param  bool $enable 
	 * @return bool
	 */
	public function enableDisableLanguage($id, $enable)
	{
		return $this->dataRepository->enableDisableLanguage($id, $enable);
	}

	/**
	 * Get language stats
	 * 
	 * @return object|null
	 */
	public function getLanguageStats()
	{
		return $this->dataRepository->getLanguageStats();
	}

	/**
	 * Given locales, get translations for them
	 * 
	 * @param  mixed $localePrimary  
	 * @param  mixed $localeSecondary
	 * @return object|null                 
	 */
	public function getTranslations($localePrimary = null, $localeSecondary = null)
	{
		return $this->dataRepository->getTranslations($this->makeLocale($localePrimary), $this->makeLocale($localeSecondary));
	}

	/**
	 * Find a Locale locale
	 * 
	 * @param  mixed $locale
	 * @return object|null
	 */
	public function findLocale($locale)
	{
		return $this->dataRepository->findLocale($this->makeLocale($locale));
	}	

	/**
	 * Update or create a translation
	 * @param  string $message          
	 * @param  string $translatedMessage
	 * @param  string $locale           
	 * @param  string $domain           
	 * @return void                   
	 */
	public function updateOrCreateTranslation($message, $translatedMessage, $locale, $domain = null)
	{
		$this->dataRepository->updateOrCreateTranslation(
															$message, 
															$translatedMessage, 
															$this->makeLocale($locale), 
															$domain ?: $this->getDomain(), 
															$this->mode
														);
	}

	/**
	 * Find next untranslated message
	 * 
	 * @param  mixed $localePrimary   
	 * @param  mixed $localeSecondary 
	 * @return object|null
	 */
	public function findNextUntranslated($localePrimary, $localeSecondary)
	{
		return $this->dataRepository->findNextUntranslated($this->makeLocale($localePrimary), $this->makeLocale($localeSecondary));
	}	

	/**
	 * Get primary configured locale
	 * 
	 * @return Locale
	 */
	public function getPrimaryLocale()
	{
		if ( ! $this->primaryLocale)
		{
			$this->primaryLocale = $this->getDefaultLocale();
		}

		return $this->primaryLocale;
	}

	/**
	 * Get secondary configured locale
	 * 
	 * @return Locale
	 */
	public function getSecondaryLocale()
	{
		if ( ! $this->secondaryLocale)
		{
			$this->secondaryLocale = $this->dataRepository->guessSecondaryLocale($this->getPrimaryLocale());
		}

		return $this->secondaryLocale;
	}

	/**
	 * Primary locale setter
	 * 	
	 * @param mixed
	 */
	public function setPrimaryLocale($locale)
	{
		$this->primaryLocale = $locale;
	}

	/**
	 * Secondary locale setter
	 *
	 * @param mixed $locale
	 * @return mixed
	 */
	public function setSecondaryLocale($locale)
	{
		return $this->secondaryLocale = $locale;
	}

	/** 
	 * Import Laravel lang messages
	 * @param  object $app  
	 * @param  string $path 
	 * @return int
	 */
	public function import($app, $path = null)
	{
		return $this->dataRepository->import($app, $path, $this->getDomain(), $this->getMode());
	}

	/**
	 * Get the browser default language
	 *
	 * @param null $defaultLocale
	 * @return string
	 */
	public function getBrowserLocale($defaultLocale = null)
	{
		$browserLocale = getDefaultLanguage(
			$defaultLocale ?: $this->getLocaleAsText()
		);

		$this->dataRepository->findNearestAvailableLocale($browserLocale)->getText();
	}
}
