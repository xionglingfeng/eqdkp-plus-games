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
		1	=> 'Blackmage',
		2	=> 'Warrior',
		3	=> 'Dragoon',
		4	=> 'Monk',
		5	=> 'Paladin',
		6	=> 'Bard',
		7	=> 'Whitemage',
		8 	=> 'Summoner',
		9	=> 'Scholar',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Elezen',
		2	=> 'Roegadyn',
		3	=> 'Hyuran',
		4	=> 'Miqote',
		5	=> 'Lalafell',
	),
	'factions' => array(
		'gridania'	=> 'Gridania',
		'limsa'		=> 'Limsa Lominsa',
		'uldah'		=> 'Uldah',
	),
	'lang' => array(
		'ffxiv'							=> 'Final Fantasy XIV',
		'tank'							=> 'Tank',
		'support'						=> 'Healer',
		'damage_dealer'					=> 'Damage Dealer',

		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
	),
);
?>
