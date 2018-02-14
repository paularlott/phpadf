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
 * flStrideHeading Class
 *
 * Class to define a heading.
 *
 * @package fusionLib
 */
class flStrideHeading extends flStrideNode {

	/**
	 * The heading level.
	 *
	 * @var int
	 */
	protected $number;

	/**
	 * flStrideHeading constructor.
	 * @param string $number The heading level.
	 * @param string $text The heading text.
	 * @param flStrideMarks $marks Optional marks.
	 */
	function __construct($number, $text, $marks = null) {
		$this->text($text, $marks);
		$this->number = $number;
	}

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type'    => 'heading',
			'attrs'   => [
				'level' => (int)$this->number
			],
			'content' => parent::toJSON()
		];
	}

	/**
	 * Add text.
	 *
	 * @param string $text The text to add.
	 * @param flStrideMarks $marks Optional marks.
	 * @return flStrideHeading The paragraph object.
	 */
	function text($text, $marks = null) {
		$this->nodes[] = new flStrideText($text, $marks);
		return $this;
	}
}