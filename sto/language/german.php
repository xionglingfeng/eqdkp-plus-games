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
		1	=> 'FED-Ingenieur',
		2	=> 'FED-Wissenschaftler',
		3	=> 'FED-Taktiker',
		4	=> 'KDF-Ingenieur',
		5	=> 'KDF-Wissenschaftler',
		6	=> 'KDF-Taktiker',
		7	=> 'RR-Ingenieur',
		8	=> 'RR-Wissenschaftler',
		9	=> 'RR-Taktiker',
	),
	'races' => array(
		//Federation
		0	=> 'Unknown',
		1	=> 'Menschen',
		2	=> 'Vulkanier',
		3	=> 'Bajoraner',
		4	=> 'Bolian',
		5	=> 'Benzite ',
		6	=> 'Betazoiden',
		7	=> 'Andorian',
		8	=> 'Saurian',
		9	=> 'Tellariten',
		10	=> 'Ferengi',
		11	=> 'Pakled',
		12	=> 'Caitian',
		13	=> 'Rigelian',
		//Klingon Empire
		14	=> 'Orioner',
		15	=> 'Gorn',
		16	=> 'Nausicaaner',
		17	=> 'Lethean',
		18	=> 'Ferasan',
		//Shared
		19	=> 'Klingonen',
		20	=> 'Liberated Borg',
		21	=> 'Alien',
		22	=> 'Trill',
		23	=> 'Romulaner',
		24	=> 'Remaner',
	),

	'lang' => array(
		'sto'						=> 'Star Trek Online',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',
	),
);

?>