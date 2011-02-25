<?php
class OutputLanguage extends AppModel {
	var $name = 'OutputLanguage';
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