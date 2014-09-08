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
		0	=> 'Unbekannt',
		1	=> 'Assassin',
		2	=> 'Barbar',
		3	=> 'Waldläufer',
		4	=> 'Eroberer',
		5	=> 'Dunkler Templer',
		6	=> 'Wächter',
		7	=> 'Dämonologe',
		8	=> 'Herold des Xotli',
		9	=> 'Nekromant',
		10	=> 'Bärenschamane',
		11	=> 'Mitrapriester',
		12	=> 'Vollstrecker Sets'
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aquilonier',
		2	=> 'Cimmerier',
		3	=> 'Stygier',
		4	=> 'Khitaner'
	),
	'factions' => array(
		'good'	=> 'Gut',
		'evil'	=> 'Böse'
	),
	'lang' => array(
		'aoc'							=> 'Age of Conan',
		'rogue'							=> 'Schurke',
		'soldier'						=> 'Soldat',
		'mage'							=> 'Magier',
		'priest'						=> 'Priester',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Age of Conan Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Wähle die Standard-Fraktion',
	),
);
?>