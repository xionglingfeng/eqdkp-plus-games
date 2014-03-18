<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2010
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
		1	=> 'Bard',
		2	=> 'Blade Dancer',
		3	=> 'Cleric',
		4	=> 'Engineer',
		5	=> 'Hunter',
		6	=> 'Illusionist',
		7	=> 'Knight',
		8 	=> 'Magician',
		9	=> 'Martial Artist',
		10	=> 'Ranger',
		11  => 'Shaman',
		12	=> 'Templar',
		13	=> 'Thief',
		14	=> 'Warlock',
		15	=> 'Warrior',
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Human',
		2	=> 'Zumi',
		3	=> 'Anuran',
		4	=> 'Halfkin',
		5	=> 'Ursun',
	),

	'lang' => array(
		'eden'							=> 'Eden Eternal',
		'tank'							=> 'Tank',
		'healer'						=> 'Healer',
		'support'						=> 'Support',
		'melee'							=> 'Melee',
		'ranged'						=> 'Ranged',

		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',

	),
);
?>