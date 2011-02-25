<div style="float:right;">
	<p>Good answers: <?= $wins; ?>/<?= $tries; ?></p>
</div>
<div style="float:left;">
<h2>Training</h2>
</div>
<div class="clr"></div>

<?php if (!isset($this->data['PropositionTraining']['win'])): ?>
<p>The translation of <i><?= $this->data['PropositionTraining']['answer_couple'][($this->data['PropositionTraining']['base'] ? 'translation' : 'base')]; ?></i> is:</p>
<?php echo $form->create('PropositionTraining', array('url' => '/proposition_trainings/index/' . $this->data['VocabularyList']['id'])); ?>
<?php //print_r($couple); print_r($propositions); ?>
<?php echo $form->radio('PropositionTraining.try',$this->data['PropositionTraining']['propositions'],array('legend' => false, 'value' => '0', 'style' => 'float: left;')); ?>
<div class="clr" style="padding: 4px;"></div>
<?php //echo $form->input('VocabularyList.id', array('type' => 'hidden', 'value' => $this->data['VocabularyList']['id'])); ?>
<?php echo $form->input('VocabularyList.id', array('type' => 'hidden', 'value' => $this->data['VocabularyList']['id'])); ?>
<?php echo $form->input('PropositionTraining.answer_id', array('type' => 'hidden', 'value' => $this->data['PropositionTraining']['answer_couple']['id'])); ?>
<?php echo $form->input('PropositionTraining.answer_value', array('type' => 'hidden', 'value' => $this->data['PropositionTraining']['answer_couple'][($this->data['PropositionTraining']['base'] ? 'base' : 'translation')])); ?>
<?php echo $form->input('PropositionTraining.answer_question', array('type' => 'hidden', 'value' => $this->data['PropositionTraining']['answer_couple'][($this->data['PropositionTraining']['base'] ? 'translation' : 'base')])); ?>
<div style="float:left; margin-right: 128px;">
<?php echo $form->end('Answer!'); ?>
</div>
<div style="float:left;">
<?php echo $form->button('Skip', array('onclick' => "location.href='". $this->webroot . "proposition_trainings/index/" . $this->data['VocabularyList']['id'] ."'")); ?>
</div>
<div class="clr"></div>

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
