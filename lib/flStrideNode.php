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
 * flStrideNode Class
 *
 * Base class for stride nodes.
 *
 * @package fusionLib
 */
abstract class flStrideNode {

	/**
	 * Convert the node to an array.
	 *
	 * @return array
	 */
	abstract function toJSON();
}