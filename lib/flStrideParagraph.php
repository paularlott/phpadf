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
	 * The content of the paragraph.
	 *
	 * @var array
	 */
	protected $content = [];

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type' => 'paragraph',
			'content' => $this->content
		];
	}

	/**
	 * Internal function to add to the paragraph.
	 *
	 * @param string $text The text to add.
	 * @param array|null $marks The marks data.
	 */
	protected function _add($text, $marks = null) {
		$c = [
			'type' => 'text',
			'text' => $text
		];

		if($marks)
			$c['marks'] = $marks;

		$this->content[] = $c;
	}

	/**
	 * Add text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function text($text) {
		$this->_add($text);
		return $this;
	}

	/**
	 * Add bold text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function strong($text) {
		$this->_add(
			$text,
			[
				[
					'type' => 'strong'
				]
			]
		);
		return $this;
	}

	/**
	 * Add italic text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function em($text) {
		$this->_add(
			$text,
			[
				[
					'type' => 'em'
				]
			]
		);
		return $this;
	}

	/**
	 * Add code.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function code($text) {
		$this->_add(
			$text,
			[
				[
					'type' => 'code'
				]
			]
		);
		return $this;
	}

	/**
	 * Strike through text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function strike($text) {
		$this->_add(
			$text,
			[
				[
					'type' => 'strike'
				]
			]
		);
		return $this;
	}

	/**
	 * Underlined text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function underline($text) {
		$this->_add(
			$text,
			[
				[
					'type' => 'underline'
				]
			]
		);
		return $this;
	}

	/**
	 * Coloured text.
	 *
	 * @param string $text Text to add.
	 * @param string $color The color to use.
	 * @return flStrideParagraph The paragraph object.
	 */
	function textColor($text, $color) {
		$this->_add(
			$text,
			[
				[
					'type'  => 'textColor',
					'attrs' => [
						'color' => $color
					]
				]
			]
		);
		return $this;
	}

	/**
	 * Subscript text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function sub($text) {
		$this->_add(
			$text,
			[
				[
					'type'  => 'subsup',
					'attrs' => [
						'type' => 'sub'
					]
				]
			]
		);
		return $this;
	}

	/**
	 * Superscript text.
	 *
	 * @param string $text Text to add.
	 * @return flStrideParagraph The paragraph object.
	 */
	function sup($text) {
		$this->_add(
			$text,
			[
				[
					'type'  => 'subsup',
					'attrs' => [
						'type' => 'sup'
					]
				]
			]
		);
		return $this;
	}

	/**
	 * Add a link.
	 *
	 * @param string $text Anchor text.
	 * @param string $href The link target.
	 * @return flStrideParagraph The paragraph object.
	 */
	function link($text, $href) {
		$this->_add(
			$text,
			[
				[
					'type'  => 'link',
					'attrs' => [
						'href' => $href
					]
				]
			]
		);
		return $this;
	}

	/**
	 * Add an emoji.
	 *
	 * @param string $shortName The name of the emoji.
	 * @return flStrideParagraph The paragraph object.
	 */
	function emoji($shortName) {
		$this->content[] = [
			'type' => 'emoji',
			'attrs' => [
				'shortName' => $shortName
			]
		];
		return $this;
	}

	/**
	 * Add a heard break.
	 *
	 * @return flStrideParagraph The paragraph object.
	 */
	function hardBreak() {
		$this->content[] = [
			'type' => 'hardBreak'
		];
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
		$this->content[] = [
			'type'  => 'mention',
			'attrs' => [
				'id'       => $id,
				'text'     => $text
			]
		];
		return $this;
	}
}
