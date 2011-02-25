<?php
class VocabularyListsController extends AppController {
	var $name = 'VocabularyLists';
	var $uses = array('VocabularyList', 'Language', 'Translation');
	var $paginate = array('order' => array('VocabularyList.created' => 'ASC'));
	
	function index($type='added')
	{
		if (strcmp($type,'alpha') == 0)
			$this->paginate = array('order' => array('VocabularyList.name' => 'ASC'));
		else
			$this->paginate = array('order' => array('VocabularyList.created' => 'ASC'));
			
		$this->data = $this->paginate('VocabularyList');
	}
	
	function view($id, $type='alpha')
	{
		
		$this->Session->write('wins', 0);
		$this->Session->write('tries', 0);
			
		$this->data = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $id), 'order' => array('VocabularyList.name ASC'), 'recursive' => 0));
		if (strcmp($type,'added') == 0)
			$this->set('list',$this->Translation->find('all',array('conditions' => array('Translation.vocabulary_list_id' => $id), 'order' => array('Translation.id ASC'), 'recursive' => -1)));
		else
			$this->set('list',$this->Translation->find('all',array('conditions' => array('Translation.vocabulary_list_id' => $id), 'order' => array('Translation.base ASC'), 'recursive' => -1)));
	
		$this->Session->write('VocabularyList.id', $this->data['VocabularyList']['id']);
		//print_r($this->Session->read());
	}
	
	function add()
	{
		$this->set('languages', $this->Language->find('list', array('order' => array('Language.name' => 'ASC'), 'fields' => array('Language.id', 'Language.name'))));
		
		if (!empty($this->data))
		{
			if($this->VocabularyList->saveAll($this->data))
		    {
		        //$this->flash('valid', 'Vocabulary list added');
		        $this->redirect('/translations/add/' . $this->VocabularyList->id);
		    }
		}
	}
	
	function edit($id)
	{
		$this->set('languages', $this->Language->find('list', array('order' => array('Language.name' => 'ASC'), 'fields' => array('Language.id', 'Language.name'))));
		
		if (empty($this->data))
		{
			$this->data = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $id), 'recursive' => 1));
		}
		else
		{
			if($this->VocabularyList->saveAll($this->data))
		    {
		        //$this->flash('valid', 'Vocabulary list added');
		        $this->redirect('/vocabulary_lists/edit_view/' . $id);
		    }
		}
	}
	
	function edit_view($id)
	{
		$this->data = $this->VocabularyList->find('first',array('conditions' => array('VocabularyList.id' => $id), 'recursive' => 1));
	}
	
	function delete_list($id)
	{
		$this->VocabularyList->delete($id);
		$this->redirect('/vocabulary_lists');
	}
	
	function autoComplete() {
		//Partial strings will come from the autocomplete field as
		//$this->data['Post']['subject'] 
		$this->set('vocabulary_lists', $this->VocabularyList->find('all', array(
					'conditions' => array(
						'VocabularyList.name LIKE' => $this->data['VocabularyList']['name'].'%'
					),
					'fields' => array('name')
		)));
		$this->layout = 'ajax';
	}
}
?>