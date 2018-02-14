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
 * flStrideMarks Class
 *
 * Class to build marks for stride documents.
 *
 * @package fusionLib
 */
class flStrideMarks {

	/**
	 * The array of mark data
	 * @var array
	 */
	protected $marks = [];

	/**
	 * Add a code mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function code() {
		$this->marks[] = [
			'type' => 'code'
		];
		return $this;
	}

	/**
	 * Add a em mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function em() {
		$this->marks[] = [
			'type' => 'em'
		];
		return $this;
	}

	/**
	 * Add a link mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function link($href) {
		$this->marks[] = [
			'type'  => 'link',
			'attrs' => [
				'href' => $href
			]
		];
		return $this;
	}

	/**
	 * Add a strike mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function strike() {
		$this->marks[] = [
			'type' => 'strike'
		];
		return $this;
	}

	/**
	 * Add a strong mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function strong() {
		$this->marks[] = [
			'type' => 'strong'
		];
		return $this;
	}

	/**
	 * Add a sub mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function sub() {
		$this->marks[] = [
			'type'  => 'subsup',
			'attrs' => [
				'type' => 'sub'
			]
		];
		return $this;
	}

	/**
	 * Add a sup mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function sup() {
		$this->marks[] = [
			'type'  => 'subsup',
			'attrs' => [
				'type' => 'sup'
			]
		];
		return $this;
	}

	/**
	 * Add a textColor mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function textColor($color) {
		$this->marks[] = [
			'type'  => 'textColor',
			'attrs' => [
				'color' => $color
			]
		];
		return $this;
	}

	/**
	 * Add a underline mark.
	 *
	 * @return flStrideMarks This object.
	 */
	function underline() {
		$this->marks[] = [
			'type'  => 'underline'
		];
		return $this;
	}

	/**
	 * Get the ADF JSON for the defined marks.
	 *
	 * @return array The Atlassian Document Format
	 */
	function toJSON() {
		return $this->marks;
	}
}