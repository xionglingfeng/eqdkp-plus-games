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

if(!class_exists('allodswikiru')) {
	class allodswikiru extends itt_parser {
		public static $shortcuts = array('puf' => 'urlfetcher', 'pfh' => array('file_handler', array('infotooltips')));

		public $supported_games = array('allods');
		public $av_langs = array();

		public $settings = array();

		public $itemlist = array();
		public $recipelist = array();

		private $searched_langs = array();

		public function __construct($init=false, $config=false, $root_path=false, $cache=false, $puf=false, $pdl=false){
			parent::__construct($init, $config, $root_path, $cache, $puf, $pdl);
			$g_settings = array(
				'allods' => array('icon_loc' => 'http://eu.allodswiki.ru/', 'icon_ext' => '.png', 'default_icon' => 'Interface/Icons/Misc/PlaceholderOrange'),
			);
			$this->settings = array(
				'itt_icon_loc' => array(	'name' => 'itt_icon_loc',
											'language' => 'pk_itt_icon_loc',
											'fieldtype' => 'text',
											'size' => false,
											'options' => false,
											'default' => ((isset($g_settings[$this->config['game']]['icon_loc'])) ? $g_settings[$this->config['game']]['icon_loc'] : ''),
				),
				'itt_icon_ext' => array(	'name' => 'itt_icon_ext',
											'language' => 'pk_itt_icon_ext',
											'fieldtype' => 'text',
											'size' => false,
											'options' => false,
											'default' => ((isset($g_settings[$this->config['game']]['icon_ext'])) ? $g_settings[$this->config['game']]['icon_ext'] : ''),
				),
				'itt_default_icon' => array('name' => 'itt_default_icon',
											'language' => 'pk_itt_default_icon',
											'fieldtype' => 'text',
											'size' => false,
											'options' => false,
											'default' => ((isset($g_settings[$this->config['game']]['default_icon'])) ? $g_settings[$this->config['game']]['default_icon'] : ''),
				),
			);
			$g_lang = array(
				'allods' => array('en' => 'en_US', 'de' => 'de_DE', 'fr' => 'fr_FR', 'pts' => 'ru_RU'),
			);
			$this->av_langs = ((isset($g_lang[$this->config['game']])) ? $g_lang[$this->config['game']] : '');
		}

		public function __destruct(){
			unset($this->itemlist);
			unset($this->recipelist);
			unset($this->searched_langs);
			parent::__destruct();
		}
		
		private function getItemIDfromUrl($itemname, $lang, $searchagain=0){
			$searchagain++;
			
			$link = "http://".$lang.".allodswiki.ru/api.php/item?version=2&name=".urlencode($itemname);		
			$data = $this->puf->fetch($link);
			$item_id = false;
			
			$arrData = json_decode($data);

			$this->searched_langs[] = $lang;
			if ($arrData && isset($arrData->id))
			{				
				return array(intval($arrData->id), 'items');
			}
			
			//search in other languages
			if(!$item_id AND $searchagain < count($this->av_langs)) {
				$this->pdl->log('infotooltip', 'No Items found.');
				if(count($this->config['lang_prio']) >= $searchagain) {
					$this->pdl->log('infotooltip', 'Search again in other language.');
					$this->searched_langs[] = $lang;
					foreach($this->config['lang_prio'] as $slang) {
						if(!in_array($slang, $this->searched_langs)) {
							return $this->getItemIDfromUrl($itemname, $slang, $searchagain);
						}
					}
				}
			}
			
			return $item_id;
		}

		protected function searchItemID($itemname, $lang){
			return $this->getItemIDfromUrl($itemname, $lang);
		}

		protected function getItemData($item_id, $lang, $itemname='', $type='items'){
			$item = array('id' => $item_id);
			if(!$item_id) return null;
			
			$url = "http://".$lang.".allodswiki.ru/api.php/item?version=2&name=".urlencode($itemname);		
			
			$item['link'] = $url;
			$itemdata = $this->puf->fetch($item['link']);		
			$arrTooltipData = json_decode($itemdata);
			if ($arrTooltipData && isset($arrTooltipData->id) && $arrTooltipData->name != ""){
				$url = "http://".$lang.".allodswiki.ru/api.php/Item/".$arrTooltipData->id;
				$itemdata = $this->puf->fetch($url);
				$arrData = json_decode($itemdata);
				
				$item['icon'] = str_replace(".png", "", $arrData->texture);
				$item['color'] = $arrData->quality;

				$template_html = trim(file_get_contents($this->root_path.'games/allods/infotooltip/templates/allods_popup.tpl'));
				$html = str_replace('src="/images/', 'http://eu.allodswiki.ru/images/', $arrTooltipData->html);
				$template_html = str_replace('{ITEM_HTML}', $html, $template_html);
				$item['html'] = $template_html;
				$item['lang'] = $lang;
				$item['name'] = $arrTooltipData->name;
				
			} else {
				$item['baditem'] = true;
			}

			return $item;
		}
		
	}
}
?>