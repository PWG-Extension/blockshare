<?php
/**
*
* Block Share extension for the phpBB Forum Software package.
*
* @copyright © 2018 Alexander Kadnikov [Predator], © «PWG», 2004-2018. All Rights Reserved.
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BS_SHARE'		=> 'Поделиться',

));
