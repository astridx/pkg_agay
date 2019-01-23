<?php
/**
 * @package     Joomla.Site
 * @subpackage  pkg_aggpxtrack
 *
 * @copyright   Copyright (C) 2005 - 2018 Astrid Günther, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later;
 * @link        astrid-guenther.de
 */

defined('_JEXEC') or die;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  1.0.76
 */
class Pkg_AgayInstallerScript extends JInstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @return  void
	 *
	 * @since   0.0.1
	 */
	public function __construct()
	{
		$this->minimumJoomla = '3.7.0';
		$this->minimumPhp    = JOOMLA_MINIMUM_PHP;
	}
}
