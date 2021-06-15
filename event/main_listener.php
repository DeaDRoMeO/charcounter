<?php
namespace deadromeo\charcounter\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'							=> 'load_language_on_setup',
			'core.posting_modify_template_vars'			=> 'load_chars_limit',
		];
	}
	protected $config;
	
	protected $language;

	
	protected $helper;

	
	protected $template;


	protected $php_ext;

	public function __construct(\phpbb\config\config $config, \phpbb\language\language $language, \phpbb\controller\helper $helper, \phpbb\template\template $template, $php_ext)
	{
		$this->config = $config;
		$this->language = $language;
		$this->helper   = $helper;
		$this->template = $template;
		$this->php_ext  = $php_ext;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name' => 'deadromeo/charcounter',
			'lang_set' => 'common',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}
	public function load_chars_limit($event)
	{
	
		$this->template->assign_vars([
			'CHARS_LIMIT'					=> $this->config['max_post_chars'],
		]);
	}
}
