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
 * flStrideText Class
 *
 * Class to define a text node.
 *
 * @package fusionLib
 */
class flStrideText extends flStrideNode {

	/**
	 * The text.
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * The marks.
	 *
	 * @var flStrideMarks
	 */
	protected $marks;

	/**
	 * flStrideText constructor.
	 * @param string $text The text.
	 * @param flStrideMarks $marks Optional marks.
	 */
	function __construct($text, $marks = null) {
		$this->text = (string)$text;
		$this->marks = $marks;
	}

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		$c = [
			'type' => 'text',
			'text' => $this->text
		];

		if($this->marks)
			$c['marks'] = $this->marks->toJSON();

		return $c;
	}
}