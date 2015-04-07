<?php
/**
 * @package     Clementine
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$app = JFactory::getApplication();
$input = $app->input;

$topModules = intval($this->countModules('top'));
$logoClass = 'no-float-logo';
$floatLogo = false;

$sidebarsExist = '';

if ($topModules > 0) {
	$logoClass = 'float-logo';
	$floatLogo = true;
}

if ($this->countModules('sidebar1') || $this->countModules('sidebar2'))
	$sidebarsExist = ' sidebars_exist';

$paramOption = $input->getVar('option', '');
$paramView = $input->getVar('view', '');
$paramLayout = $input->getVar('layout', 'default');
$paramId = $input->getVar('id', '');

// Single article image (full image)
$wrightSingleArticleDisplay = false;
$wrightSingleArticleImage = '';

if ($paramOption == 'com_content' && $paramView == 'article')
{
	$db = JFactory::getDbo();
	$query = $db->getQuery(true);
	$query->select($db->qn('images'))
		->from($db->qn('#__content'))
		->where($db->qn('id') . ' = ' . (int) $paramId);
	$db->setQuery($query);
	$images = $db->loadResult();

	if ($images != '')
	{
		$imagesArray = json_decode($images);

		// If there is an image and the float is not set, it checks the global config
		if ($imagesArray->image_fulltext != '' && $imagesArray->float_fulltext == 'none')
		{
			$wrightSingleArticleDisplay = true;
		}
		elseif ($imagesArray->image_fulltext != '' && $imagesArray->float_fulltext == '')
		{
			$query->clear()
				->select($db->qn('params'))
				->from($db->qn('#__extensions'))
				->where($db->qn('name') . ' = ' . $db->q('com_content'));
			$db->setQuery($query);
			$config = $db->loadResult();
			$configArray = json_decode($config);

			if ($configArray->float_fulltext == 'none')
			{
				$wrightSingleArticleDisplay = true;
			}
		}

		if ($wrightSingleArticleDisplay)
		{
			$wrightSingleArticleImage = $imagesArray->image_fulltext;
			$wrightSingleArticleAlt = $imagesArray->image_fulltext_alt;
		}
	}
}

function checkImage($img, $default) {
        if ($img == "") {
                $img = $default;
        }
        elseif ($img != "-1") {
                $img = "images/" . $img;
        }

        if ($img != "-1") {
                $img = JPATH_BASE . '/' . $img;
                if (!file_exists($img)) {
                        $img = "-1";
                }
        }

        return $img;
}

$user = JFactory::getUser();

$bg = checkImage($this->params->get("backgroundImage", ""), "templates/js_clementine/images/default-bg.jpg");

if ($bg != "-1") $bg = str_replace(JPATH_BASE, '', $bg);
