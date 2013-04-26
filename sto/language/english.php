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
		'Unknown',
		'Human',
		'Vulcan',
		'Bajoran',
		'Bolian',
		'Benzite ',
		'Betazoid',
		'Andorian',
		'Saurian',
		'Tellarite',
		'Ferengi',
		'Pakled',
		'Caitian',
		'Rigelian',
		//Klingon Empire
		'Orion',
		'Gorn',
		'Nausicaan',
		'Lethean',
		'Ferasan',
		//Shared
		'Klingon',
		'Liberated Borg',
		'Alien',
		'Trill',
		'Romulan',
		'Reman',
	),

	'lang' => array(
		'sto' => 'Star Trek Online',
	),
);

?>