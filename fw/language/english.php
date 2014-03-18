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
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Warrior',
		2	=> 'Protector',
		3	=> 'Assassin',
		4	=> 'Marksman',
		5	=> 'Mage',
		6	=> 'Priest',
		7	=> 'Vampire',
		8	=> 'Bard',
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Dwarf',
		2	=> 'Elf',
		3	=> 'Human',
		4	=> 'Kindred',
		5	=> 'Stoneman',
		6	=> 'Lycan',
	),
	'roles' => array(
		1	=> 'Healer',
		2	=> 'Tank',
		3	=> 'Damage Dealer',
		4	=> 'Supporter',
	),
	
	'lang' => array(
		'fw'							=> 'Forsaken World',

		'plate'							=> 'Plate',
		'heavy'							=> 'Heavy',
		'light'							=> 'Cloth',	
		'medium'						=> 'Leather',
	
		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		
	),
);

?>