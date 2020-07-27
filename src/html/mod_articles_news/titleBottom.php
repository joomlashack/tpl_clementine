<?php
/**
 * @package     Clementine
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$wrightNewsEnableIcons = false;
$wrightEnableLinkContent = true;
$wrightImageFirst = true;
$wrightMaxColumns = 4;
$wrightTitlePosition = 'below';

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/' . 'wright' . '/' . 'html' . '/' . 'overrider.php';
include Overrider::getOverride('mod_articles_news', 'horizontal');
