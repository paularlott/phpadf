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
 * flStrideOrderedList Class
 *
 * Class to define an ordered list.
 *
 * @package fusionLib
 */
class flStrideOrderedList extends flStrideNode {

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type'    => 'orderedList',
			'content' => parent::toJSON()
		];
	}

	/**
	 * Create a list item.
	 *
	 * @return flStrideParagraph The paragraph within the item.
	 */
	function listItem() {
		return ($this->nodes[] = new flStrideListItem())->paragraph();
	}

	/**
	 * Add text.
	 *
	 * @param string $text Text to add.
	 * @param flStrideMarks $marks Optional marks to add to the text.
	 * @return flStrideOrderedList The paragraph object.
	 */
	function textItem($text, $marks = null) {
		$this->listItem()->text($text, $marks);
		return $this;
	}

	/**
	 * Add link text.
	 *
	 * @param string $text Text to add.
	 * @param string $href The link target.
	 * @return flStrideOrderedList The paragraph object.
	 */
	function linkItem($text, $href) {
		$this->listItem()->link($text, $href);
		return $this;
	}
}