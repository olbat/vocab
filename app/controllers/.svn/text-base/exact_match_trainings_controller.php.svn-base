<?php
class ExactMatchTrainingsController extends AppController {
	var $name = 'ExactMatchTrainings';
	var $uses = array('ExactMatchTrainings', 'VocabularyList');
	
	function index($vocabulary_list_id) {
		if (empty($vocabulary_list_id))
			$vocabulary_list_id = $this->Session->read('VocabularyList.id');
			
		//$vocabulary_list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $vocabulary_list_id), 'recursive' => 1));
		//$this->set('vocabulary_list',$vocabulary_list);
		
		if (empty($this->data))
		{
			$this->data['VocabularyList']['id'] = $vocabulary_list_id;
			
			$couple = $this->_get_random_translation_couple($vocabulary_list_id);
			$this->data['ExactMatchTraining']['answer_couple'] = $couple;
		
			$rand = rand(0,1);
		
			if ($rand == 0)
				$this->data['ExactMatchTraining']['base'] = true;
			else
				$this->data['ExactMatchTraining']['base'] = false;
			
			//$this->Session->write('prout',$propositions);
		}
		else
		{
			$this->data['PropositionTraining']['answer_value'] = '<b>' . str_replace(';', '</b> or <b>', $this->data['PropositionTraining']['answer_value']) . '</b>';
			
			print_r($this->data);
			if (strcmp($this->data['ExactMatchTraining']['try'], $this->data['ExactMatchTraining']['answer']) == 0)
			{
				$this->data['ExactMatchTraining']['win'] = true;
				$this->Session->write('wins', $this->Session->read('wins') + 1);
			}
			else
			{
				$this->data['ExactMatchTraining']['win'] = false;
			}
			$this->Session->write('tries', $this->Session->read('tries') + 1);
			//print_r($this->Session->read('prout'));
			
			//if ($this->data['ExactMatchTraining'])
		}
		
		$this->set('wins', $this->Session->read('wins'));
		$this->set('tries', $this->Session->read('tries'));
	}
	
	function _get_random_translation_couple($id)
	{
		$list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $id), 'recursive' => 1));
		return $list['Translation'][rand(0,count($list['Translation'])-1)];
	}
}
?>