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

if(!defined('EQDKP_INC')){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('aion')) {
	class aion extends game_generic {
		public $version			= '4.5';
		protected $this_game	= 'aion';
		protected $types		= array('classes', 'races', 'filters');
		protected $classes		= array();
		protected $races		= array();
		protected $factions		= array();
		protected $filters		= array();
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
						0 	=> 'all',			// Unknown
						1 	=> 'all',			// Gnome
						2 	=> 'all',			// Human
					),
				),
			),
		);
		
		protected $class_colors = array(
			1	=> '#80FF00',
			2	=> '#FFFFFF',
			3	=> '#FFFFFF',
			4	=> '#4080FF',
			5	=> '#80FF00',
			6	=> '#7d5ebc',
			7	=> '#7d5ebc',
			8	=> '#4080FF',
			9	=> '#ff3300',
			10	=> '#cc3399',
			11	=> '#ff3300',
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
					'size'			=> 40,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		/**
		* Initialises filters
		*
		* @param array $langs
		*/
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
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('plate'), 'value' => 'class:4,8'),
					array('name' => $this->glang('mail'), 'value' => 'class:2,3'),
					array('name' => $this->glang('leather'), 'value' => 'class:1,5'),
					array('name' => $this->glang('cloth'), 'value' => 'class:6,7'),
				));
			}
		}

		public function install($install=false){

			/*
			//Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
			if($install){
			}*/
			return $info;
		}
	}
}
?>