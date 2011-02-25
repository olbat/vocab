<?php
App::import('Model', 'menu');

class AppController extends Controller {
	var $helpers = array('Html', 'Form', 'Time', 'Javascript', 'Ajax', 'Session', 'Application');
	var $components = array('RequestHandler'); 
	
	function flash($key, $message)
	  {
	    $key = in_array($key, $this->FLASH_ALLOWED_TYPES) ? $key : 		  	$this->FLASH_ALLOWED_TYPES[count($this->FLASH_ALLOWED_TYPES) - 1];
	    $this->Session->write('flash.' . $key, $message);
	  }
	
	function flashMessage()
	{
		
	}
	
	function shuffle_assoc($list) { 
	  if (!is_array($list)) return $list; 

	  $keys = array_keys($list); 
	  shuffle($keys); 
	  $random = array(); 
	  foreach ($keys as $key) 
	    $random[$key] = $list[$key]; 

	  return $random; 
	}
	
	function beforeFilter()
	{
		if ($this->RequestHandler->isMobile())
			$this->autoRender = false;
	}
	
	function afterFilter()
	{
		if ($this->RequestHandler->isMobile())
			$this->render($this->action, 'mobile', 'mobile_'.$this->action);
	}
	
	function beforeRender()
	{
		$this->menu = new Menu('nav');
	    $this->user_menu = new Menu('fast_nav');
		
		$this->menu->addLink('/vocabulary_lists', 'Browse lists');
		$this->menu->addLink('/vocabulary_lists/add', 'Add list');
		$this->menu->addLink('/trainings/index/' . $this->Session->Read('VocabularyList.id'), 'Practice');
		
		$this->set('menu', $this->menu);
	    $this->set('user_menu', $this->user_menu);
	
		if ($this->Session->check('Message.flash'))
			$this->Session->flash();
	}
}
?>