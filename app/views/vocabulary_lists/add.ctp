<h2>Create a new vocabulary list</h2>
<?php echo $form->create('VocabularyList', array('action' => 'add')); ?>
<div style="float:left">
	<?php echo $form->input('VocabularyList.name', array('label' => 'Title', 'size' => '48')); ?>
	<?php echo $form->input('VocabularyList.description', array('rows' => '3', 'cols' => '24')); ?>
</div>
<div style="width:30px; float:left;">&nbsp;</div>
<div style="float:left">
	<?php echo $form->input('VocabularyList.input_language_id', array('type' => 'select', 'options' => $languages)); ?>
	<?php echo $form->input('VocabularyList.output_language_id', array('label' => 'Output Language', 'type' => 'select', 'options' => $languages)); ?>
</div>
<div class="clr"></div>
<br/>
<?php echo $form->end('Create list'); ?>
