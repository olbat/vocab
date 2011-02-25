<?php
class PropositionTrainingsController extends AppController {
	var $name = 'PropositionTrainings';
	var $uses = array('PropositionTrainings', 'VocabularyList');
	var $proposition_number = 5;
	
	function index($vocabulary_list_id = null) {
		if (empty($vocabulary_list_id))
			$vocabulary_list_id = $this->Session->read('VocabularyList.id');
		
		$wins = $this->Session->read('wins');
		$tries = $this->Session->read('tries');
		if (empty($wins))
			$wins = 0;
		if (empty($tries))
			$tries = 0;

		
		
		if (empty($this->data))
		{
			$this->data = array();
			$this->data['VocabularyList']['id'] = $vocabulary_list_id;
			//print_r($this->Session->read());
			$couple = $this->_get_random_translation_couple($vocabulary_list_id);
			$this->data['PropositionTraining']['answer_couple'] = $couple;
		
			$rand = rand(0,1);
		
			if ($rand == 0)
				$this->data['PropositionTraining']['base'] = true;
			else
				$this->data['PropositionTraining']['base'] = false;
		
			$propositions = $this->_get_random_translation_values($vocabulary_list_id,$rand,$this->proposition_number,$couple);
		
			$this->data['PropositionTraining']['propositions'] = $propositions;
			
			//$this->Session->write('prout',$propositions);
		}
		else
		{
			$this->data['PropositionTraining']['answer_value'] = '<b>' . str_replace(';', '</b> or <b>', $this->data['PropositionTraining']['answer_value']) . '</b>';
			
			if ($this->data['PropositionTraining']['try'] == $this->data['PropositionTraining']['answer_id'])
			{
				$this->data['PropositionTraining']['win'] = true;
				$wins = $wins + 1;
			}
			else
				$this->data['PropositionTraining']['win'] = false;
			
			$tries = $tries + 1;
		}
		$this->Session->write('wins', $wins);
		$this->Session->write('tries', $tries);
		
		$this->set('wins', $wins);
		$this->set('tries', $tries);
	}
	
	function _get_random_translation_couple($id)
	{
		$list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $id), 'recursive' => 1));
		$translation = $list['Translation'][rand(0,count($list['Translation'])-1)];
		return $translation;
	}
	
	function _get_random_translation_value($id, $base)
	{
		$list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $id), 'recursive' => 1));
		$translation = $list['Translation'][rand(0,count($list['Translation'])-1)];

		if ($base)
			$wordlist = explode(";", $translation['base']);
		else
			$wordlist = explode(";", $translation['translation']);
		
		return array($translation['id'] => $wordlist[rand(0,count($wordlist)-1)]);
	}
	
	function _get_random_translation_values($id, $base, $number, $couple)
	{
		$ret = array();
		
		$i = 0;
		$tot = 0;
		while ($i < $number)
		{
			$tmp = $this->_get_random_translation_value($id, ($base == 0 ? true : false));
			if (!in_array(key($tmp),array_keys($ret)))
			{
				$ret += $tmp;
				$i++;
			}
			if ($tot > (10 * $number))
				break;
			$tot++;
		}
		$ret += array($couple['id'] => ($base == 0 ? $couple['base'] : $couple['translation']));
		
		$ret = array_unique($ret);
		$ret = $this->shuffle_assoc($ret);
		
		return $ret;
	}
}
?>