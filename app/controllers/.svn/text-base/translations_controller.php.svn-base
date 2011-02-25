<?php
class TranslationsController extends AppController {
	var $name = 'Translations';
	var $uses = array('Translation', 'VocabularyList');
	
	function add($vocabulary_list_id)
	{
		$vocabulary_list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $vocabulary_list_id), 'recursive' => 1));
		$this->set('vocabulary_list', $vocabulary_list);
		
		if (!empty($this->data))
		{
			if($this->Translation->save($this->data))
		    {
		        //$this->flash('valid', 'Vocabulary list added');
		        $this->redirect('/translations/add/' . $vocabulary_list_id);
		    }
		}
	}
	
	function edit($id)
	{
		if (empty($this->data))
		{
			$this->data = $this->Translation->find('first',array('conditions' => array('Translation.id' => $id), 'recursive' => 0));
			$vocabulary_list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $this->data['Translation']['vocabulary_list_id']), 'recursive' => 1));
			$this->set('vocabulary_list', $vocabulary_list);
		}
		else
		{
			if($this->Translation->save($this->data))
		    {
		        //$this->flash('valid', 'Vocabulary list added');
		        $this->redirect('/vocabulary_lists/edit_view/' . $this->data['Translation']['vocabulary_list_id']);
		    }
			else
			{
				$vocabulary_list = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $this->data['Translation']['vocabulary_list_id']), 'recursive' => 1));
				$this->set('vocabulary_list', $vocabulary_list);
			}
		}
	}
}
?>