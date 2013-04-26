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
		1 => 'FED-Ingenieur',
		2 => 'FED-Wissenschaftler',
		3 => 'FED-Taktiker',
		4 => 'KDF-Ingenieur',
		5 => 'KDF-Wissenschaftler',
		6 => 'KDF-Taktiker',
		7 => 'RR-Ingenieur',
		8 => 'RR-Wissenschaftler',
		9 => 'RR-Taktiker',
		
	),
	'races' => array(
		//Federation
		'Unknown',
		'Menschen',
		'Vulkanier',
		'Bajoraner',
		'Bolian',
		'Benzite ',
		'Betazoiden',
		'Andorian',
		'Saurian',
		'Tellariten',
		'Ferengi',
		'Pakled',
		'Caitian',
		'Rigelian',
		//Klingon Empire
		'Orioner',
		'Gorn',
		'Nausicaaner',
		'Lethean',
		'Ferasan',
		//Shared
		'Klingonen',
		'Liberated Borg',
		'Alien',
		'Trill',
		'Romulaner',
		'Remaner',
	),

	'lang' => array(
		'sto' => 'Star Trek Online',
	),
);

?>