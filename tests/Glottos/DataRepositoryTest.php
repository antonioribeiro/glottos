<?php

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

use Mockery as m;

use PragmaRX\Glottos\Repositories\DataRepository;

use PragmaRX\Glottos\Repositories\Messages\Message;
use PragmaRX\Glottos\Repositories\Messages\Translation;

use PragmaRX\Glottos\Repositories\Locales\LocaleRepository;
use PragmaRX\Glottos\Repositories\Locales\Language;
use PragmaRX\Glottos\Repositories\Locales\Country;
use PragmaRX\Glottos\Repositories\Locales\CountryLanguage;

use PragmaRX\Glottos\Repositories\Cache\Cache;
use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Filesystem;

class DataRepositoryTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->message = 'header:title';
		$this->messageHash = '308c9cf9ee70350cb7363f1c381cb5399f7911b8'; // for 'header:title0'

		$this->translation = 'message translation';

		$this->domain = 'messages';

		$this->language = 'en';
		$this->country = 'us';
		
		$this->ptBr = 'pt-br';

		$this->record = new stdClass();          
		$this->record->id = 1;
		$this->record->message = $this->message;

		$this->translationRecord = m::mock('PragmaRX\Glottos\Repositories\Messages\Message');
		$this->translationRecord->id = 1;
		$this->translationRecord->message = $this->translation;
		$this->translationRecord->translation = $this->translation;
		$this->translationRecord->language_id = $this->language;
		$this->translationRecord->country_id = $this->country;

		$this->sentence = new Sentence($this->message, 0, new Mode);

		$this->mode = new Mode;

		$this->translatedSentence = new Sentence($this->message, 0, $this->mode);
		$this->translatedSentence->setTranslation($this->translationRecord->message);
		$this->translatedSentence->setId(1);

		$this->locale = Locale::make($this->language.'-'.$this->country);

		$this->localePtBr = Locale::make($this->ptBr);

		$this->app = array('path.base' => '/');

		$this->foundSentence = new Sentence($this->message, 0, new Mode);
		$this->foundSentence->setId(1);

		$this->modelMessageMock = m::mock('stdClass');
		$this->modelTranslationMock = m::mock('stdClass');
		$this->modelTranslationMock->translation = $this->translation;

		$this->modelLanguageMock = m::mock('PragmaRX\Glottos\Repositories\Locales\Language');
		$this->modelCountryMock = m::mock('PragmaRX\Glottos\Repositories\Locales\Country');
		$this->modelLanguageCountryMock  = m::mock('PragmaRX\Glottos\Repositories\Locales\CountryLanguage');

		$this->modelLanguageCountryReturnMock = m::mock('stdClass');
		$this->modelLanguageCountryReturnMock->enabled = true;
		$this->modelLanguageCountryReturnMock->language_id = $this->language;
		$this->modelLanguageCountryReturnMock->country_id = $this->country;

		$this->config = m::mock('PragmaRX\Glottos\Support\Config');

		$this->cache = new Cache;

		$this->dataRepository = new DataRepository( 
													$this->messageRepository = new Message($this->modelMessageMock, $this->cache),
													$this->translationRepository = new Translation($this->modelTranslationMock, $this->cache),
													$this->localeRepository = new LocaleRepository($this->modelLanguageMock, $this->modelCountryMock, $this->modelLanguageCountryMock, $this->cache),
													$this->config,
													$this->fileSystem = m::mock('PragmaRX\Glottos\Support\Filesystem'),
													$this->finder = m::mock('PragmaRX\Glottos\Support\Finder')
												);

	}

	public function testIdAndHash()
	{
		$this->assertEquals($this->sentence->getHash(), $this->messageHash);

		// Sentence ID here must still be null
		$this->assertNull($this->sentence->getId());
	}

	public function testfindMessage()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$sentence = $this->dataRepository->findMessage($this->sentence);

		$this->assertEquals($sentence->getId(), $this->foundSentence->getId());
		$this->assertEquals($sentence->getHash(), $this->foundSentence->getHash());
		$this->assertEquals($sentence->getDomain(), $this->foundSentence->getDomain());
	}

	public function testCreateSentence()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn(null);
		$this->modelMessageMock->shouldReceive('create')->once()->andReturn($this->record);

		$sentence = $this->dataRepository->findMessage($this->sentence);

		$this->assertEquals($sentence->getId(), $this->foundSentence->getId());
		$this->assertEquals($sentence->getHash(), $this->foundSentence->getHash());
		$this->assertEquals($sentence->getDomain(), $this->foundSentence->getDomain());
	}

	public function testTranslate()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$this->modelTranslationMock->shouldReceive('with')->once()->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn($this->translationRecord);

		$this->config->shouldReceive('get')->with('debug')->andReturn(false);
		$this->config->shouldReceive('get')->with('default_language_id')->andReturn($this->language);
		$this->config->shouldReceive('get')->with('default_country_id')->andReturn($this->country);

		$sentence = $this->dataRepository->findTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->getFullTranslation(), $this->translationRecord->message);

		$this->assertTrue($sentence->translationFound);
	}

	public function testTranslationNotFound()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn(null);
		$this->modelTranslationMock->shouldReceive('with')->once()->andReturn($this->modelTranslationMock);

		$sentence = $this->dataRepository->findTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->getFullTranslation(), $this->message);

		$this->assertFalse($sentence->translationFound);
	}

	public function testAddTranslationLocale()
	{
		$this->modelTranslationMock->shouldReceive('create')->once()->andReturn($this->translatedSentence);

		$addedSentence = $this->dataRepository->addTranslation($this->translatedSentence, $this->locale);

		$this->assertEquals($this->translatedSentence->getFullSentence(), $this->message);

		$this->assertEquals($this->translatedSentence->getFullTranslation(), $this->translation);

		$this->assertEquals(1, $this->translatedSentence->getId());

		$this->assertEquals($addedSentence, $this->translatedSentence);
	}

	public function testDefaultLocale()
	{
		$this->config->shouldReceive('get')->with('default_language_id')->andReturn($this->language);
		$this->config->shouldReceive('get')->with('default_country_id')->andReturn($this->country);

		$this->assertEquals($this->locale, $this->dataRepository->getDefaultLocale());
	}

	public function testLocaleIsAvailable()
	{
		$this->config->shouldReceive('get')->with('default_language_id')->andReturn($this->language);
		$this->config->shouldReceive('get')->with('default_country_id')->andReturn($this->country);

		$this->assertTrue($this->dataRepository->localeIsAvailable($this->locale));

		$this->modelLanguageCountryMock->shouldReceive('find')->andReturn($this->modelLanguageCountryReturnMock);

		$this->assertTrue($this->dataRepository->localeIsAvailable($this->localePtBr));

		$this->modelLanguageCountryReturnMock->enabled = false;
		$this->modelLanguageCountryMock->shouldReceive('find')->andReturn($this->modelLanguageCountryReturnMock);
		$this->assertFalse($this->dataRepository->localeIsAvailable('pt-pt'));
	}

	public function testImport()
	{
		$this->fileSystem->shouldReceive('directories')->once()->andReturn(array('en'));
		$this->fileSystem->shouldReceive('getRequire')->once()->andReturn(array('en'));

		$this->finder->shouldReceive('create')->once()->andReturn($this->finder);
		$this->finder->shouldReceive('files')->once()->andReturn($this->finder);
		$this->finder->shouldReceive('in')->once()->andReturn(array('en'));

		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$this->modelTranslationMock->shouldReceive('with')->once()->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn($this->translationRecord);

		$this->config->shouldReceive('get')->with('default_language_id')->andReturn($this->language);
		$this->config->shouldReceive('get')->with('default_country_id')->andReturn($this->country);
		$this->config->shouldReceive('get')->with('debug')->andReturn(false);

		$this->dataRepository->import($this->app, null, $this->domain, $this->mode);
	}

	public function testEnableDisableLanguage()
	{
		$this->modelLanguageCountryMock->shouldReceive('enableDisableLanguage')->once()->andReturn(true);

		$this->dataRepository->enableDisableLanguage(1, false);
	}

	public function testFindLocale()
	{
		$this->modelLanguageCountryMock->shouldReceive('find')->andReturn($this->translationRecord);

		$this->assertEquals($this->translationRecord, $this->dataRepository->findLocale($this->locale));
	}

	public function testFindTranslationById()
	{
		$this->modelTranslationMock->shouldReceive('with')->once()->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn($this->translationRecord);

		$this->assertEquals($this->translationRecord, $this->dataRepository->findTranslationById(1, $this->locale));
	}	

	public function testUpdateOrCreateTranslation()
	{
		$this->modelTranslationMock->shouldReceive('with')->once()->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn($this->translationRecord);
		
		$this->translationRecord->shouldReceive('save')->once()->andReturn($this->modelTranslationMock);

		$this->dataRepository->updateOrCreateTranslation($this->message, $this->translation, $this->locale, $this->domain, $this->mode);
	}	

	public function testFindNextUntranslated()
	{
		// TODO
	}

}
