<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2014 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('dummy')) {
	class dummy extends game_generic {#
		protected static $apiLevel	= 20;
		public $version				= '0.1.0';
		protected $this_game		= 'dummy';
		protected $types			= array();						// which information are stored?
		protected $classes			= array();
		protected $roles			= array();						// for each type there must be the according var
		protected $factions			= array();						// and the according function: load_$type
		protected $filters			= array();
		protected $realmlist		= array();
		protected $professions		= array();
		public $langs				= array('english', 'german');	// in which languages do we have information?

		protected $class_dependencies = array();
		public $default_roles		= array();
		protected $class_colors		= array();

		protected $glang			= array();
		protected $lang_file		= array();
		protected $path				= '';
		public $lang				= false;

		public function __construct() {
			parent::__construct();
		}

		public function install($install=false){
			//config-values
			$info['config'] = array();
			return $info;
		}
		
		public function load_filters($langs){
			return array();
		}

		public function profilefields(){
			// array with fields
		}

		public function admin_settings() {
			// array with admin fields
		}

	}#class
}
?>