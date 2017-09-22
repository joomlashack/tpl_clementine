<?php
/**
 * @package     Clementine
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$template = $app->getTemplate(true);

$mondrianFullWidthBg = ($template->params->get('mondrian_full_width_background', '0') == '1' ? true : false);

// Template's gridMode
$gridMode = $template->params->get('bs_rowmode', 'row');
$containerClass = ($gridMode == 'row-fluid' ? 'container-fluid' : 'container');


$sidebarsExist = 0;

if (JModuleHelper::getModules('sidebar1') || JModuleHelper::getModules('sidebar2'))
{
	$sidebarsExist = 1;
}

if ($sidebarsExist)
{
	// Class added to the intro articles (adds an extra wrapper)
	$this->wrightIntroItemsClass = 'container-items';

	// Add row mode for each row of the intro articles
	$this->wrightIntroRowsClass = 'row-fluid';
}
else
{
	// Class added to the intro articles (adds an extra wrapper)
	$this->wrightIntroItemsClass = 'container-fluid container-items';

	// Add row mode for each row of the intro articles
	$this->wrightIntroRowsClass = $containerClass;
	$this->wrightLeadingItemsClass = $containerClass;
}

// Class added to the complements (links, subcategories and pagination) - adds an extra wrapper for all of them
$this->wrightComplementOuterClass = $containerClass;

// Class added to each complement (links, subcategories and pagination - as blocks).  Adds an extra wrapper before the "Inner" div
$this->wrightComplementExtraClass = $gridMode;

// Class added to each complement (links,
// subcategories and pagination - as blocks).  Adds an extra wrapper when needed, or uses the existing one if found
$this->wrightComplementInnerClass = 'span12';

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/' . 'wright' . '/' . 'html' . '/' . 'overrider.php';
include Overrider::getOverride('com_content.featured');
