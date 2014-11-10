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

	// Add css code:
	$this->tpl->add_css("
		#guild_header_wrap {
			width:100%;
		}
		#guild_header_banner_alliance{
			width:100%;
			height:106px;
			background: url('".$this->server_path."games/wow/profiles/factions/banner_alliance.jpg') no-repeat scroll 0px 0px transparent;
			margin-top:30px;
		}
		#guild_header_banner_horde{
			width:100%;
			height:106px;
			background: url('".$this->server_path."games/wow/profiles/factions/banner_horde.jpg') no-repeat scroll 0px 0px transparent;
			margin-top:30px;
		}		
		#guild_emblem { 
			height:200px;
			width:230px;
			margin:-30px 0 0 5px;
			float:left;
		}		
		#guild_name {
			font-size: 30px; 
			color: #fff;
			position:relative; 
			top:10px; 
			left:15px;
			font-weight:bold;
		}
		#guild_realm {
			font-size: 20px; 
			color: #FFCC33 ;
			position:relative; 
			top:30px; 
			left:15px;
		}
		
		#bar_15088, #bar_15077, #bar_15078, #bar_15079, #bar_15080, #bar_15089, #bar_15093{
			width: 31%;
			float: left;
			padding: 5px;
			cursor: pointer;
		}
	");
	$this->tpl->css_file($this->path.'games/wow/roster/challenge.css');

# Amory Stuff
$guilddata = false;
if($this->config->get('uc_servername') && $this->config->get('uc_server_loc')){
	$this->game->new_object('bnet_armory', 'armory', array(unsanitize($this->config->get('uc_server_loc')), $this->config->get('uc_data_lang')));
	$guilddata = $this->game->obj['armory']->guild($this->config->get('guildtag'), $this->config->get('uc_servername'));
	$this->tpl->assign_array('guilddata', $guilddata);
	if ($guilddata && !isset($chardata['status'])){
		infotooltip_js();
		
		//Guildnews
		$arrNews = register('pdc')->get('roster_wow.guildnews');
		if (!$arrNews){
			$arrNews = $this->game->callFunc('parseGuildnews', array($guilddata['news']));
			register('pdc')->put('roster_wow.guildnews', $arrNews, 3600);
		}
		
		foreach ($arrNews as $news){
			$this->tpl->assign_block_vars('guildnews', array(
				'TEXT'	=> $news['text'],
				'ICON'	=> '<img src="'.$news['icon'].'" alt="" />',
				'DATE'	=> register('time')->nice_date($news['date'], 60*60*24*7),
			));
		}
		
		//Achievements
		$arrAchievs = register('pdc')->get('roster_wow.guildachievs');
		if (!$arrAchievs){
			$arrAchievs = $this->game->callFunc('parseGuildAchievementOverview', array($guilddata['achievements']));
			 register('pdc')->put('roster_wow.guildachievs', $arrAchievs, 3600);
		}
		
		foreach ($arrAchievs as $id => $val){
			$this->tpl->assign_block_vars('guildachievs', array(
				'NAME'	=> $val['name'],
				'BAR'	=> $this->jquery->progressbar('guildachievs_'.$id, 0, array('completed' => $val['completed'], 'total' => $val['total'],'text' => '%progress% (%percentage%)')),
				'ID'	=> $id,
				'LINK'	=> ($id != 'total') ? $this->game->obj['armory']->bnlink('', register('config')->get('uc_servername'), 'guild-achievements', register('config')->get('guildtag')).'#achievement#'.$id : '',
			));
		}
		
		//Latest Achievements
		$arrLatestAchievs = register('pdc')->get('roster_wow.guildlatestachievs');
		if (!$arrLatestAchievs){
			$arrLatestAchievs = $this->game->callFunc('parseLatestGuildAchievements', array($guilddata['achievements']));	
			register('pdc')->put('roster_wow.guildlatestachievs', $arrLatestAchievs, 3600);
		}
		
		foreach ($arrLatestAchievs as $val){
			$this->tpl->assign_block_vars('latestachievs', array(
					'NAME'	=> $val['name'],
					'ICON'	=> $val['icon'],
					'DESC'	=> $val['desc'],
					'POINTS'=> $val['points'],
					'DATE'	=> register('time')->nice_date($val['date'], 60*60*24*7),
			));
		}
		
		// the challenges
		$arrChallenge = register('pdc')->get('roster_wow.challenge');
		if (!$arrChallenge){
			$arrChallenge = $this->game->callFunc('parseGuildChallenge', array($guilddata));
			register('pdc')->put('roster_wow.challenge', $arrChallenge, 3600);
		}

		foreach ($arrChallenge as $val){
			$this->tpl->assign_block_vars('challenges', array(
				'NAME'		=> $val['name'],
				'ICON'		=> $val['icon'],
				'TIME'		=> $val['time']
			));
			foreach ($val['group'] as $challgroups){
				$this->tpl->assign_block_vars('challenges.groups', array(
					'NAME'		=> $challgroups['name'],
					'TIME'		=> $challgroups['time'],
					'DATE'		=> $challgroups['date'],
					'MEDAL'		=> strtolower($challgroups['medal']),
				));
				
				foreach ($challgroups['members'] as $chalmember){
					$this->tpl->assign_block_vars('challenges.groups.members', array(
						'NAME'			=> $chalmember['name'],
						'OFF_REALM'		=> ($chalmember['memberid'] == 0) ? true : false,
						'BNETLINK'		=> $this->game->obj['armory']->bnlink($chalmember['name'], $chalmember['realm']),
						'CLASSID'		=> $chalmember['class'],
						'SHOW_LINK'		=> ($chalmember['memberid'] > 0) ? true : false,
						'MEMBERID'		=> $chalmember['memberid'],
					));
				}
			}
		}
		
		// the tab things
		$this->jquery->Tab_header('wow_roster');
		$this->tpl->assign_vars(array(
			'S_ARMORY_INFO' => true,
		));
	}
}

$faction = ($this->config->get('faction')) ? $this->config->get('faction') : 'alliance';

$this->tpl->assign_vars(array(
		'FACTION'		=> $faction,
		'REALM'			=> $this->config->get('uc_servername'),
		'REGION'		=> strtoupper($this->config->get('uc_server_loc')),
		'GUILD'			=> $this->config->get('guildtag'),
		'LEVEL'			=> (isset($guilddata['level'])) ? $guilddata['level'] : 0,
		'ACHIEV_POINTS'	=> (isset($guilddata['achievementPoints'])) ? $guilddata['achievementPoints'] : 0,
		'L_SKILLS'		=> $this->game->glang('skills'),
		'L_ACHIEVEMENT_POINTS'	=> $this->game->glang('achievement_points'),
		'TABARD'		=> ($guilddata) ? $this->game->obj['armory']->guildTabard($guilddata['emblem'], $guilddata['side'], $guilddata['name'], 180) : $this->server_path.'games/wow/guild/tabard_'.$faction.'.png',
));

$this->hptt_page_settings = $this->pdh->get_page_settings('roster', 'hptt_roster');

if ($this->config->get('roster_classorrole') == 'role'){
	$members = $this->pdh->aget('member', 'defaultrole', 0, array($this->pdh->get('member', 'id_list', array($skip_inactive, $skip_hidden, true, $skip_twinks))));
	$arrRoleMembers = array();
	foreach ($members as $memberid => $defaultroleid){
		if ((int)$defaultroleid == 0){
			$arrAvailableRoles = array_keys($this->pdh->get('roles', 'memberroles', array($this->pdh->get('member', 'classid', array($memberid)))));
			if (isset($arrAvailableRoles[0])) $arrRoleMembers[$arrAvailableRoles[0]][] = $memberid;
		} else {
			$arrRoleMembers[$defaultroleid][] = $memberid;
		}
	}
	
	foreach ($this->pdh->aget('roles', 'name', 0, array($this->pdh->get('roles', 'id_list', array()))) as $key => $value){
		if ($key == 0) continue;

		$hptt = $this->get_hptt($hptt_page_settings, $arrRoleMembers[$key], $arrRoleMembers[$key], array('%link_url%' => $this->routing->simpleBuild('character'), '%link_url_suffix%' => '', '%with_twink%' => $skip_twinks, '%use_controller%' => true), 'role_'.$key);
		
		$this->tpl->assign_block_vars('class_row', array(
			'CLASS_NAME'	=> $value,
			'CLASS_ICONS'	=> $this->game->decorate('roles', $key),
			'MEMBER_LIST'	=> $hptt->get_html_table($this->in->get('sort')),
		));
	}
	
	
} else {
		$arrMembers = $this->pdh->get('member', 'id_list', array($this->skip_inactive, $this->skip_hidden, true, $this->skip_twinks));
		
		$rosterClasses = $this->game->get_roster_classes();
		
		$arrRosterMembers = array();
		foreach($arrMembers as $memberid){
			$string = "";
			foreach($rosterClasses['todisplay'] as $key => $val){
				$string .= $this->pdh->get('member', 'profile_field', array($memberid, $this->game->get_name_for_type($val)))."_";
			}
				
			$arrRosterMembers[$string][] = $memberid;
		}
		
		$this->build_class_block($rosterClasses['data'], $rosterClasses['todisplay'], $arrRosterMembers);
}

?>