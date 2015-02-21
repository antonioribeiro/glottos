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

use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Mode;
 
class SentenceTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->message = 'This is a string sentence';

		$this->translation = 'This is a translated string sentence';

		$this->messageHash = 'ba30988314732a172e215268110839619952c5a4'; /// for 'This is a string sentence0'

		$this->config = m::mock('PragmaRX\Support\Config');

		$this->messageNatural = 'natural::'.$this->message;

		$this->messageKey = 'key::'.$this->message;

		$this->domain = 'messages';

		$this->messageWrongKey = 'key:::'.$this->message;

		$this->sentence = new Sentence($this->message, $this->domain, new Mode('natural'));

		$this->translatedSentence = new Sentence($this->message, $this->domain, new Mode('natural'));

		$this->translatedSentence->setTranslation($this->translation);
	}

	public function testDomainIsZero()
	{
		$this->assertTrue($this->sentence->getDomain() === $this->domain);
	}

	public function testGetSetDomain()
	{
		$this->sentence->setDomain(1);

		$this->assertEquals($this->sentence->getDomain(), 1);
	}

	public function testGetSetSentence()
	{
		$this->sentence->setSentence('changed');

		$this->assertEquals($this->sentence->getSentence(), 'changed');
	}

	public function testHash()
	{
		$this->assertEquals($this->sentence->getHash(), $this->messageHash);
	}

	public function testHashDifferent()
	{
		$this->sentence->setDomain(1);
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);
	}

	public function testRecalculateHash()
	{
		$this->sentence->setSentence('changed');
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);

		$this->sentence->setDomain(1);
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);

		$this->sentence->setSentence($this->message);
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);

		$this->sentence->setDomain($this->domain);
		$this->assertEquals($this->sentence->getHash(), $this->messageHash);
	}

	public function testCheckModes()
	{
		$this->assertEquals('natural', $this->sentence->getMode());

		$this->sentence->setSentence($this->messageNatural);
		$this->assertEquals($this->sentence->getSentence(), $this->message);
		$this->assertEquals('natural', $this->sentence->getMode());

		$this->sentence->setSentence($this->messageKey);
		$this->assertEquals($this->sentence->getSentence(), $this->message);
		$this->assertEquals('key', $this->sentence->getMode());

		$this->sentence->setSentence($this->messageWrongKey);
		$this->assertNotEquals($this->sentence->getSentence(), $this->message);
		$this->assertEquals('key', $this->sentence->getMode());

		$this->sentence = new Sentence('key::key_string', $this->domain, new Mode('natural'));
		$this->assertEquals('key_string', $this->sentence->getSentence());
		$this->assertEquals('key', $this->sentence->getMode());
	}

	public function testMake()
	{
		$sentence = Sentence::make($this->message, $this->domain, new Mode('natural'));

		$this->assertEquals($this->sentence, $sentence);

		$sentence = Sentence::make('wrong', $this->domain, new Mode('natural'));

		$this->assertNotEquals($this->sentence, $sentence);
	}

	public function testMakeTranslation()
	{
		$translation = Sentence::makeTranslation($this->message, $this->translation, $this->domain, new Mode('natural'));

		$this->assertEquals($this->translatedSentence, $translation);

		$translation = Sentence::makeTranslation($this->message, 'wrong', $this->domain, new Mode('natural'));

		$this->assertNotEquals($this->translatedSentence, $translation);

	}

	public function testPrefixSuffix()
	{
		$this->sentence = new Sentence("#<$this->message>#", $this->domain, new Mode('natural'));

		$this->assertEquals("#<$this->message>#", $this->sentence->getSentence());
	}

}
