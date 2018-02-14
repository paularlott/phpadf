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
 * flStrideListItem Class
 *
 * Class to define a listItem node.
 *
 * @package fusionLib
 */
class flStrideListItem extends flStrideNode {

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type'    => 'listItem',
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
}