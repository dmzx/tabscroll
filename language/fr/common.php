<?php
/*
*
* @package Tabscroll
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2015 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* French translation by Galixte (http://www.galixte.com)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'SCROLL_1'	=> 'Ici vous marquez',
	'SCROLL_2'	=> 'un texte',
	'SCROLL_3'	=> 'découpé en',
	'SCROLL_4'	=> 'seize parties',
	'SCROLL_5'	=> 'de manière',
	'SCROLL_6'	=> 'à afficher',
	'SCROLL_7'	=> 'tous les mots',
	'SCROLL_8'	=> 'dans l’espace alloué',
	'SCROLL_9'	=> 'par les onglets',
	'SCROLL_10'	=> 'de votre',
	'SCROLL_11'	=> 'navigateur.',
	'SCROLL_12'	=> 'Le message.',
	'SCROLL_13'	=> 'peut être rapide',
	'SCROLL_14'	=> 'ou lent selon la valeur',
	'SCROLL_15'	=> 'que vous',
	'SCROLL_16'	=> 'aurez paramétrée.',
	'SCROLL_COPY'	=> 'Created by dmzx, www.Dmzx-web.net',
));
