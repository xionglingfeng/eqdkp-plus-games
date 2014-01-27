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
$german_array = array(
	'classes' => array(
		0 => 'Unbekannt',
		1 => 'Schwarzmagier',
		2 => 'Krieger',
		3 => 'Dragoon',
		4 => 'Mönch',
		5 => 'Paladin',
		6 => 'Barde',
		7 => 'Weißmagier',
		8 => 'Beschwörer',
		9 => 'Gelehrter',
		
	),
	'races' => array(
		'Unbekannt',
		'Elezen',
		'Roegadyn',
		'Hyuran',
		'Miqote',
		'Lalafell',
	),
	'factions' => array(
		'Gridania',
		'Limsa Lominsa',
		'Uldah',
	),
	'lang' => array(
		'ffxiv'			=> 'Final Fantasy XIV',
		'tank'			=> 'Tank',
		'support'		=> 'Heiler',
		'damage_dealer'	=> 'Damage Dealer',
		
		// Profile information
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
	),
);
?>