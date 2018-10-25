<?php
/**
 * Created by PhpStorm.
 * User: LongPC
 * Date: 10/25/2018
 * Time: 13:27
 */

namespace Pika\Api\Traits;

trait UriParserTrait
{
	/**
	 * @return array
	 */
	protected function getUriApiAppends() {
		$appends = request()->query('appends', []);

		return $this->appends = explode(',', $appends);
	}

	/**
	 * @return bool
	 */
	protected function hasUriApiAppends() {
		return !empty($this->getUriApiAppends());
	}
}