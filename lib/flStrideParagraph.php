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
 * flStrideParagraph Class
 *
 * Class to define a stride paragraph.
 *
 * @package fusionLib
 */
class flStrideParagraph extends flStrideNode {

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type' => 'paragraph',
			'content' => parent::toJSON()
		];
	}

	/**
	 * Add text.
	 *
	 * @param string $text Text to add.
	 * @param flStrideMarks $marks Optional marks to add to the text.
	 * @return flStrideParagraph The paragraph object.
	 */
	function text($text, $marks = null) {
		$this->nodes[] = new flStrideText($text, $marks);
		return $this;
	}

	/**
	 * Add bold text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function strong($text) {
		return $this->text($text, (new flStrideMarks())->strong());
	}

	/**
	 * Add italic text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function em($text) {
		return $this->text($text, (new flStrideMarks())->em());
	}

	/**
	 * Add code.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function code($text) {
		return $this->text($text, (new flStrideMarks())->code());
	}

	/**
	 * Add a link.
	 *
	 * @param string $text Anchor text.
	 * @param string $href The link target.
	 * @return flStrideParagraph The paragraph object.
	 */
	function link($text, $href) {
		return $this->text($text, (new flStrideMarks())->link($href));
	}

	/**
	 * Add an emoji.
	 *
	 * @param string $shortName The name of the emoji.
	 * @return flStrideParagraph The paragraph object.
	 */
	function emoji($shortName) {
		$this->nodes[] = new flStrideEmoji($shortName);
		return $this;
	}

	/**
	 * Add a heard break.
	 *
	 * @return flStrideParagraph The paragraph object.
	 */
	function hardBreak() {
		$this->nodes[] = new flStrideHardBreak();
		return $this;
	}

	/**
	 * Add a mention.
	 *
	 * @param string $id The account id.
	 * @param string $text The textual name including the leading @.
	 * @return flStrideParagraph The paragraph object.
	 */
	function mention($id, $text) {
		$this->nodes[] = new flStrideMention($id, $text);
		return $this;
	}
}
