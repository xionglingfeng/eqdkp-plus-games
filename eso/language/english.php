<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2012
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
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Dragon Knight',
		2	=> 'Templar',
		3	=> 'Sorcerer',
		4	=> 'Nightblade',
	),
	'races' => array(
		'Altmer', 'Bosmer', 'Khajiit',
		'Bretons', 'Redguards', 'Orcs',
		'Nord', 'Dunmer', 'Argonians',
	),
	'factions' => array(
		'Aldmeri-Dominion',
		'Daggerfall Covenant',
		'Ebonheart Pact',
	),
	'lang' => array(
		'eso'					=> 'The Elder Scrolls Online',
		'pk_tab_fs_esosettings'	=> 'Elder Scrolls Settings',
		'eso_faction'			=> 'Faction',
	),
);

?>