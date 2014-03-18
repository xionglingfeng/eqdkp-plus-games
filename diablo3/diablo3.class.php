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

if(!class_exists('diablo3')) {
	class diablo3 extends game_generic {
		public $version			= '1.0';
		protected $this_game	= 'diablo3';
		protected $types		= array('classes');
		protected $classes		= array();
		protected $races		= array();
		protected $factions		= array();
		public $langs			= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> false
			),
		);
		
		public $default_roles = array(
			1	=> array(4),
			2	=> array(2,4,5),
			3	=> array(1,3),
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function get_OnChangeInfos($install=false){
			//Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
			if($install){
			}*/
			return $info;
		}
	}
}
?>