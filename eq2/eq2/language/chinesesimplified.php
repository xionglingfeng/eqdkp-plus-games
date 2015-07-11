<?php
/*	Project:	EQdkp-Plus
 *	Package:	Everquest2 game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$chinesesimplified_array = array(
	'classes' => array(
		0	=> '未知',
		1	=> '刺客',
		25	=> 'Beastlord',
		2	=> '狂战士',
		3	=> 'Brigand',
		4	=> 'Bruiser',
		26	=> 'Channeler',
		5	=> 'Coercer',
		6	=> 'Conjuror',
		7	=> 'Defiler',
		8	=> 'Dirge',
		9	=> 'Fury',
		10	=> '守护者',
		11	=> 'Illusionist',
		12	=> 'Inquisitor',
		13	=> '武僧',
		14	=> 'Mystic',
		15	=> '亡灵巫师',
		16	=> '圣骑士',
		17	=> 'Ranger',
		18	=> '暗影骑士',
		19	=> 'Swashbuckler',
		20	=> 'Templar',
		21	=> 'Troubador',
		22	=> '守望者',
		23	=> '术士',
		24	=> '巫师',
	),
	'races' => array(
		0	=> '未知',
		21  => 'Aerakyn',
		18	=> 'Arasai',
		4	=> '野蛮人',
		7	=> '黑暗精灵',
		5	=> '矮人',
		14	=> '博学者',
		19	=> 'Fae',
		20	=> 'Freeblood',
		13	=> '蛙人',
		2	=> '侏儒',
		9	=> '半精灵',
		17	=> '半身人',
		6	=> '高等精灵',
		3	=> '人类',
		15	=> '蜥人',
		10	=> '猫人',
		12	=> '食人魔',
		16	=> '鼠人',
		1	=> 'Sarnak',
		11	=> '巨魔',		
		8	=> '木精灵',
	),
	'factions' => array(
		'good'		=> '善良',
		'evil'		=> '邪恶',
		'neutral'	=> '中立'
	),
	'roles' => array(
		1	=> '治疗者',
		2	=> '战士',
		3	=> '法师',
		4	=> '斥候',
	),
	'realmlist' => array(
		'Valor', //EU Deutsch
		'Splitpaw', //EU English
		'Storms',	//EU Francais
		'Sebilis', //Japan
		'Test', //Public Test Server
		'Beta', //Public Beta Server
		//US English
		'Butcherblock',
		'Nagafen',
		'Guk',
		'自由港',
		'Everfrost',
		'Unrest',
		'Oasis',
		'Antonia Bayle',
		'Permafrost',
		'Crushbone',
		//Russia
		'Harla Dar',
		'Barren Sky',
	),
	'lang' => array(
		'eq2'							=> '无尽的任务 II',
		'very_light'					=> '布甲',
		'light'							=> '皮甲',
		'medium'						=> '链甲',
		'heavy'							=> '板甲',
		'healer'						=> '治疗者',
		'fighter'						=> '战士',
		'mage'							=> '法师',
		'scout'							=> '斥候',
		
		// profile additions
		'uc_gender'						=> '性别',
		'uc_male'						=> '男',
		'uc_female'						=> '女',
		'uc_guild'						=> '公会',
		'uc_race'						=> '种族',
		'uc_class'						=> '职业',
		'uc_import_guild'				=> '导入公会',
		'uc_import_guild_help'			=> '从一个公会中导入所有人物',
		'servername'					=> '服务器名称',
		'uc_lockserver'					=> '对用户锁定服务器名称',
		'uc_update_all'					=> '更新全部人物',
		'uc_importer_cache'				=> '重置导入器缓存',
		'uc_importer_cache_help'		=> 'Delete all the cached data of the import class.',
		'achievements'					=> '成就',
		'uc_class_filter'				=> 'Only character of the class',
		'uc_class_nofilter'				=> '无过滤器',
		'uc_guild_name'					=> '公会名称',
		'uc_filter_name'				=> '过滤器',
		'uc_level_filter'				=> 'All characters with a level higher than',
		'uc_imp_novariables'			=> 'You first have to set a realmserver and it\'s location in the settings.',
		'uc_imp_noguildname'			=> 'The name of the guild has not been given.',
		'uc_gimp_loading'				=> 'Loading guild characters, please wait...',
		'uc_gimp_header_fnsh'			=> '公会导入已完成',
		'uc_importcache_cleared'		=> 'The cache of the importer was successfully cleared.',
		'uc_delete_chars_onimport'		=> 'Delete Chars that have left the guild',
		'uc_achievements'				=> '成就',
		'uc_critchance'					=> 'Minimum Crit Chance Requirement',
		'core_sett_f_uc_resists'        => 'Minimum Resists',
		'gachievements'					=> '公会成就',
		'graidready'					=> 'Raid Ready',
		'heraldry'						=> 'Guild Heraldry',
		'uc_noprofile_found'			=> 'No profile found',
		'uc_profiles_complete'			=> 'Profiles updated successfully',
		'uc_notyetupdated'				=> 'No new data (inactive character)',
		'uc_notactive'					=> 'This character will be skipped because it is set to inactive',
		'uc_error_with_id'				=> 'Error with this character\'s id, it has been left out',
		'uc_notyourchar'				=> 'ATTENTION: You currently try to import a character that already exists in the database but is not owned by you. For security reasons, this action is not permitted. Please contact an administrator for solving this problem or try to use another character name.',
		'uc_lastupdate'					=> 'Last Update',
		'uc_prof_import'				=> '导入',
		'uc_import_forw'				=> '继续',
		'uc_imp_succ'					=> 'The data has been imported successfully',
		'uc_upd_succ'					=> 'The data has been updated successfully',
		'uc_imp_failed'					=> 'An error occured while updating the data. Please try again.',
		"uc_updat_armory" 				=> "Refresh from Daybreak",
		'uc_charname'					=> '人物名称',
		'servername'					=> '服务器名称',
		'uc_charfound'					=> "The character <b>%1\$s</b> has been found in the armory.",
		'uc_charfound2'					=> "This character was updated on <b>%1\$s</b>.",
		'uc_charfound3'					=> 'ATTENTION: Importing will overwrite the existing data!',
		'uc_armory_confail'				=> 'No connection to the armory. Data could not be transmitted.',
		'uc_armory_imported'			=> '已导入',
		'uc_armory_impfailed'			=> '已失败',
		'uc_armory_impduplex'			=> '已经存在',
		'eqclassic'						=> '破碎之地',
		'splitpaw'						=> 'The Splitpaw Saga',
		'desert'						=> '火焰沙漠',
		'kingdom'						=> '天空王国',
		'fallen'						=> '失落王朝',
		'faydwer'						=> '费德沃的回响',
		'kunark'						=> '库纳克的崛起',
		'shadow'						=> '奥德赛阴影',
		'sentinel'						=> '哨兵的使命',
		'velious'						=> '维理斯的命运',
		'chains'						=> '永恒之链',
		'tears'							=> '薇仙之泪',
		'malice'                        => '邪恶祭坛',
		'general'                       => '一般',
		'avatar'						=> '头像',
		'rum'							=> 'F.S. Distillery',
		'healermage'					=> '治疗者和法师',
		'fighterscout'					=> '战士和斥候',
		'no_data'						=> '无数据。',
		'total_completed'				=> 'Total Completed',
		'uc_level'                      => '等级',
		'uc_showachieve'				=> 'Show Guild Achievements in Roster Page? (Can slow down loading time)',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> '无尽的任务 II 设置',
		'uc_faction'					=> '阵营',
		'uc_faction_help'				=> '设置默认阵营',
	),
);
?>