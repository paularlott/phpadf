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
 * flStrideHardBreak Class
 *
 * Class to define a hardBreak node.
 *
 * @package fusionLib
 */
class flStrideHardBreak extends flStrideNode {

	/**
	 * @inheritdoc
	 */
	function toJSON() {
		return [
			'type' => 'hardBreak'
		];
	}
}