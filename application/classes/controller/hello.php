<?php defined('SYSPATH') or die ('No direct script access');
class Controller_Hello extends Controller_Template {
	public $template = 'site';
	public function action_index()
	{
		$this->template->message = 'hello,world';
	}
	public function action_hello2()
	{
		$this->template->message = 'hello,world2';
		}
}
