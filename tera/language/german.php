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
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Bogenschütze',
		2	=> 'Berserker',
		3	=> 'Lanzer',
		4	=> 'Mystiker',
		5	=> 'Priester',
		6	=> 'Zerstörer',
		7	=> 'Zauberer',
		8	=> 'Krieger',
		9	=> 'Klingentänzer',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aman',
		2	=> 'Baraka',
		3	=> 'Castanics',
		4	=> 'Hochelfen',
		5	=> 'Menschen',
		6	=> 'Popori',
		7	=> 'Elin',
	),
	'roles'	=> array(
		1	=> 'Deffensiv',
		2	=> 'Melee Offense',
		3	=> 'Ranged Offense',
		4	=> 'Unterstützer'
	),
	'lang' => array(
		'tera'						=> 'Tera Online',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',

		// events
		'tera_event_bastion'		=> 'Bastion Loks',
		'tera_event_sinestral'		=> 'Anwesen der Arglist',
		'tera_event_cultistrefuge'	=> 'Zuflucht der Kultisten',
		'tera_event_necromancer'	=> 'Nekromantenkrypta',
		'tera_event_sigiladstringo'	=> 'Siegel von Adstringo',
		'tera_event_goldenlaby'		=> 'Goldenes Labyrinth',
		'tera_event_akashashide'	=> 'Akashas Versteck',
		'tera_event_acentsaravash'	=> 'Aufstieg von Saravash',
		'tera_event_saleronsky'		=> 'Salerons Himmelsgarten',
		'tera_event_suryatis'		=> 'Suryatis Gipfel',
		'tera_event_ebontower'		=> 'Ebenholzturm',
		'tera_event_labyterror'		=> 'Labyrinth des Schreckens',
		'tera_event_kelsaiksnest'	=> 'Kelsaiks Nest',
		'tera_event_fanekaprima'	=> 'Tempel von Kaprima',
		'tera_event_balderstemple'	=> 'Balders Tempel',
		'tera_event_templetemerity'	=> 'Temple der Verwegenheit',
		'tera_event_sirjukas'		=> 'Terassen von Sirjuka',
		'tera_event_crucibleflame'	=> 'Flammentiegel',
		'tera_event_argoncorpus'	=> 'Argonenkorpus',
		'tera_event_manayascore'	=> 'Manayas Herz',
		'tera_event_layansprison'	=> 'Lakans Gefängnis',
		'tera_event_ghillieglade'	=> 'Tarnlichtung',
	),
);

?>