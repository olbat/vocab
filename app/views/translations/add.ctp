<?php 
	$javascript->link('http://www.google.com/jsapi', false); 
	$javascript->link('virtual_keyboard', false);
?>
<div style="float: right;">
	<p><small><i>Note: you can add multiple definitions using "<b>;</b>"</i></small></p>
</div>
<div style="float: left;">
	<h2>Add a new translation to <i><?= $vocabulary_list['VocabularyList']['name']; ?></i></h2>
</div>
<div class="clr"></div>

<?php echo $form->create('Translation', array('url' => '/translations/add/' . $vocabulary_list['VocabularyList']['id'])); ?>

	<?php echo $form->input('Translation.base', array('id' => 'vkeyboard_' . $vocabulary_list['InputLanguage']['country_code'], 'label' => 'Base<small>(s)</small>', 'size' => '32')); ?>
	<?php echo $form->input('Translation.translation', array('id' => 'vkeyboard_' . $vocabulary_list['OutputLanguage']['country_code'], 'label' => 'Translation<small>(s)</small>', 'size' => '72')); ?>
<?php echo $form->input('Translation.vocabulary_list_id', array('type'=>'hidden', 'value' => $vocabulary_list['VocabularyList']['id'])); ?>
<br/>
<?php echo $form->end('Add in list'); ?>
<br/>
<br/>

<h2><?= $vocabulary_list['VocabularyList']['name']; ?></h2>
<hr/>
<table>
	<tr><th></th><th></th></tr>
	<?php $odd = true; ?>
  <?php foreach ($vocabulary_list['Translation'] as $translation): ?>

	<tr class="<?php echo $application->odd($odd); ?>">
		<td><?php echo $translation['base']; ?></td>
		<td><?php echo $translation['translation']; ?></td>
	</tr>
		
	<?php endforeach ?>
</table>
<?php echo $form->button('Done editing this list', array('onclick' => "location.href='". $this->webroot . "vocabulary_lists/view/" . $vocabulary_list['VocabularyList']['id'] ."'")); ?>