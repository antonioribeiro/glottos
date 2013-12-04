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

use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Filesystem;

class ConfigTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->config = new Config(new Filesystem);
	}

	public function testLoadedAndGet()
	{
		$this->assertEquals($this->config->get('default_language_id'), 'en');
		$this->assertEquals($this->config->get('default_country_id'), '');
	}

	public function testDefault()
	{
		$this->assertEquals($this->config->get('non_existant_config_key', 'default_value'), 'default_value');
	}

}