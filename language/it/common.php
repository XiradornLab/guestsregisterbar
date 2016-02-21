<?php
/** 
* 
* @package guests register bar
* @copyright (c) 2015 alex75
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'WELC'			=> 'Benvenuto su',
'REGNOW'			=> 'Registrati adesso',
'ORLOGIN'			=> 'oppure effetua il',
));