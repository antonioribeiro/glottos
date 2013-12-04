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

use PragmaRX\Glottos\Glottos;
use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Config;
use Illuminate\Filesystem\Filesystem;
use PragmaRX\Glottos\Repositories\Messages\Laravel\Message;
use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Mode;
use Mockery as m;

class MessageTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->paragraph = "Hello, welcome to |-application name-|'s test cases!";

		$this->messageId = 'e3e85fec2dc174602ccb8d081befe00cc46e52da';

		$this->sentence = new Sentence($this->paragraph, 0, new Mode);

		$this->locale = new Locale('pt', 'br');

		$this->module = 0;

		// $this->message = new Message;
		
		// $this->message->setResolver();
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

	public function testIntantiation()
	{
		// return $this->message;
	}

	public function testMessageId()
	{
		// $messageId = $this->message->buildMessageId($this->sentence, $this->locale, $this->module);

		// $this->assertEquals($this->message, $messageId);
	}

	public function testFind()
	{	
		// $sentence = $this->message->find($this->sentence, $this->locale, $this->module);
	}

}