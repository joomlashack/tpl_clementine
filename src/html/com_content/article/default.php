<?php
/**
 * @package     Wright
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$params = $this->item->params;
$images = json_decode($this->item->images);
$sidebarsExist = (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'));  // check if there's a sidebar at all

if ($params->get('access-view'))
{
	$imageExist = (isset($images->image_fulltext) && !empty($images->image_fulltext)) ? true : false;
	$imageFloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext;

    if ($imageExist && $imageFloat == 'none')
    {
        if ($sidebarsExist)
        {
            $this->wrightElementsStructure = Array(
                "title",
                "image",
                "icons",
                "article-info",
                "legendtop",
                "content",
                "legendbottom",
                "article-info-below",
                "article-info-split",
                "bottom"
            );
        }
        else
        {
            $this->wrightElementsStructure = Array(
                "title",
                "icons",
                "article-info",
                "legendtop",
                "content",
                "legendbottom",
                "article-info-below",
                "article-info-split",
                "bottom"
            );
        }
    }
}

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/overrider.php';
include Overrider::getOverride('com_content.article');
