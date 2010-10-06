<?php defined('SYSPATH') or die('No direct script access.');

class View_Notice extends Kostache {

	public $_notice;
	
	public function notice()
	{
		return array
		(
			'hash'           => $this->_notice->hash,
			'type'           => $this->_notice->type,
			'type_formatted' => ucwords(__($this->_notice->type)),
			'persistant'     => $this->_notice->is_persistent ? ' notice-persistent' : '',
			'message'        => $this->_notice->message,
			
			'image'          => Notices::image(
				$this->_notice->type, 
				array('width' => 32, 'height' => 32, 'alt' => ucwords(__($this->_notice->type)))
			),
			
			'remove_link'    => HTML::anchor(
				Route::get('notice-remove')->uri(array('hash' => $this->_notice->hash)),
				HTML::image(
					'media/images/notices/notice-close.png',
					array('width' => 16, 'height' => 16, 'alt' => __('Close'))),
				array('title' => __('Close'))
			),
		);
	}

} // End View_Notice