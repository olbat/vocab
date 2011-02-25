<?php
class TrainingsController extends AppController {
	var $name = "Trainings";
	
	function index($vocabulary_list_id = null) {
		//print_r($this->Session->read());
		if (empty($vocabulary_list_id))
			$vocabulary_list_id = $this->Session->read('VocabularyList.id');
		else
			$this->set('vocabulary_list_id',$vocabulary_list_id);
		if (empty($vocabulary_list_id))
		{
			$this->Session->setFlash('Please select a vocabulary list first');
			$this->redirect('/vocabulary_lists');
		}
			
		$this->Session->write('wins',0);
		$this->Session->write('tries',0);
	}
}
?>