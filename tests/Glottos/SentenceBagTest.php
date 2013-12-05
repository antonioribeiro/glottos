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

use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Filesystem;

class SentenceBagTest extends PHPUnit_Framework_TestCase {

	// public function setup()
	// {
	// 	$this->part1 = 'This is a string [with some delimiters inside the string] for testing purposes||';
	// 	$this->part2 = ' ||This is a second one';

	// 	$this->paragraph = "<#".$this->part1.".".$this->part2."."."#>";

	// 	$this->sentenceBag = new SentenceBag(new Config(new Filesystem));

	// 	$this->sentenceBag->parseParagraph($this->paragraph);
	// }

	// public function testEmptySentences()
	// {
	// 	$this->sentenceBag->parseParagraph(null); /// remove the previously parsed paragraph

	// 	$this->assertFalse($this->sentenceBag->any());

	// 	$this->assertTrue($this->sentenceBag->isEmpty());

	// 	$this->assertEquals($this->sentenceBag->count(), 0);
	// }

	// public function testParseSentences()
	// {
	// 	$this->assertTrue($this->sentenceBag->any());

	// 	$this->assertFalse($this->sentenceBag->isEmpty());

	// 	$this->assertEquals($this->sentenceBag->count(), 2);

	// 	$this->assertEquals($this->part1, $this->sentenceBag->get(0)->getFullSentence());

	// 	$this->assertEquals($this->part2, $this->sentenceBag->get(1)->getFullSentence());
	// }

	// public function testSentencePrefixesAndSuffixes()
	// {
	// 	$this->assertEquals($this->sentenceBag->get(0)->suffix, '||');

	// 	$this->assertEquals($this->sentenceBag->get(1)->prefix, ' ||');
	// }

	// public function testPutSentence()
	// {
	// 	$sentence = 'new sentence';

	// 	$this->sentenceBag->put(0, $sentence);

	// 	$this->assertEquals($this->sentenceBag->get(0)->getSentence(), $sentence);
	// }

	// public function testgetSentenceBag()
	// {
	// 	$this->assertInstanceOf('PragmaRX\Glottos\Support\SentenceBag', $this->sentenceBag->getSentenceBag());
	// }

	// public function testGetSetDelimiter()
	// {
	// 	$this->sentenceBag->setDelimiter('|');

	// 	$this->assertEquals($this->sentenceBag->getDelimiter(), '|');
	// }

	// public function testGetParagraph()
	// {
	// 	$this->assertEquals($this->sentenceBag->getParagraph(), $this->paragraph);
	// }

	// public function testGetParagraphDifferentMode()
	// {
	// 	$this->sentenceBag->parseParagraph('natural::paragraph');

	// 	$this->assertEquals('natural', $this->sentenceBag->get(0)->getMode());

	// 	$this->sentenceBag->parseParagraph('key::paragraph');

	// 	$this->assertEquals('key', $this->sentenceBag->get(0)->getMode());
	// }

	// public function testAllParts()
	// {
	// 	$sentenceBag = new SentenceBag(new Config(new Filesystem));

	// 	$sentenceBag->parseParagraph('IT Solutions, Systems Architecture, Web Solutions and Linux Servers. Click here to contact me.');

	// 	$this->assertEquals('IT Solutions, Systems Architecture, Web Solutions and Linux Servers', $sentenceBag->get(0)->getFullSentence());

	// 	$this->assertEquals(' Click here to contact me', $sentenceBag->get(1)->getFullSentence());
	// }

	public function testHadToParseSentences()
	{
		$sentenceBag = new SentenceBag(new Config(new Filesystem));

		$paragraph = 'Don\'t worry... it\'s easier than your thingy.';
		$sentenceBag->parseParagraph($paragraph);
		$this->assertEquals($paragraph, $sentenceBag->getParagraph());

		$paragraph = 'Don\'t worry. it\'s easier than your thingy. Don\'t worry... it\'s easier than your thingy. É isso aí!';
		$sentenceBag->parseParagraph($paragraph);
		$this->assertEquals($paragraph, $sentenceBag->getParagraph());
	}

}