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
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'FED-Engineering',
		2	=> 'FED-Science',
		3	=> 'FED-Tactical',
		4	=> 'KDF-Engineering',
		5	=> 'KDF-Science',
		6	=> 'KDF-Tactical',
		7	=> 'RR-Engineering',
		8	=> 'RR-Science',
		9	=> 'RR-Tactical',
	),
	'races' => array(
		//Federation
		0	=> 'Unknown',
		1	=> 'Human',
		2	=> 'Vulcan',
		3	=> 'Bajoran',
		4	=> 'Bolian',
		5	=> 'Benzite ',
		6	=> 'Betazoid',
		7	=> 'Andorian',
		8	=> 'Saurian',
		9	=> 'Tellarite',
		10	=> 'Ferengi',
		11	=> 'Pakled',
		12	=> 'Caitian',
		13	=> 'Rigelian',
		//Klingon Empire
		14	=> 'Orion',
		15	=> 'Gorn',
		16	=> 'Nausicaan',
		17	=> 'Lethean',
		18	=> 'Ferasan',
		//Shared
		19	=> 'Klingon',
		20	=> 'Liberated Borg',
		21	=> 'Alien',
		22	=> 'Trill',
		23	=> 'Romulan',
		24	=> 'Reman',
	),

	'lang' => array(
		'sto'						=> 'Star Trek Online',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',
	),
);

?>