<?php 
	$javascript->link('http://www.google.com/jsapi', false); 
	$javascript->link('virtual_keyboard', false);
?>

<div style="float:right;">
	<p>Good answers: <?= $wins; ?>/<?= $tries; ?></p>
</div>
<div style="float:left;">
<h2>Training</h2>
</div>
<div class="clr"></div>
<?php if (!isset($this->data['ExactMatchTraining']['win'])): ?>
<div style="float:left; margin-right: 8px;">
<p>The translation of <i><?= $this->data['ExactMatchTraining']['answer_couple'][($this->data['ExactMatchTraining']['base'] ? 'translation' : 'base')]; ?></i> is </p>
</div>
<?php echo $form->create('ExactMatchTraining', array('url' => '/exact_match_trainings/index/' . $this->data['VocabularyList']['id'])); ?>
<?php //print_r($couple); print_r($propositions); ?>
<div style="float:left;">
<?php echo $form->input('ExactMatchTraining.try',array('id' => 'vkeyboard_' . ($this->data['ExactMatchTraining']['base'] ? $vocabulary_list['InputLanguage']['country_code'] : $vocabulary_list['OutputLanguage']['country_code']), 'label' => false, 'size' => '32')); ?>
</div>
<div class="clr" style="padding: 4px;"></div>
<?php echo $form->input('VocabularyList.id', array('type' => 'hidden', 'value' => $this->data['VocabularyList']['id'])); ?>
<?php echo $form->input('ExactMatchTraining.answer', array('type' => 'hidden', 'value' => $this->data['ExactMatchTraining']['answer_couple'][($this->data['ExactMatchTraining']['base'] ? 'base' : 'translation')])); ?>
<?php echo $form->input('ExactMatchTraining.answer_question', array('type' => 'hidden', 'value' => $this->data['ExactMatchTraining']['answer_couple'][($this->data['ExactMatchTraining']['base'] ? 'translation' : 'base')])); ?>
<div style="float:left; margin-right: 128px;">
<?php echo $form->end('Answer!'); ?>
</div>
<div style="float:left;">
<?php echo $form->button('Skip', array('onclick' => "location.href='". $this->webroot . "exact_match_trainings/index/" . $this->data['VocabularyList']['id'] ."'")); ?>
</div>
<div class="clr"></div>

<?php else: ?>
<p>
<?php
if ($this->data['ExactMatchTraining']['win'])
{
	echo $html->image('tick.png') . '&nbsp;&nbsp;';
	echo 'Right, the translation of <i>' . $this->data['ExactMatchTraining']['answer_question'] . '</i> is <i>' . $this->data['ExactMatchTraining']['answer'] . '</i>';
}
else
{
	echo $html->image('cross.png') . '&nbsp;&nbsp;';
	echo 'No, the translation of <i>' . $this->data['ExactMatchTraining']['answer_question'] . '</i> was <u>' . $this->data['ExactMatchTraining']['answer'] . '</u>';
}
?>
.</p>
<?php echo $form->button('Next', array('onclick' => "location.href='". $this->webroot . "exact_match_trainings/index/" . $this->data['VocabularyList']['id'] ."'")); ?>
<?php endif; ?>
