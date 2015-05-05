<?php
/**
 * @package     Clementine
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$template = $app->getTemplate(true);

$mondrianFullWidthBg = ($template->params->get('mondrian_full_width_background','0') == '1' ? true : false);
$gridMode = $template->params->get('bs_rowmode','row');  // template's gridMode
$containerClass = ($gridMode == 'row-fluid' ? 'container-fluid' : 'container');

$this->wrightIntroItemsClass = 'container-fluid container-items';  // Class added to the intro articles (adds an extra wrapper)
$this->wrightIntroRowMode = 'container';  // row mode for each row of the intro articles

$this->wrightComplementOuterClass = $containerClass; // Class added to the complements (links, subcategories and pagination) - adds an extra wrapper for all of them
$this->wrightComplementExtraClass = $gridMode; // Class added to each complement (links, subcategories and pagination - as blocks).  Adds an extra wrapper before the "Inner" div
$this->wrightComplementInnerClass = 'span12'; // Class added to each complement (links, subcategories and pagination - as blocks).  Adds an extra wrapper when needed, or uses the existing one if found


require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.category','blog'));
?>