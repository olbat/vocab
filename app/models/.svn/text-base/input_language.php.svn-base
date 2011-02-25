<?php
class InputLanguage extends AppModel {
	var $name = 'InputLanguage';
	var $useTable = 'languages';
	
	var $validate = array(
	    'name' => array(
	    	'rule' => 'notEmpty',
	    	'message' => 'Can\'t be empty'
		)
	);
	
	var $hasMany = array('VocabularyList');
}
?>