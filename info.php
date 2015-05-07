<?php

/**
 *  @module      	Library Bootstrap
 *  @version        see info.php of this module
 *  @author         cms-lab
 *  @copyright      2014-2015 CMS-LAB
 *  @license        https://github.com/twbs/bootstrap/blob/master/LICENSE
 *  @license terms  see info.php of this template
 *  @platform       see info.php of this template
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



$module_directory = 'lib_bootstrap';
$module_name      = 'Bootstrap Library';
$module_function  = 'library';
$module_version   = '3.3.4.0';
$module_platform  = '2.x';
$module_delete	  =  true;
$module_author    = 'cms-lab';
$module_license   = 'https://github.com/twbs/bootstrap/blob/master/LICENSE';
$module_license_terms   = '-';
$module_description = 'This module installs basic files Bootstrap (http://getbootstrap.com).';
$module_guid      = '3a2bf544-2c3c-437e-b8f2-1a4523bd1440';
$module_home      = 'http://www.cms-lab.com';

?>