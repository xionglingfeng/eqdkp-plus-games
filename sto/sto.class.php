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

if(!class_exists('sto')) {
	class sto extends game_generic {
		public static $shortcuts = array();
		protected $this_game	= 'sto';
		protected $types		= array('classes', 'races');
		public $icons			= array('classes', 'classes_big', 'races', 'events');
		protected $classes		= array();
		protected $races		= array();
		protected $factions		= array();
		protected $filters		= array();
		public $langs			= array('english', 'german');

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;
		public $version			= '0.2';

		/**
		* Initialises filters
		*
		* @param array $langs
		*/
		protected function load_filters($langs) {}

		public function get_OnChangeInfos($install=false){
			//classcolors
			$info['class_color'] = array(
				1 => '#c69f44',
				2 => '#256895',
				3 => '#aa251f',
				4 => '#c69f44',
				5 => '#256895',
				6 => '#aa251f',
				7 => '#c69f44',
				8 => '#256895',
				9 => '#aa251f',
		);
			$info['aq'] = array();

			//Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
			#if($install){
			#}
			return $info;
		}
	}
}
if(version_compare(PHP_VERSION, '5.3.0', '<')) registry::add_const('short_sto', sto::$shortcuts);
?>