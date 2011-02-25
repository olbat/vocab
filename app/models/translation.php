<?php
class Translation extends AppModel {
	var $name = 'Translation';
	
	var $validate = array(
	    'base' => array(
	    	'rule' => 'notEmpty',
	    	'message' => 'Can\'t be empty'
		),
		'translation' => array(
	    	'rule' => 'notEmpty',
	    	'message' => 'Can\'t be empty'
		)
	);
	
	var $belongsTo = array('VocabularyList');
}
?>