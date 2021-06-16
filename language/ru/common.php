<?php
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'CHARUSE'		=> 'Использовано знаков в сообщении: ',
	'LIMITCHAR'		=> 'Максимум: ',
]);
