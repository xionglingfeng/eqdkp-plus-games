<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date$
 * -----------------------------------------------------------------------
 * @author      $Author$
 * @copyright   2008-2011 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev$
 *
 * $Id$
 */

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found'); exit;
}

$module_lang = array(
	'charicon'           => '',
	'achievementpoints' 	=> 'Achievement Points',
	'averageItemLevelEquipped' => 'Itemlevel (eqipped)',
	'profilers'				=> 'Externe Profilseiten'
);

$preset_lang = array(
  'wow_charicon' 			=> 'WoW Charicon',
  'wow_achievementpoints'	=> 'WoW Achievement Points',
  'wow_gearlevel' 			=> 'WoW Itemlevel (eqipped)',
  'wow_profiler' 			=> 'WoW external profile pages',
);

?>