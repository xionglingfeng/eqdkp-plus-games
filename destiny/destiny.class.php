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

if(!class_exists('destiny')) {
	class destiny extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.0';
		protected $this_game		= 'destiny';
		protected $types			= array('classes', 'races');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',			// Unknown
						1 	=> 'all',			// Human
						2 	=> 'all',			// Awoken
						3 	=> 'all',			// Exo
					),
				),
			)
		);

		public $default_roles = array();
		
		protected $class_colors = array(
			1 => '#FFFFFF',
			2 => '#FFFF00',
			3 => '#FF0000',
		);

		protected $glang			= array();
		protected $lang_file		= array();
		protected $path				= '';
		public $lang				= false;
		

		/**
		* Initialises filters
		*
		* @param array $langs
		*/
		protected function load_filters($langs){}

		public function install($install=false){}
	}
}
?>