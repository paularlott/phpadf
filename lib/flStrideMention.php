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
 * flStrideMention Class
 *
 * Class to define a mention node.
 *
 * @package fusionLib
 */
class flStrideMention extends flStrideNode {

	/**
	 * The account id.
	 *
	 * @var string
	 */
	protected $id;

	/**
	 * The textual name including the leading @.
	 * @var string
	 */
	protected $text;

	/**
	 * flStrideMention constructor.
	 * @param string $id The account id.
	 * @param string $text The textual name including the leading @.
	 */
	function __construct($id, $text) {
		$this->id = $id;
		$this->text = $text;
	}

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type'  => 'mention',
			'attrs' => [
				'id'       => $this->id,
				'text'     => $this->text
			]
		];
	}
}