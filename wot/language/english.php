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

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
	#  id	name in(USA, UK, Germany, France, USSR, China)
		0	=> array('Unknown'),
		1	=> array('Light Tank'),
        2	=> array('Medium Tank'),
		3	=> array('Heavy Tank'),
		4	=> array('Tank Destroyer'),
		5	=> array('SPG'),

		
	),
	'races' => array(
		'Unknown',
		'USA',
		'UK',
		'Germany',
		'France',
		'USSR',
		'China',
	),

	'lang' => array(
		'wot'						=> 'World of Tanks',

		// Profile information
		'uc_team'				=> 'Team',
		'uc_tank_type'			=> 'Tank Class',
 		
		// Tanks
		'uc_tank_0'	=>	'-',
		'uc_tank_1'	=>	'T1 Cunningham',
		'uc_tank_2'	=>	'M2 Light Tank',
		'uc_tank_3'	=>	'T2 Light Tank',
		'uc_tank_4'	=>	'M22 Locust',
		'uc_tank_5'	=>	'M3 Stuart',
		'uc_tank_6'	=>	'MTLS-1G14',
		'uc_tank_7'	=>	'M5 Stuart',
		'uc_tank_8'	=>	'M24 Chaffee',
		'uc_tank_9'	=>	'T21',
		'uc_tank_10'	=>	'T71',
		'uc_tank_11'	=>	'Cruiser Mk. I',
		'uc_tank_12'	=>	'Cruiser Mk. III',
		'uc_tank_13'	=>	'Cruiser Mk. II',
		'uc_tank_14'	=>	'Cruiser Mk. IV',
		'uc_tank_15'	=>	'Covenanter',
		'uc_tank_16'	=>	'Valentine',
		'uc_tank_17'	=>	'Crusader',
		'uc_tank_18'	=>	'Leichttraktor',
		'uc_tank_19'	=>	'PzKpfw 35 (t)',
		'uc_tank_20'	=>	'PzKpfw 38H735 (f)',
		'uc_tank_21'	=>	'PzKpfw II',
		'uc_tank_22'	=>	'PzKpfw 38 (t)',
		'uc_tank_23'	=>	'PzKpfw II Ausf. J',
		'uc_tank_24'	=>	'PzKpfw II Luchs',
		'uc_tank_25'	=>	'PzKpfw III Ausf. A',
		'uc_tank_26'	=>	'T-15',
		'uc_tank_27'	=>	'PzKpfw 38 nA',
		'uc_tank_28'	=>	'VK 1602 Leopard',
		'uc_tank_29'	=>	'VK 2801',
		'uc_tank_30'	=>	'RenaultFT',
		'uc_tank_31'	=>	'D1',
		'uc_tank_32'	=>	'Hotchkiss H35',
		'uc_tank_33'	=>	'AMX 38',
		'uc_tank_34'	=>	'AMX 40',
		'uc_tank_35'	=>	'ELC AMX',
		'uc_tank_36'	=>	'AMX 12t',
		'uc_tank_37'	=>	'AMX 13 75',
		'uc_tank_38'	=>	'AMX 13 90',
		'uc_tank_39'	=>	'MS-1',
		'uc_tank_40'	=>	'BT-2',
		'uc_tank_41'	=>	'Tetrarch',
		'uc_tank_42'	=>	'T-26',
		'uc_tank_43'	=>	'BT-7',
		'uc_tank_44'	=>	'BT-SV', 
		'uc_tank_45'	=>	'M3 Stuart Lend Lease',
		'uc_tank_46'	=>	'T-127',
		'uc_tank_47'	=>	'T-46',
		'uc_tank_48'	=>	'A-20',
		'uc_tank_49'	=>	'T-50',
		'uc_tank_50'	=>	'Valentine II',
		'uc_tank_51'	=>	'T-50-2',
		'uc_tank_52'	=>	'Type 62', 
		'uc_tank_53'	=>	'T2 Medium Tank',
		'uc_tank_54'	=>	'M2 Medium Tank',
		'uc_tank_55'	=>	'M3 Lee',
		'uc_tank_56'	=>	'M4 Sherman',
		'uc_tank_57'	=>	'M4A2E4',
		'uc_tank_58'	=>	'M7',
		'uc_tank_59'	=>	'Ram-II',
		'uc_tank_60'	=>	'M4A3E2',
		'uc_tank_61'	=>	'M4A3E8 Sherman',
		'uc_tank_62'	=>	'T20',
		'uc_tank_63'	=>	'M26 Pershing',
		'uc_tank_64'	=>	'T23',
		'uc_tank_65'	=>	'T26E4 Super Pershing',
		'uc_tank_66'	=>	'T69',
		'uc_tank_67'	=>	'M46 Patton',
		'uc_tank_68'	=>	'T54E1',
		'uc_tank_69'	=>	'M48A1',
		'uc_tank_70'	=>	'Vickers Medium Mk. I',
		'uc_tank_71'	=>	'Vickers Medium Mk. II',
		'uc_tank_72'	=>	'Vickers Medium Mk. III',
		'uc_tank_73'	=>	'Matilda',
		'uc_tank_74'	=>	'Matilda Black Prince',
		'uc_tank_75'	=>	'Cromwell',
		'uc_tank_76'	=>	'Comet',
		'uc_tank_77'	=>	'Centurion Mk. I',
		'uc_tank_78'	=>	'Centurion Mk. 7/1',
		'uc_tank_79'	=>	'FV4202',
		'uc_tank_80'	=>	'PzKpfw S35 739 (f)',
		'uc_tank_81'	=>	'PzKpfw III',
		'uc_tank_82'	=>	'PzKpfw III/IV',
		'uc_tank_83'	=>	'PzKpfw IV',
		'uc_tank_84'	=>	'PzKpfw IV Hydraulic',
		'uc_tank_85'	=>	'T-25',
		'uc_tank_86'	=>	'PzKpfw IV Schmalturm',
		'uc_tank_87'	=>	'PzKpfw V-IV',
		'uc_tank_88'	=>	'PzKpfw V-IV Alpha',
		'uc_tank_89'	=>	'VK 3001 (H)',
		'uc_tank_90'	=>	'VK 3001 (P)',
		'uc_tank_91'	=>	'VK 3601 (H)',
		'uc_tank_92'	=>	'Panther-M10',
		'uc_tank_93'	=>	'PzKpfw V Panther',
		'uc_tank_94'	=>	'VK 3002 (DB)',
		'uc_tank_95'	=>	'Panther II',
		'uc_tank_96'	=>	'E-50',
		'uc_tank_97'	=>	'E-50 Ausf. M',
		'uc_tank_98'	=>	'D2',
		'uc_tank_99'	=>	'Lorraine 40 t',
		'uc_tank_100'	=>	'Bat Chatillon 25 t',
		'uc_tank_101'	=>	'A-32',
		'uc_tank_102'	=>	'T-28',
		'uc_tank_103'	=>	'Matilda IV',
		'uc_tank_104'	=>	'T-34',
		'uc_tank_105'	=>	'T-34-85',
		'uc_tank_106'	=>	'KV-13',
		'uc_tank_107'	=>	'T-43',
		'uc_tank_108'	=>	'T-44',
		'uc_tank_109'	=>	'T-54',
		'uc_tank_110'	=>	'T-62A',
		'uc_tank_111'	=>	'Type 59',
		'uc_tank_112'	=>	'Type 59 G',
		'uc_tank_113'	=>	'T1 Heavy Tank',
		'uc_tank_114'	=>	'T14',
		'uc_tank_115'	=>	'M6',
		'uc_tank_116'	=>	'T29',
		'uc_tank_117'	=>	'M6A2E1',
		'uc_tank_118'	=>	'T32',
		'uc_tank_119'	=>	'T34',
		'uc_tank_120'	=>	'M103',
		'uc_tank_121'	=>	'T110E5',
		'uc_tank_122'	=>	'T57 Heavy Tank',
		'uc_tank_123'	=>	'Churchill I',
		'uc_tank_124'	=>	'Churchill VII',
		'uc_tank_125'	=>	'TOG II*',
		'uc_tank_126'	=>	'Black Prince',
		'uc_tank_127'	=>	'Caernarvon',
		'uc_tank_128'	=>	'Conqueror',
		'uc_tank_129'	=>	'FV215b',
		'uc_tank_130'	=>	'PzKpfw B2 740 (f)',
		'uc_tank_131'	=>	'PzKpfw VI Tiger',
		'uc_tank_132'	=>	'PzKpfw VI Tiger (P)',
		'uc_tank_133'	=>	'L&ouml;we',
		'uc_tank_134'	=>	'PzKpfw VIB Tiger II',
		'uc_tank_135'	=>	'VK 4502 (P) Ausf. A',
		'uc_tank_136'	=>	'E-75',
		'uc_tank_137'	=>	'VK 4502 (P) Ausf. B',
		'uc_tank_138'	=>	'E-100',
		'uc_tank_139'	=>	'Maus',
		'uc_tank_140'	=>	'B1',
		'uc_tank_141'	=>	'BDR G1B',
		'uc_tank_142'	=>	'ARL 44',
		'uc_tank_143'	=>	'AMX M4(1945)',
		'uc_tank_144'	=>	'AMX 50 100',
		'uc_tank_145'	=>	'FCM 50 t',
		'uc_tank_146'	=>	'AMX 50 120',
		'uc_tank_147'	=>	'AMX 50B',
		'uc_tank_148'	=>	'Churchill III',
		'uc_tank_149'	=>	'KV',
		'uc_tank_150'	=>	'KV-1',
		'uc_tank_151'	=>	'KV-220',
		'uc_tank_152'	=>	'KV-220 Beta-Test',
		'uc_tank_153'	=>	'KV-1S',
		'uc_tank_154'	=>	'KV-2',
		'uc_tank_155'	=>	'T-150',
		'uc_tank_156'	=>	'IS',
		'uc_tank_157'	=>	'KV-3',
		'uc_tank_158'	=>	'IS-3',
		'uc_tank_159'	=>	'IS-6',
		'uc_tank_160'	=>	'KV-4',
		'uc_tank_161'	=>	'KV-5',
		'uc_tank_162'	=>	'IS-8',
		'uc_tank_163'	=>	'ST-I',
		'uc_tank_164'	=>	'IS-4',
		'uc_tank_165'	=>	'IS-7',
		'uc_tank_166'	=>	'WZ-111',
		'uc_tank_167'	=>	'T18',
		'uc_tank_168'	=>	'T82',
		'uc_tank_169'	=>	'M8A1',
		'uc_tank_170'	=>	'T40',
		'uc_tank_171'	=>	'M10 Wolverine',
		'uc_tank_172'	=>	'T49',
		'uc_tank_173'	=>	'M18 Hellcat',
		'uc_tank_174'	=>	'M36 Jackson',
		'uc_tank_175'	=>	'T25 AT',
		'uc_tank_176'	=>	'T25/2',
		'uc_tank_177'	=>	'T28',
		'uc_tank_178'	=>	'T28 Prototype',
		'uc_tank_179'	=>	'T30',
		'uc_tank_180'	=>	'T95',
		'uc_tank_181'	=>	'T110E3',
		'uc_tank_182'	=>	'T110E4',
		'uc_tank_183'	=>	'AT-15A',
		'uc_tank_184'	=>	'Panzerj&auml;ger I',
		'uc_tank_185'	=>	'Marder II',
		'uc_tank_186'	=>	'Hetzer',
		'uc_tank_187'	=>	'StuG III',
		'uc_tank_188'	=>	'Dicker Max',
		'uc_tank_189'	=>	'JagdPz IV',
		'uc_tank_190'	=>	'Jagdpanther',
		'uc_tank_191'	=>	'8.8 cm PaK 43 Jagdtiger',
		'uc_tank_192'	=>	'Ferdinand',
		'uc_tank_193'	=>	'Jagdpanther II',
		'uc_tank_194'	=>	'Jagdtiger',
		'uc_tank_195'	=>	'JagdPz E-100',
		'uc_tank_196'	=>	'RenaultFT AC',
		'uc_tank_197'	=>	'FCM36 PaK40',
		'uc_tank_198'	=>	'Renault UE 57',
		'uc_tank_199'	=>	'Somua SAu-40',
		'uc_tank_200'	=>	'S-35 CA',
		'uc_tank_201'	=>	'ARL V39',
		'uc_tank_202'	=>	'AMX AC Mle. 1946',
		'uc_tank_203'	=>	'AMX AC Mle. 1948',
		'uc_tank_204'	=>	'AMX 50 Foch',
		'uc_tank_205'	=>	'AMX-50 Foch (155)',
		'uc_tank_206'	=>	'AT-1',
		'uc_tank_207'	=>	'SU-76',
		'uc_tank_208'	=>	'SU-85B',
		'uc_tank_209'	=>	'SU-85',
		'uc_tank_210'	=>	'SU-85I', 
		'uc_tank_211'	=>	'SU-100',
		'uc_tank_212'	=>	'SU-100M1',
		'uc_tank_213'	=>	'SU-122-44', 
		'uc_tank_214'	=>	'SU-152',
		'uc_tank_215'	=>	'ISU-152',
		'uc_tank_216'	=>	'SU-101',
		'uc_tank_217'	=>	'Object 704',
		'uc_tank_218'	=>	'SU-122-54',
		'uc_tank_219'	=>	'Object 263',
		'uc_tank_220'	=>	'Object 268',
		'uc_tank_221'	=>	'T57',
		'uc_tank_222'	=>	'M37',
		'uc_tank_223'	=>	'M7 Priest',
		'uc_tank_224'	=>	'M41',
		'uc_tank_225'	=>	'M12',
		'uc_tank_226'	=>	'M40/M43',
		'uc_tank_227'	=>	'T92',
		'uc_tank_228'	=>	'Sturmpanzer I Bison',
		'uc_tank_229'	=>	'Sturmpanzer II',
		'uc_tank_230'	=>	'Wespe',
		'uc_tank_231'	=>	'Grille',
		'uc_tank_232'	=>	'Hummel',
		'uc_tank_233'	=>	'GW Panther',
		'uc_tank_234'	=>	'GW Tiger',
		'uc_tank_235'	=>	'GW Typ E',
		'uc_tank_236'	=>	'RenaultBS',
		'uc_tank_237'	=>	'Lorraine39 L AM',
		'uc_tank_238'	=>	'105 leFH18B2',
		'uc_tank_239'	=>	'AMX 105AM',
		'uc_tank_240'	=>	'AMX 13 F3 AM',
		'uc_tank_241'	=>	'Lorraine155 50',
		'uc_tank_242'	=>	'Lorraine155 51',
		'uc_tank_243'	=>	'Bat Chatillon 155',
		'uc_tank_244'	=>	'SU-18',
		'uc_tank_245'	=>	'SU-26',
		'uc_tank_246'	=>	'SU-5',
		'uc_tank_247'	=>	'SU-8',
		'uc_tank_248'	=>	'S-51',
		'uc_tank_249'	=>	'SU-14',
		'uc_tank_250'	=>	'Object 212',
		'uc_tank_251'	=>	'Object 261',
		'uc_tank_252' 	=>  'Renault NC-31',
		'uc_tank_253' 	=>  'Vickers Mk. E Type B',
		'uc_tank_254' 	=>  'Type 2597 Chi-Ha',
		'uc_tank_255' 	=>  'M5A1 Stuart',
		'uc_tank_256' 	=>  '59-16',
		'uc_tank_257' 	=>  'WZ-131',
		'uc_tank_258' 	=>  'WZ-132',
		'uc_tank_259' 	=>  'Type T-34',
		'uc_tank_260' 	=>  'Type 58',
		'uc_tank_261' 	=>  'T-34-1',
		'uc_tank_262' 	=>  'T-34-2',
		'uc_tank_263' 	=>  'WZ-120',
		'uc_tank_264' 	=>  '121',
		'uc_tank_265' 	=>  'IS-2',
		'uc_tank_266' 	=>  '110',
		'uc_tank_267' 	=>  'WZ-111 model 1-4',
		'uc_tank_268' 	=>  '113',
		'uc_tank_269'   =>  'Universal Carrier QF 2 pounder',
        'uc_tank_270'   =>  'Alecto',
        'uc_tank_271'   =>  'Valentine AT',
        'uc_tank_272'   =>  'АТ 2',
        'uc_tank_273'   =>  'АТ 7',
        'uc_tank_274'   =>  'Gun Carrier Churchill',
        'uc_tank_275'   =>  'АТ 8',
        'uc_tank_276'   =>  'АТ 15',
        'uc_tank_277'   =>  'А39 Tortoise',
        'uc_tank_278'   =>  'FV215b(183)',
        'uc_tank_279'   =>  'Pz.I',
        'uc_tank_280'   =>  'Pz.I Ausf.С',
        'uc_tank_281'   =>  'Pz.II Ausf.G',
        'uc_tank_282'   =>  'SU-100Y',		
		
	),
);

?>