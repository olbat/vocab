<?php
	$str = '<p style="text-align: center; margin-top: 0px;"><small>' . $html->link('Browse lists', '/vocabulary_lists', array('style' =>  'color: white;')) . '<span style="color: gray;"> | </span>' . $html->link('This list','/vocabulary_lists/view/' . $this->data['VocabularyList']['id'], array('style' =>  'color: white;')) . '</small></p>';
	$this->set('header_links', $str);
?>
<h2 style="display: inline;">Training</h2>
<p style="display: inline;"><small>(Good answers: <?= $wins; ?>/<?= $tries; ?>)</small></p>

<?php if (!isset($this->data['PropositionTraining']['win'])): ?>
<p>The translation of <i><?= $this->data['PropositionTraining']['answer_couple'][($this->data['PropositionTraining']['base'] ? 'translation' : 'base')]; ?></i> is:</p>
<?php echo $form->create('PropositionTraining', array('url' => '/proposition_trainings/index/' . $this->data['VocabularyList']['id'])); ?>
<?php //print_r($couple); print_r($propositions); ?>
<div style="display:block;">
<?php echo $form->radio('PropositionTraining.try',$this->data['PropositionTraining']['propositions'],array('legend' => false, 'value' => '0', 'separator' => '</div><div style="display:block;">', 'style' => 'display:inline;')); ?>
</div>
<?php //echo $form->input('VocabularyList.id', array('type' => 'hidden', 'value' => $this->data['VocabularyList']['id'])); ?>

<?php echo $form->input('VocabularyList.id', array('type' => 'hidden', 'value' => $this->data['VocabularyList']['id'])); ?>
<?php echo $form->input('PropositionTraining.answer_id', array('type' => 'hidden', 'value' => $this->data['PropositionTraining']['answer_couple']['id'])); ?>
<?php echo $form->input('PropositionTraining.answer_value', array('type' => 'hidden', 'value' => $this->data['PropositionTraining']['answer_couple'][($this->data['PropositionTraining']['base'] ? 'base' : 'translation')])); ?>
<?php echo $form->input('PropositionTraining.answer_question', array('type' => 'hidden', 'value' => $this->data['PropositionTraining']['answer_couple'][($this->data['PropositionTraining']['base'] ? 'translation' : 'base')])); ?>

<br/>
<?php echo $form->end('Answer!'); ?>
<p style="display: inline;">
&nbsp;&nbsp;<?php echo $html->link('Skip', '/proposition_trainings/index/' . $this->data['VocabularyList']['id']); ?>
</p>

<?php else: ?>
<p>
<?php
if ($this->data['PropositionTraining']['win'])
{
	echo $html->image('tick.png') . '&nbsp;&nbsp;';
	echo 'Right, the translation of <i>' . $this->data['PropositionTraining']['answer_question'] . '</i> is <i>' . $this->data['PropositionTraining']['answer_value'] . '</i>';
}
else
{
	echo $html->image('cross.png') . '&nbsp;&nbsp;';
	echo 'No, the translation of <i>' . $this->data['PropositionTraining']['answer_question'] . '</i> was ' . $this->data['PropositionTraining']['answer_value'];
}
?>
.</p>
<?php echo $form->button('Next', array('onclick' => "location.href='". $this->webroot . "proposition_trainings/index/" . $this->data['VocabularyList']['id'] ."'")); ?>
<?php endif; ?>