<?php

/**
 * @package     Clementinea
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.

defined('_JEXEC') or die;

$app = JFactory::getApplication();

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/overrider.php';

$this->item->wrightElementsStructure = Array(
	"div.article-image-top",
		"div.img-peak",
			"image",
		"/div",
		"legendtop",
	"/div",
	"div.article-content",
		"title",
		"icons",
		"article-info",
		"content",
		"legendbottom",
	"/div",
	"div.article-image-bottom",
		"div.img-peak",
			"image",
		"/div",
		"legendtop",
	"/div"
);

include Overrider::getOverride('com_content.featured', 'default_item');
