<?php
class VocabularyList extends AppModel {
	var $name = 'VocabularyList';
	
	var $validate = array(
			'name' => array(
				'minlength' => array(
					'rule' => array('minLength', 4),
					'message' => 'Min length is 4'
				),
				'maxlength' => array(
					'rule' => array('maxLength', 64),
					'message' => 'Max length is 64'
				),
				'unique' => array(
				  'rule' => 'isUnique',
				  'message' => 'Already used title'
				)
			),
			'description' => array(
				'maxlength' => array(
					'rule' => array('maxLength', 1024),
					'message' => 'Max length is 1024'
				)
			)
		);
		
	var $hasMany = array('Translation');
	var $belongsTo = array('InputLanguage','OutputLanguage');
}
?>