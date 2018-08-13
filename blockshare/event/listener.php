<?php
/**
*
* Block Share extension for the phpBB Forum Software package.
*
* @copyright © 2018 Alexander Kadnikov [Predator], © «PWG», 2004-2018. All Rights Reserved.
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace pwg\blockshare\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=>	'load_language_on_setup',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'pwg/blockshare',
			'lang_set' => 'blockshare',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}