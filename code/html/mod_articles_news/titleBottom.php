<?php
// Wright v.3 Override: Joomla 2.5.28 and 3.3
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2015 Open Source Matters, Inc. 
 * 				All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

	$wrightNewsEnableIcons = false;
	$wrightEnableLinkContent = true;
	$wrightImageFirst = true;
	$wrightMaxColumns = 4;
	$wrightTitlePosition = 'below';

include(Overrider::getOverride('mod_articles_news','horizontal'));
?>
