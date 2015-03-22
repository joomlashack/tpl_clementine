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

$topModules = intval($this->countModules('top'));
$logoClass = '';
$floatLogo = false;

if ($topModules > 0) {
	$logoClass = 'float-logo';
	$floatLogo = true;
}

?>