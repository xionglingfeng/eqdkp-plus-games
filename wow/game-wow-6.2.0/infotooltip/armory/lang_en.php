<?php
/*	Project:	EQdkp-Plus
 *	Package:	World of Warcraft game package
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

$lang = array(
	'itemBind'		=> array(
		1	=> 'Binds when picked up',
		2	=> 'Binds when equipped',
		3	=> 'Binds when used',
		4	=> 'Binds to Battle.net account'
	),
	'itemClass'		=> array(
		0	=> array('Consumable', 'Potion', 'Elixir', 'Flask', 'Scroll', 'Food & Drink', 'Item Enhancement', 'Bandage', 'Other'),
		1	=> array('Bag', 'Soul Bag', 'Herb Bag', 'Enchanting Bag', 'Engineering Bag', 'Gem Bag', 'Mining Bag', 'Leatherworking Bag', 'Inscription Bag', 'Tackle Box'),
		2	=> array('Axe', 'Axe', 'Bow', 'Gun', 'Mace', 'Mace', 'Polearm', 'Sword', 'Sword', 10 => 'Staff', 13 => 'Fist Weapon', 14 => 'Miscellaneous', 15 => 'Dagger', 16 => 'Thrown', 18 => 'Crossbow', 19 => 'Wand', 20 => 'Fishing Pole'),
		3	=> array('Red Gem', 'Blue Gem', 'Yellow Gem', 'Purple Gem', 'Green Gem', 'Orange Gem', 'Meta Gem', 'Simple Gem', 'Prismatic Gem', 'Hydraulic Gem', 'Cogwheel Gem'),
		4	=> array('Miscellaneous', 'Cloth', 'Leather', 'Mail', 'Plate', '', 'Shield', 'Libram', 'Idol', 'Sigil', 'Relic'),
		7	=> array('Trade Goods', 'Parts', 'Explosives', 'Devices', 'Jewelcrafting', 'Cloth', 'Leather', 'Metal & Stone', 'Meat', 'Herb', 'Elemental', 'Other', 'Enchanting', 'Materials', 'Item Enhancement'),
		9	=> array('Book', 'Leatherworking', 'Tailoring', 'Engineering', 'Blacksmithing', 'Cooking', 'Alchemy', 'First Aid', 'Enchanting', 'Fishing', 'Jewelcrafting', 'Inscription'),
		12	=> array('Quest Item'),
		13	=> array('Key'),
		15	=> array('Junk', 'Reagent', 'Pet', 'Holiday', 'Other', 'Mount'),
		16	=> array('Glyph', 'Warrior', 'Paladin', 'Hunter', 'Rogue', 'Priest', 'Death Knight', 'Shaman', 'Mage', 'Warlock', 'Monk', 'Druid')
	),
	'inventoryType'	=> array(
		1	=> 'Head',
		2	=> 'Neck',
		3	=> 'Shoulder',
		4	=> 'Shirt',
		5	=> 'Chest',
		6	=> 'Waist',
		7	=> 'Legs',
		8	=> 'Feet',
		9	=> 'Wrist',
		10	=> 'Hands',
		11	=> 'Finger',
		12	=> 'Trinket',
		13	=> 'One-hand',
		14	=> 'Shield',
		15	=> 'Ranged',
		16	=> 'Back',
		17	=> 'Two-Hand',
		18	=> 'Bag',
		20	=> 'Chest',
		21	=> 'Main-hand',
		22	=> 'Off-hand',
		23	=> 'Held in off-hand',
		25	=> 'Ranged',
		26	=> 'Ranged'
	),
	'damage'		=> 'Damage',
	'weaponSpeed'	=> 'Speed',
	'dps'			=> 'damage per second',
	'armor'			=> 'Armor',
	'bonusStats'	=> array(
		3	=> 'Agility',
		4	=> 'Strength',
		5	=> 'Intellect',
		6 	=> 'Spirit',
		7	=> 'Stamina',
		13	=> 'Dodge',
		14	=> 'Parry',
		31	=> 'Hit',
		32	=> 'Critical Strike',
		35	=> 'PvP-Resilience',
		36	=> 'Haste',
		37	=> 'Expertise',
		38	=> 'Attack power',
		45	=> 'Spell power',
		46	=> 'Health Regeneration',
		47	=> 'Spell Penetration',
		49	=> 'Mastery',
		57	=> "PvP-Power",
	),
	'secondary_stats' => '+%d %s',
	'socket'		=> array(
		'red'		=> 'Red Socket',
		'blue'		=> 'Blue Socket',
		'yellow'	=> 'Yellow Socket',
		'meta'		=> 'Meta Socket',
		'prismatic'	=> 'Prismatic Socket',
		'hydraulic' => 'Hydraulic Socket',
		'cogwheel'	=> 'Cogwheel Socket'		
	),
	'socketBonus'	=> 'Socket Bonus',
	'maxDurability' => 'Durability',
	'allowableClasses' => 'Classes',
	'requiredLevel'	=> 'Requires Level',
	'requiredSkill'	=> 'Requires',
	'itemLevel'		=> 'Item Level',
	'trigger'		=> array(
		'ON_EQUIP'	=> 'Equip:',
		'ON_USE'	=> 'Use:',
		'ON_PROC'	=> 'Chance on hit:',
		'UNKNOWN'	=> 'Unknown:'
	),
	'reforged'	=> 'Reforged',
	'reforgedFrom' => 'Reforged from',
	'enchanted' => 'Enchanted',
	'upgraded' => 'Upgrade Level'
);
?>