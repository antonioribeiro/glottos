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

use PragmaRX\Glottos\Repositories\Cache\Cache;
 
class CacheTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->message = 'This is a string sentence';

		$this->cache = new Cache();
	}

	public function testPutGet()
	{
		$this->cache->put(1, $this->message);

		$this->assertEquals($this->cache->get(1), $this->message);
	}

}