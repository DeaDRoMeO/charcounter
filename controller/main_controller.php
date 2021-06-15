<?php
namespace deadromeo\charcounter\controller;

class main_controller
{
	protected $config;
	
	protected $helper;
	
	protected $template;

	protected $language;

	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\language\language $language)
	{
		$this->config	= $config;
		$this->helper	= $helper;
		$this->template	= $template;
		$this->language	= $language;
	}

}
