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
		0 => 'Unknown',
		1 => 'Warrior',
		2 => 'Monk',
		3 => 'Mage',
		4 => 'Ranger',
	),
	'races' => array(
		'Unknown',
		'Humans',
		'Elves',
		'Orcs',
		'Undead'
	),
	'roles' => array(
		1 => array(2),
		2 => array(1),
		3 => array(1,2,3,4),
		4 => array(2,4),
	),
	'lang' => array(
		'oco' => 'Order and Chaos Online',
		'plate'	=> 'Plate',
		'heavy' => 'Heavy',
		'light' => 'Cloth',	
		'medium' => 'Leather',
		'role1' => 'Healer',
		'role2' => 'Tank',
		'role3' => 'Damage Dealer',
		'role4' => 'Supporter',
	),
);
?>