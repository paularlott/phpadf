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
 * flStridePanel Class
 *
 * Class to define a stride panel.
 *
 * @package fusionLib
 */
class flStridePanel extends flStrideNode {

	/**#@+
	 * Transfer method.
	 */
	const INFO = 'info';
	const NOTE = 'note';
	const TIP = 'tip';
	const WARNING = 'warning';
	/**#@-*/

	/**
	 * The panel type.
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * flStridePanel constructor.
	 * @param string $type The panel type.
	 */
	function __construct($type) {
		$this->type = $type;
	}

	/**
	 * Convert the document to an array.
	 *
	 * @return array The JSON representation of the document.
	 */
	function toJSON() {
		return [
			'type'    => 'panel',
			'attrs'   => [
				'panelType' => $this->type
			],
			'content' => parent::toJSON()
		];
	}

	/**
	 * Create a new paragraph.
	 *
	 * @return flStrideParagraph The paragraph object.
	 */
	function paragraph() {
		return $this->nodes[] = new flStrideParagraph();
	}

	/**
	 * Create a bullet list.
	 *
	 * @return flStrideBulletList
	 */
	function bulletList() {
		return $this->nodes[] = new flStrideBulletList();
	}

	/**
	 * Create an ordered list.
	 *
	 * @return flStrideOrderedList
	 */
	function orderedList() {
		return $this->nodes[] = new flStrideOrderedList();
	}

	/**
	 * Create a heading.
	 *
	 * @param int $number The heading level 1 - 6
	 * @param string $text The heading text.
	 * @oaran flStrideMarks $marks Optional marks.
	 * @return flStrideHeading
	 */
	function heading($number, $text, $marks = null) {
		return $this->nodes[] = new flStrideHeading($number, $text, $marks);
	}
}
