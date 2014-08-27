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

if(!class_exists('tera')) {
	class tera extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '26.04';
		protected $this_game		= 'tera';
		protected $types			= array('classes', 'races', 'filters', 'roles');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
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
				'parent'	=> false
			),
		);
		
		public $default_roles = array(
			1 => array(3),			// defence
			2 => array(2, 6, 8),	// melee offense
			3 => array(1, 7),		// ranged offense
			4 => array(4, 5)		// support
		);
		
		protected $class_colors = array(
			1	=> '#E18FF1',
			2	=> '#C97840',
			3	=> '#69444B',
			4	=> '#6CB6CF',
			5	=> '#5B8C79',
			6	=> '#91BC51',
			7	=> '#E68C84',
			8	=> '#DFBA74',
			9	=> '#800080',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

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

		public function install($install=false){
			$this->game->resetEvents();

			$arrEventIDs = array();
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_bastion'), 0, "lok.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_sinestral'), 0, "sinistral.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_cultistrefuge'), 0, "cultists.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_necromancer'), 0, "necromancer.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_sigiladstringo'), 0, "adstrino.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_goldenlaby'), 0, "goldenlab.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_akashashide'), 0, "askasha.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_acentsaravash'), 0, "saravash.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_saleronsky'), 0, "skygarden.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_suryatis'), 0, "suryati.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_ebontower'), 0, "ebontower.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_labyterror'), 0, "terror.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_kelsaiksnest'), 0, "kelsaiks.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_fanekaprima'), 0, "kaprina.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_balderstemple'), 0, "balders.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_templetemerity'), 0, "temerity.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_sirjukas'), 0, "sirjukas.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_crucibleflame'), 0, "crucible.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_argoncorpus'), 0, "argoncore.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_manayascore'), 0, "manayas.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_layansprison'), 0, "layan.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('tera_event_ghillieglade'), 0, "ghillieglade.png");

			$this->game->resetMultiDKPPools();
			$this->game->resetItempools();
			$intItempoolID = $this->game->addItempool("Default", "Default Itempool");

			$this->game->addMultiDKPPool("Default", "Default MultiDKPPool", $arrEventIDs, array($intItempoolID));
		}
	}
}
?>