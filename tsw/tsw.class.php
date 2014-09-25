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

if(!class_exists('tsw')) {
	class tsw extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.1';
		protected $this_game		= 'tsw';
		public $types				= array('races', 'classes', 'classes_big', 'events', 'roles');
		protected $classes			= array();
		protected $factions			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin' 	=> false,
				'decorate'	=> true,
				'roster' 	=> true,
				'parent'	=> false,
				'primary'	=> false,
				'colorize'	=> true,
			),
			
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'roster'	=> false,
				'recruitment' => true,
				'parent'	=> false,
			),
			
		);
	
	public $default_roles = array(
			1 	=> array(0,1,2,3,4,5),			# healer
			2 	=> array(0,1,2,3,4,5,			# tank
			3 	=> array(0,1,2,3,4,5),			# DD
			4 	=> array(0,1,2,3,4,5),			# Range
			5 	=> array(0,1,2,3,4,5),			# Podder
		);
		
	public function profilefields(){
			$xml_fields = array(
				'pvp'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_pvp',
					'options'		=> array('unknown' => 'uc_unknown', 'Battlegroup A' => 'uc_BG_A', 'Battlegroup B' => 'uc_BG_B'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'RP'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_RP',
					'options'		=> array('unknown' => 'uc_unknown', 'No' => 'uc_no', 'Yes' => 'uc_yes'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 25,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}
		protected $class_colors = array(
			1	=> '#dd0007',	# Dragons offical color
			2	=> '#5ca716',	# Templar offical color
			3	=> '#00a9fa', 	# Illuminati offical color
			4	=> '#32D6E5', 	# Tank
			5	=> '#5B933D',	# Healer
			6	=> '#800000',	# DD "maroon
			7	=> '#FF7F00', 	# Melee "orange"
			8	=> '#008080', 	# Leecher "teal"
		);
		protected $race_colors = array(
			1	=> '#dd0007',	# Dragons offical color
			2	=> '#5ca716',	# Templar offical color
			3	=> '#00a9fa', 	# Illuminati offical color
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
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
		
		######################################################################
		##																	##
		##							EXTRA FUNCTIONS							##
		##																	##
		######################################################################
		
		/**
		 *	Content for the Chartooltip
		 *
		 */	
		public function chartooltip($intCharID){
			$template = $this->root_path.'games/'.$this->this_game.'/chartooltip/chartooltip.tpl';
			$content = file_get_contents($template);
			$charicon = $this->pdh->get('tsw', 'charicon', array($intCharID));
			if ($charicon == '') {
				$charicon = $this->server_path.'images/global/avatar-default.svg';
			}
			$charhtml = '<b>'.$this->pdh->get('member', 'html_name', array($intCharID)).'</b><br />';
			$guild = $this->pdh->get('member', 'profile_field', array($intCharID, 'guild'));
			if (strlen($guild)) $charhtml .= '<br />&laquo;'.$guild.'&raquo;';
			
			$charhtml .= '<br />'.$this->pdh->get('member', 'html_racename', array($intCharID));
			$charhtml .= ' '.$this->pdh->get('member', 'html_classname', array($intCharID));
			$charhtml .= '<br />'.$this->user->lang('level').' '.$this->pdh->get('member', 'level', array($intCharID));

			$content = str_replace('{CHAR_ICON}', $charicon, $content);
			$content = str_replace('{CHAR_HTML}', $charhtml, $content);
			
			return $content;
		}
		
		/**
		 *	Game Settings
		 *
		 */
		 
		public function install($install=false){
			$this->game->resetEvents();

			$arrEventIDs = array();
			$arrEventIDs[] = $this->game->addEvent($this->glang('ny_raid'), 0, "unknown.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('eidolon'), 0, "unknown.png");

			$this->game->resetMultiDKPPools();
			$this->game->resetItempools();
			$intItempoolID = $this->game->addItempool("TSW", "TSW Itempool");

			$this->game->addMultiDKPPool("TSW", "TSW MultiDKPPool", $arrEventIDs, array($intItempoolID));
			
			//Links
			$this->game->addLink('Offcial Forum', 'http://forums.thesecretworld.com/');
			$this->game->addLink('TestServer Forum', 'https://forums-tl.thesecretworld.com/index.php');
			
			$this->game->resetRanks();
			//Ranks
			$this->game->addRank(0, "Guildmaster");
			$this->game->addRank(1, "Officer");
			$this->game->addRank(2, "Veteran");
			$this->game->addRank(3, "Member");
			$this->game->addRank(4, "Initiate", true);
			$this->game->addRank(5, "Dummy Rank #1");
		}

		public function uninstall(){
			$this->game->removeLink("Offcial Forum");
			$this->game->removeLink("TestServer Forum");
		}
	}
}
?>