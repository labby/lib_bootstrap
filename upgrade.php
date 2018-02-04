<?php

/**
 *  @module      	Library Bootstrap
 *  @version        see info.php of this module
 *  @author         cms-lab
 *  @copyright      2014-2018 CMS-LAB
 *  @license        http://opensource.org/licenses/MIT
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

//  remove unneeded files 
if (!function_exists('rm_full_dir')) {
    include_once LEPTON_PATH.'/framework/functions/function.rm_full_dir.php';
}

if (file_exists (LEPTON_PATH.'/modules/lib_bootstrap/bootstrap/fonts/index.php')) {	
		rm_full_dir( LEPTON_PATH.'/modules/lib_bootstrap/bootstrap/fonts' ); 
}

$temp_path = LEPTON_PATH ."/modules/lib_bootstrap/bootstrap/css/";
$to_delete = array(
		"bootstrap-theme.css",
		"bootstrap-theme.css.map",
		"bootstrap-theme.min.css",
		"bootstrap-theme.min.css.map",
		"bootstrap-reboot.min.css",		
		"bootstrap-reboot.min.css.map",
		"bootstrap-reboot.css",
		"bootstrap-reboot.css.map",
		"bootstrap-grid.css",
		"bootstrap-grid.css.map",
		"bootstrap-grid.min.css",
		"bootstrap-grid.min.css.map"
);
		
foreach ($to_delete as $ref)  {	
	if (file_exists($temp_path.$ref)) {
		$result = unlink ($temp_path.$ref);
		if (false === $result) {
			echo "Cannot delete file ".$ref.". Please check file permissions and ownership or delete file manually.";
		}
	}
}
?>
