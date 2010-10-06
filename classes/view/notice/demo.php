<?php defined('SYSPATH') or die('No direct script access.');

class View_Notice_Demo extends Kostache {

	public function jquery()
	{
		return HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js');
	}

	public function notices_css()
	{
		return HTML::style('media/css/notices.css');
	}

	public function notices_js()
	{
		return HTML::script('media/js/notices.js');
	}

	public function notices_count()
	{
		return Notices::count();
	}

	public function notices_display()
	{
		return Notices::display();
	}

} // End View_Notice