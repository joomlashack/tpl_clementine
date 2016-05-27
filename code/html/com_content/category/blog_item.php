<?php
/**
 * @package     Clementinea
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

require_once JPATH_THEMES.'/'.$app->getTemplate().'/html/com_content/com_content.helper.php';
require_once JPATH_THEMES.'/'.$app->getTemplate().'/wright/html/overrider.php';
$params = &$this->item->params;
$images = json_decode($this->item->images);


if ($images->image_intro != '')
{
	$this->item->wrightElementsStructure = Array(
		"div.article-image-top",
			"image",
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
			"image",
			"legendtop",
		"/div"
	);
}
else
{
	$this->item->wrightElementsStructure = Array(
		"image",
		"legendtop",
		"div.article-content",
			"title",
			"icons",
			"article-info",
			"content",
			"legendbottom",
		"/div"
	);
}

include Overrider::getOverride('com_content.category', 'blog_item');
