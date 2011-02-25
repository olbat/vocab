<?php echo $form->create('VocabularyList', array('action' => 'edit')); ?>
<div style="float:left">
	<?php echo $form->input('VocabularyList.name', array('label' => 'Title', 'size' => '48')); ?>
	<?php echo $form->input('VocabularyList.description', array('rows' => '3', 'cols' => '24')); ?>
</div>
<div style="width:30px; float:left;">&nbsp;</div>
<div style="float:left">
	<?php 
		if (empty($this->data['Translation']))
		{
			echo $form->input('VocabularyList.input_language_id', array('type' => 'select', 'options' => $languages));
			echo $form->input('VocabularyList.output_language_id', array('type' => 'select', 'options' => $languages));
		}
		else
		{
			echo '<p>Languages: <i>' . $this->data['InputLanguage']['name'] . ' - ' . $this->data['OutputLanguage']['name'] . '</i></p>';
		}
	?>
</div>
<div class="clr"></div>
<br/>
<?php echo $form->input('VocabularyList.id', array('type'=>'hidden', 'value' => $this->data['VocabularyList']['id'])); ?>
<?php echo $form->end('Modify list'); ?>