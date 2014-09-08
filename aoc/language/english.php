<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
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
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Assassin',
		2	=> 'Barbarian',
		3	=> 'Ranger',
		4	=> 'Conqueror',
		5	=> 'Dark Templar',
		6	=> 'Guardian',
		7	=> 'Demonologist',
		8	=> 'Herald of Xotli',
		9	=> 'Necromancer',
		10	=> 'Bear Shaman',
		11	=> 'Priest of Mitra',
		12	=> 'Tempest of Set'
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aquilonian',
		2	=> 'Cimmerian',
		3	=> 'Stygian',
		4	=> 'Khitan'
	),
	'factions' => array(
		'good'	=> 'Good',
		'evil'	=> 'Evil'
	),
	'lang' => array(
		'aoc'							=> 'Age of Conan',
		'rogue'							=> 'Rogue',
		'soldier'						=> 'Soldier',
		'mage'							=> 'Mage',
		'priest'						=> 'Priest',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Age of Conan Settings',
		'uc_faction'					=> 'Faction',
		'uc_faction_help'				=> 'Select the default faction',
	),
);
?>