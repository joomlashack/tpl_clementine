<?php
/**
 * @package   tpl_wright
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright 2020 Joomlashack. All rights reserved
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

use Alledia\Installer;

defined('_JEXEC') or die();

require_once 'library/Installer/include.php';

jimport('joomla.filesystem.folder');


/**
 * Custom installer script
 */
if (!class_exists('JS_ClementineInstallerScript')) {
    class JS_ClementineInstallerScript extends Installer\AbstractScript
    {
        /**
         * @param string                     $type
         * @param JInstallerAdapterComponent $parent
         *
         * @return bool
         */
        public function preFlight($type, $parent)
        {
            if (!parent::preFlight($type, $parent)) {
                return false;
            }
            
            return true;
        }
    }
}
