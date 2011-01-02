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
			'remove_link'    => HTML::anchor(
				Route::get('notice-remove')->uri(array('hash' => $this->_notice->hash)),
				__('Close'),
				array('title' => __('Close'))
			),
		);
	}

} // End View_Notice