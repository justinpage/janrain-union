<?php namespace Janrain\Union\Lib;

/**
 * Serves template layer for Janrain Signin
 *
 * @package Janrain\Union
 * @author  (c) Justin Page <justin.page@qfor.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Controller 
{
	/**
	 * Serve template base on request
	 *
	 * @param String $request action
	 * @return Resource $file of template 
	 */
	public static function serve($request)
	{
		switch ($request) {
			case 'login':
				return JANRAIN_UNION_DIR . '/src/resources/login.php';
			case 'logout':
				return JANRAIN_UNION_DIR . '/src/resources/logout.php';
			case 'update':
				return JANRAIN_UNION_DIR . '/src/resources/update.php';
			case 'receive':
				return JANRAIN_UNION_DIR . '/src/bin/receive.html';
		}
	}
}
