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

if(!class_exists('guildwars2')) {
	class guildwars2 extends game_generic {
		public $version			= '0.1';
		protected $this_game	= 'guildwars2';
		protected $types		= array('classes', 'races');
		protected $classes		= array();
		protected $races		= array();
		public $langs			= array('english', 'german');

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
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Sylvari
						2 	=> 'all',		// Norn
						3 	=> 'all',		// Charr
						4 	=> 'all',		// Asura
						5 	=> 'all',		// Human
					),
				),
			),
		);

		public $default_roles = array(
			1	=> array(8,7,4,3),
			2	=> array(1,2,3,4,5,6,7,8),
			3	=> array(1,8,5,7,4,2,6,3),
			4	=> array(1,8,5,7,4,2,6,3)
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function install($install=false){
		}
		
				protected function load_filters($langs){
			return array();
		}
	}
}
?>