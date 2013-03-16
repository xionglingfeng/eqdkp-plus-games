<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
 * Date:		$Date: 2012-05-11 12:21:28 +0200 (Fri, 11 May 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: wallenium $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 11783 $
 * 
 * $Id: german.php 11783 2012-05-11 10:21:28Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(

		0 => 'Unbekannt',
		1 => 'Krieger',
        2 => 'Arkanschütze',
		3 => 'Meuchler',
		4 => 'Esper',
	),
	
	'races' => array(
		'Unknown',
		'Mensch',
		'Cassianer',
		'Granok',
		'Draken',
		'Aurin',
		'Mechari'

	),
	
	'roles' => array(
		1 => array(2,4),
		2 => array(1,3),
		3 => array(1,2,3,4),		
		
	),

	'lang' => array(
		'wildstar'	=> 'Wildstar Online',
		'heavy' => 'Schwere Rüstung',
		'medium' => 'Mittlere Rüstung',
		'light' => 'Leichte Rüstung',
		'role1' => 'Heiler',
		'role2' => 'Tank',
		'role3' => 'Damage Dealer',		

		// Profile information
		'uc_path'					=> 'Pfad',
		'uc_gender'					=> 'Geschlecht',
		'uc_male'					=> 'Männlich',
		'uc_female'					=> 'Weiblich',
		'uc_guild'					=> 'Gilde',
		
		// Pfade
		
		'uc_path_0' => '-',
		'uc_path_1' => 'Kundschafter',
		'uc_path_2' => 'Wissenschaftler',
		'uc_path_3' => 'Soldat',
		'uc_path_4' => 'Siedler',
	),
);

?>