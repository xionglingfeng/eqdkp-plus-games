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

if(!class_exists('fw')) {
	class fw extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.0.1';
		protected $this_game		= 'fw';
		protected $types			= array('classes', 'races', 'filters', 'roles');
		protected $classes			= array();
		protected $races			= array();
		protected $roles			= array();
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
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Dwarf
						2 	=> 'all',		// Elf
						3 	=> 'all',		// Human
						4 	=> 'all',		// Kindred
						5 	=> 'all',		// Stoneman
						6 	=> 'all',		// Lycan
					),
				),
			),
		);
		
		public $default_roles = array(
			1	=> array(6),
			2	=> array(1,2),
			3	=> array(3,4,5,7),
			4	=> array(8),
		);
		
		protected $class_colors = array(
			0	=> '#ff7fff',
			1	=> '#05e6fa',
			2	=> '#7d7d7d',
			3	=> '#741bd4',
			4	=> '#fc9b00',
			5	=> '#f7ff00',
			6	=> '#ffffff',
			7	=> '#ff0000',
			8	=> '#159e00',
			9	=> '#5845ff',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){}
	}
}
?>