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
 * flStrideCodeBlock Class
 *
 * Class to define a code block.
 *
 * @package fusionLib
 */
class flStrideCodeBlock extends flStrideNode {

	/**
	 * The language for the code block.
	 *
	 * @var string
	 */
	protected $language;

	/**
	 * flStrideCodeBlock constructor.
	 * @param string $language The code block language.
	 */
	function __construct($language) {
		$this->language = $language;
	}

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type'    => 'codeBlock',
			'attrs'   => [
				'language' => $this->language
			],
			'content' => parent::toJSON()
		];
	}

	/**
	 * Text for the code block.
	 *
	 * @param string $text The text to add.
	 * @return flStrideCodeBlock The paragraph object.
	 */
	function text($text) {
		$this->nodes[] = new flStrideText($text);
		return $this;
	}
}