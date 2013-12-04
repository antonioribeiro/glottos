<?php namespace PragmaRX\Glottos\Repositories\Messages;
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

class Message extends MessageBase implements MessageInterface {

	/**
	 * Find a Sentence in the data source
	 * 
	 * @param  Sentence $sentence 
	 * @return object|null
	 */
	public function find(Sentence $sentence)
	{
		$cacheKey = __CLASS__.__FUNCTION__.$sentence->getHash();

		if( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model
							->where('hash', $sentence->getHash())
							->first();
		}

		if ( ! $model)
		{
			$key = $sentence->getMode() == 'key' ? $sentence->getSentence() : null;

			$model = $this->model->create(['hash' => $sentence->getHash(), 'key' => $key]);
		}

		if( ! $cached )
		{
			$this->cache->put($cacheKey, $model);
		}

		$sentence->setId($model->id);

		return $sentence;
	}

	/**
	 * Find, by id, a Sentence in the data source
	 * 
	 * @param  integer $message_id 
	 * @return object|null
	 */
	public function findById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * Find, by text, a Sentence in the data source
	 * 
	 * @param  string $message 
	 * @return object|null
	 */
	public function findByText($message)
	{
		return $this->message->findByText($message);
	}
}