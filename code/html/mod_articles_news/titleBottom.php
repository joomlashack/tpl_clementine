<?php
/**
 * @package     Clementine
 * @subpackage  mod_articles_news
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

	$wrightNewsEnableIcons = false;
	$wrightEnableLinkContent = true;
	$wrightImageFirst = true;
	$wrightMaxColumns = 4;
	$wrightTitlePosition = 'below';

include Overrider::getOverride('mod_articles_news', 'horizontal');
