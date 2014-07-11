<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Krieger',
		2	=> 'Patriot',
		3	=> 'Assassine',
		4	=> 'Schütze',
		5	=> 'Magier',
		6	=> 'Priester',
		7	=> 'Vampir',
		8	=> 'Barde',
		9	=> 'Seelensammler',
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Zwerg',
		2	=> 'Elf',
		3	=> 'Mensch',
		4	=> 'Kindred',
		5	=> 'Steinmensch',
		6	=> 'Lykaner',
	),
	'roles' => array(
		1	=> 'Heiler',
		2	=> 'Tank',
		3	=> 'Schadensausteiler',
		4	=> 'Unterstützer',
	),
	
	'lang' => array(
		'fw'							=> 'Forsaken World',

		'plate'							=> 'Platte',
		'heavy'							=> 'Schwere Rüstung',
		'light'							=> 'Stoff',	
		'medium'						=> 'Leder',
	
		// Profile information
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
		
	),
);

?>