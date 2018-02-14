<?php

/**
 * THIS SOFTWARE IS PROVIDED "AS IS" AND WITHOUT ANY EXPRESS OR IMPLIED
 * WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package fusionLib
 * @copyright Copyright (c) 2018 fusionLib. All rights reserved.
 * @link http://fusionlib.com
 */

/**
 * flStrideEmoji Class
 *
 * Class to define an emoji node.
 *
 * @package fusionLib
 */
class flStrideEmoji extends flStrideNode {

	/**
	 * The short name of the emoji.
	 *
	 * @var string
	 */
	protected $shortName;

	/**
	 * flStrideEmoji constructor.
	 * @param string $shortName The name of the emoji.
	 */
	function __construct($shortName) {
		$this->shortName = $shortName;
	}

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type' => 'emoji',
			'attrs' => [
				'shortName' => $this->shortName
			]
		];
	}
}