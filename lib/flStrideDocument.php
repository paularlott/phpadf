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
 * flStrideDocument Class
 *
 * Class to define a stride document.
 *
 * @package fusionLib
 */
class flStrideDocument {

	/**
	 * Array of nodes that make up the document.
	 *
	 * @var flStrideNode[]
	 */
	protected $nodes = [];

	/**
	 * Convert the document to an array.
	 *
	 * @return array The JSON representation of the document.
	 */
	function toJSON() {

		// Define the document
		$document = [
			'type'    => 'doc',
			'version' => 1,
			'content' => []
		];

		// Add the content
		foreach($this->nodes as $node) {
			$document['content'][] = $node->toJSON();
		}

		return $document;
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
	 * Create a new code block.
	 *
	 * @param string $language The language for the code block.
	 * @return flStrideCodeBlock The code block object.
	 */
	function codeBlock($language) {
		return $this->nodes[] = new flStrideCodeBlock($language);
	}

	/**
	 * Create a blockquote.
	 *
	 * @return flStrideBlockquote The code block object.
	 */
	function blockquote() {
		return $this->nodes[] = new flStrideBlockquote();
	}
}
