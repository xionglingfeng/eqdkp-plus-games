<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
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
 
define('EQDKP_INC', true);
$eqdkp_root_path = './../../../';
include_once ($eqdkp_root_path . 'common.php');

class guildImporter extends page_generic {
	public function __construct() {
		$handler = array();
		parent::__construct(false, $handler, array());
		$this->user->check_auth('a_members_man');
		$this->process();
	}

	public function perform_step0(){
		$arrLangsRaw = $this->game->get_available_langs();
		foreach ($arrLangsRaw as $lang){
			$arrLangs[$lang] = ucfirst($lang);
		}
		
		// generate output
		$hmtlout = '<fieldset class="settings mediumsettings">
			<dl>
				<dt><label>'.$this->game->glang('import_ranks').'</label></dt>
				<dd>'.new hradio('ranks').'</dd>
			</dl>
			<dl>
				<dt><label>'.$this->game->glang('uc_delete_chars_onimport').'</label></dt>
				<dd>'.new hradio('delete_old_chars').'</dd>
			</dl>
			<dl>
				<dt><label>'.$this->game->glang('guild_xml_lang').'</label></dt>
				<dd>'.new hdropdown('xmllang', array('options' => $arrLangs, 'value' => $this->config->get('game_language'))).'</dd>
			</dl>
			<dl>
				<dt><label>'.$this->game->glang('guild_xml').'</label></dt>
				<dd>'.new htextarea('guildxml', array('rows' => 20, 'cols' => 40)).'</dd>
			</dl>
			</fieldset>';
		$hmtlout .= '<br/><input type="submit" name="submiti" value="'.$this->game->glang('uc_import_forw').'" class="mainoption bi_ok" />';
		return $hmtlout;
	}

	public function perform_step1(){
		$xml = simplexml_load_string(trim($this->in->get('guildxml', '', 'raw')));
		if (!$xml){
			$hmtlout = '<div class="infobox infobox-large infobox-red clearfix"><i class="fa fa-exclamation-triangle fa-4x pull-left"></i> <span id="error_message_txt">'.$this->game->glang('guild_xml_error').'</span></div>';
		} else {
			//Import Ranks
			$arrRankList = array();
			if ((int)$this->in->get('ranks') == 1){
				$objRanks = $xml->Ranks->Rank;				
				$arrRanks = $this->pdh->aget('rank', 'name', 0, array($this->pdh->get('rank', 'id_list')));
				foreach ($objRanks as $objRank){
					$rankid = array_search((string)$objRank->Name, $arrRanks);
					if (!$rankid){
						$rank_id	= max(array_keys($arrRanks)) + 1;
						$this->pdh->put('rank', 'add_rank', array($rank_id, (string)$objRank->Name, 0));
						$arrRankList[(int)$objRank->Id] = $rankid;
						$arrRanks[$rank_id] = (string)$objRank->Name;
					} else {
						$arrRankList[(int)$objRank->Id] = $rankid;
					}
				}
			}
			
			//Suspend all Chars
			if ($this->in->get('delete_old_chars',0)){
				$this->pdh->put('member', 'suspend', array('all'));
			}
			
			//Import Chars
			foreach ($xml->Members->Member as $objMember) {	
				$dataarry = array(
					'name'		=> (string)$objMember->Name,
					'level'		=> (int)$objMember->Level,
					'class'		=> $this->game->get_id('classes', (string)$objMember->Calling),
					'race'		=> 0,
				);
				
				if ((int)$this->in->get('ranks') == 1){
					$dataarry['rankid'] = (int)$arrRankList[(int)$objMember->Rank];
				}

				$myStatus = $this->pdh->put('member', 'addorupdate_member', array(0, $dataarry));
				if ($myStatus){
					//Revoke Char
					if ($this->in->get('delete_old_chars',0)){
						$this->pdh->put('member', 'revoke', array($myStatus));
					}
				}
				
				$hmtlout .= "<dl><dt><label><img src=\"".$this->server_path.'images/global/avatar-default.svg'."\" alt=\"charicon\" height=\"84\" width=\"84\" /></label></dt><dd>".(string)$objMember->Name."<br/>".(($myStatus) ? '<span class="positive">'.$this->game->glang('import_status_true').'</span>' : '<span class="negative">'.$this->game->glang('import_status_false').'</span>')."</dd></dl>";
			}
			
			$hmtlout = "<dl><div class=\"infobox infobox-large infobox-green clearfix\"><i class=\"fa fa-check fa-4x pull-left\"></i> ".$this->game->glang('uc_gimp_header_fnsh')."</div></dl>".$hmtlout;

			// reset the cache
			$this->pdh->process_hook_queue();
		}

		return '<fieldset class="settings">'.$hmtlout.'</fieldset>';
	}

	public function display(){
		$funcname = 'perform_step'.$this->in->get('step',0);
		$this->tpl->assign_vars(array(
			'DATA'		=> $this->$funcname(),
			'STEP'		=> ($this->in->get('step',0)+1)
		));

		$this->core->set_vars(array(
			'page_title'		=> $this->user->lang('raidevent_raid_guests'),
			'header_format'		=> 'simple',
			'template_file'		=> 'importer.html',
			'display'			=> true
		));
	}
}
registry::register('guildImporter');
?>