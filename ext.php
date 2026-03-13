<?php
/**
*
* @package Quick Login Extension
* @copyright (c) 2015 PayBas
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace avathar\quicklogin;

use phpbb\extension\base;

class ext extends base
{
	/**
	* Enable extension if phpBB version requirement is met
	*
	* @return bool
	*/
	public function is_enableable()
	{
		$is_enableable = phpbb_version_compare(PHPBB_VERSION, '3.3.0', '>=');

		if (!$is_enableable)
		{
			$this->container->get('language')->add_lang('ext_enable_error', 'avathar/quicklogin');
		}

		return $is_enableable;
	}
}
