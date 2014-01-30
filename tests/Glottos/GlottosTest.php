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

use PragmaRX\Glottos\Glottos;

use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\Filesystem;
use PragmaRX\Glottos\Support\MessageSelector;

use PragmaRX\Glottos\Repositories\DataRepository;
use PragmaRX\Glottos\Repositories\Messages\Laravel\Message;
use PragmaRX\Glottos\Repositories\Cache\Cache;

use Illuminate\Console\Application;

class GlottosTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->paragraph = "-->Hello, welcome to |-application name-|'s test cases!<--";

		$this->translatedParagraph = '-->Olá, seja bem-vindo aos casos de testes do Glottos!<--';

		$this->translationIntermediaryParagraph = 'Olá, seja bem-vindo aos casos de testes do |-application name-|';

		$this->module = 0;

		$this->language = 'en';

		$this->country = 'us';

		$this->locale = new Locale($this->language, $this->country);

		$this->domain = 'messages';

		$this->localeAsText = strtolower($this->language).'_'.strtoupper($this->country);

		$this->replacements = array('application name' => 'Glottos', 'variable' => 'name');

		$this->config = new Config(new Filesystem);

		$this->mode = new Mode;

		$this->choiceSingular = "choice";
		$this->choicePlural = "choices";
		$this->choice = "$this->choiceSingular|$this->choicePlural";
		$this->choiceSentence = Sentence::make($this->choice, $this->domain, $this->mode, $this->config);

		$this->translatedChoiceSingular = "escolha";
		$this->translatedChoicePlural = "escolhas";
		$this->translatedChoice = "$this->translatedChoiceSingular|$this->translatedChoicePlural";
		$this->translatedChoiceSentence = Sentence::makeTranslation($this->choice, $this->translatedChoice, $this->domain, $this->mode, $this->config);

		$this->app = 'application';

		$this->glottos = new Glottos(
			$this->config,
			$this->locale,
			$this->sentenceBag = new SentenceBag($this->config, $this->paragraph),
			$this->dataRepository = m::mock('PragmaRX\Glottos\Repositories\DataRepository'),
			$this->cache = new Cache,
			$this->mode,
			$this->fileSystem = new Filesystem,
			$this->selector = new MessageSelector
		);

		$this->sentenceObject = new Sentence($this->paragraph, 0, new Mode);

		$this->translationSentenceObject = new Sentence($this->paragraph, 0, new Mode);
		$this->translationSentenceObject->setTranslation($this->translatedParagraph);

		$this->translationIntermediaryObject = new Sentence($this->paragraph, 0, new Mode);
		$this->translationIntermediaryObject->setTranslation($this->translationIntermediaryParagraph);
	}

	/**
	 * Close mockery.
	 *
	 * @return void
	 */
	public function tearDown()
	{
		m::close();
	}

	public function testGetSetDomain()
	{
		$this->glottos->setDomain(123);

		$this->assertEquals(123, $this->glottos->getDomain());
	}

	public function testGetSetSelector()
	{
		$this->glottos->setSelector($this->selector);

		$this->assertEquals($this->selector, $this->glottos->getSelector());
	}

	public function testGetSetLocale()
	{
		$l = new Locale;

		$this->glottos->setLocale($l);

		$this->assertEquals($l, $this->glottos->getLocale());
	}

	public function testGetSetLanguageCountry()
	{
		$l = new Locale('zz','ww');

		$this->glottos->setLanguage('zz');
		$this->glottos->setCountry('ww');

		$this->assertEquals($l, $this->glottos->getLocale());
	}

	public function testTranslation()
	{
		$this->glottos->addReplacement('application name', 'Glottos');

		$this->glottos->addReplacement('variable', 'name');

		$this->dataRepository->shouldReceive('findTranslation')->times(2)->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->translate($this->paragraph);

		$this->assertEquals($this->translatedParagraph, $t);

		$t = $this->glottos->translate($this->paragraph, 'pt-br');

		$this->assertEquals($this->translatedParagraph, $t);
	}

	public function testAddTranslation()
	{
		$this->dataRepository->shouldReceive('findTranslation')->once()->andReturn($this->translationIntermediaryObject);
		$this->dataRepository->shouldReceive('addTranslation')->once()->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->addTranslation($this->paragraph, $this->translationIntermediaryParagraph, $this->domain, $this->locale);

		$this->assertEquals($t, $this->translationIntermediaryObject);

		$this->dataRepository->shouldReceive('findTranslation')->once()->andReturn($this->translationIntermediaryObject);
		$this->dataRepository->shouldReceive('addTranslation')->once()->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->addTranslation($this->paragraph, $this->translationIntermediaryParagraph, $this->language.'-'.$this->country, $this->module, $this->mode);

		$this->assertEquals($t, $this->translationIntermediaryObject);
	}

	public function testLocale()
	{
		$this->assertEquals($this->localeAsText, $this->glottos->getLocaleAsText());

		$this->assertEquals($this->locale, $this->glottos->getLocale());

		$this->assertEquals($this->locale, $this->glottos->makeLocale($this->localeAsText));

		$this->dataRepository->shouldReceive('getDefaultLocale')->once()->andReturn($this->locale);

		$this->assertEquals($this->locale, $this->glottos->getDefaultLocale());
	}

	public function testLocaleIsAvailable()
	{
		$this->dataRepository->shouldReceive('localeIsAvailable')->once()->andReturn(true);

		$this->assertTrue($this->glottos->localeIsAvailable('en-us'));

		$this->dataRepository->shouldReceive('localeIsAvailable')->once()->andReturn(false);

		$this->assertFalse($this->glottos->localeIsAvailable('zz-zz'));
	}

	public function testGetAllLanguages()
	{
		$this->dataRepository->shouldReceive('getAllLanguages')->once();

		$this->glottos->getAllLanguages();
	}

	public function testGetEnabledLanguages()
	{
		$this->dataRepository->shouldReceive('getEnabledLanguages')->once();

		$this->glottos->getEnabledLanguages();
	}

	public function testZgetDisabledLanguages()
	{
		$this->dataRepository->shouldReceive('getDisabledLanguages')->once();

		$this->glottos->getDisabledLanguages();
	}

	public function testEnableDisableLanguage()
	{
		$this->dataRepository->shouldReceive('enableDisableLanguage')->once()->andReturn(true);

		$this->dataRepository->enableDisableLanguage(1, false);
	}

	public function testGetLanguageStats()
	{
		$this->dataRepository->shouldReceive('getLanguageStats')->once();

		$this->glottos->getLanguageStats();
	}

	public function testGetTranslations($locale = null)
	{
		$this->dataRepository->shouldReceive('getTranslations')->once();

		$this->glottos->getTranslations($this->locale, Locale::make('pt-br'));
	}

	public function testFindLocale()
	{
		$this->dataRepository->shouldReceive('findLocale')->once()->andReturn($this->locale);

		$found = $this->glottos->findLocale(Locale::make($this->locale));

		$this->assertEquals($this->locale, $found);
	}	

	public function testFindTranslationById()
	{
		$this->dataRepository->shouldReceive('findTranslationById')->once()->andReturn($this->translatedParagraph);

		$this->assertEquals($this->translatedParagraph, $this->glottos->findTranslationById(1, $this->locale));
	}	

	public function testUpdateOrCreateTranslation()
	{
		$this->dataRepository->shouldReceive('updateOrCreateTranslation')->once()->andReturn(true);

		$this->glottos->updateOrCreateTranslation($this->paragraph, $this->translatedParagraph, $this->locale);
	}	

	public function testFindNextUntranslated()
	{
		$this->dataRepository->shouldReceive('findNextUntranslated')->once();

		$this->glottos->findNextUntranslated($this->locale, Locale::make('pt-br'));
	}

	public function testReplacement()
	{
		$this->glottos->addReplacement('a','b');

		$this->assertEquals(array('a' => 'b'), $this->glottos->getReplacements());

		$this->glottos->setReplacements(array('c' => 'd'));

		$this->assertEquals(array('c' => 'd'), $this->glottos->getReplacements());

		$this->glottos->clearReplacements();

		$this->assertEquals(array(), $this->glottos->getReplacements());
	}

	public function testGetSetPrimaryAndSecondaryLocale()
	{
		$this->glottos->setPrimaryLocale('primaryLocale');
		$this->glottos->setSecondaryLocale('secondaryLocale');

		$this->assertEquals('primaryLocale', $this->glottos->getPrimaryLocale());
		$this->assertEquals('secondaryLocale', $this->glottos->getSecondaryLocale());
	}

	public function testChoice()
	{
		$this->dataRepository->shouldReceive('findTranslation')->times(3)->andReturn($this->translatedChoiceSentence);

		$this->glottos->setLocale('pt-br');

		$this->assertEquals($this->translatedChoiceSingular, $this->glottos->choice($this->choice, 0));

		$this->assertEquals($this->translatedChoiceSingular, $this->glottos->choice($this->choice, 1));

		$this->assertEquals($this->translatedChoicePlural, $this->glottos->choice($this->choice, 2));
	}

	public function testImport()
	{
		$this->dataRepository->shouldReceive('import')->once()->andReturn(true);

		$this->glottos->import($this->app);
	}


}