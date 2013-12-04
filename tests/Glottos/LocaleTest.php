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

use PragmaRX\Glottos\Support\Locale;

class LocaleTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->locale = new Locale('en-us');
	}

	public function testLocaleGotEnglishUS()
	{
		$this->assertEquals($this->locale->getLanguage(), 'en');

		$this->assertEquals($this->locale->getCountry(), 'US');
	}

	public function testLocaleGettersAndSetters()
	{
		$this->locale->setLanguage('pt');

		$this->locale->setCountry('br');

		$this->assertEquals($this->locale->getLanguage(), 'pt');
		
		$this->assertEquals($this->locale->getCountry(), 'BR');
	}

	public function testLocaleConstructorSeparate()
	{
		$locale = new Locale('pt', 'br');

		$this->assertEquals($locale->getLanguage(), 'pt');
		
		$this->assertEquals($locale->getCountry(), 'BR');
	}

	public function testLocaleConstructorTogheter()
	{
		$locale = new Locale('pt-br');

		$this->assertEquals($locale->getLanguage(), 'pt');
		
		$this->assertEquals($locale->getCountry(), 'BR');
	}

	public function testLocaleConstructorOnlyLanguage()
	{
		$locale = new Locale('pt-');

		$this->assertEquals($locale->getLanguage(), 'pt');
		
		$this->assertEmpty($locale->getCountry());
	}

	public function testIs()
	{
		$locale = new Locale('pt_BR');

		$this->assertTrue($locale->is('pt+br'));

		$this->assertFalse($locale->is('pt+pt'));
	}

	public function testMake()
	{
		$locale1 = Locale::make('pt-br');

		$locale2 = Locale::make(new Locale('pt-br'));

		$this->assertEquals($locale1, $locale2);

		$locale3 = Locale::make(new Locale('pt-pt'));

		$this->assertNotEquals($locale1, $locale3);

		$locale4 = Locale::make('');

		$this->assertEquals($locale4->getLanguage(), '');

		$this->assertEquals($locale4->getCountry(), '');

		$locale5 = Locale::make('', 'pt-br'); // fallback

		$this->assertEquals($locale5, $locale2);

		$this->assertNotEquals($locale5, $locale3);
	}

    public function testGetText()
    {
		$locale = Locale::make('', 'pt-br'); // fallback

		$this->assertEquals($this->locale->getText(), 'en_US');

		$this->assertEquals($locale->getText(), 'pt_BR');
    }

}