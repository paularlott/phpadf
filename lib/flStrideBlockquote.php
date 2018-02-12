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
 * flStrideBlockquote Class
 *
 * Class to define a block quote.
 *
 * @package fusionLib
 */
class flStrideBlockquote extends flStrideNode {

	/**
	 * Array of nodes that make up the document.
	 *
	 * @var flStrideNode[]
	 */
	protected $nodes = [];

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		$quote = [
			'type'    => 'blockquote',
			'content' => []
		];

		// Add the content
		foreach($this->nodes as $node) {
			$quote['content'][] = $node->toJSON();
		}

		return $quote;
	}

	/**
	 * Create a new paragraph.
	 *
	 * @return flStrideParagraph The paragraph object.
	 */
	function paragraph() {
		return $this->nodes[] = new flStrideParagraph();
	}
}