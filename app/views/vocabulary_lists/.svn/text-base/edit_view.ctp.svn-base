<div style="float:right;">
<p><i><?= $this->data['InputLanguage']['name'] . " - " . $this->data['OutputLanguage']['name']; ?></i></p>
</div>
<div style="float:left;">
<h2>Modify <i><?= ucfirst($this->data['VocabularyList']['name']); ?></i></h2>
</div>
<div class="clr"></div>

  <?php echo $this->data['VocabularyList']['description']; ?>
<br/>
<?php echo $html->link('edit list settings', array('controller' => 'vocabulary_lists', 'action' => 'edit', $this->data['VocabularyList']['id']), array('class' => 'edit')); ?>
<br/>

<div style="float: right;">
<?php echo $html->link('Add a new translation', array('controller' => 'translations', 'action' => 'add', $this->data['VocabularyList']['id']), array('class' => 'add')); ?>
</div>
<div class="clr"></div>
<hr/>
<table>
	<tr><th></th><th></th><th style="width: 10px;"></th></tr>
	<?php $odd = true; ?>
  	<?php foreach ($this->data['Translation'] as $translation): ?>

	<tr class="<?php echo $application->odd($odd); ?>">
		<td><?php echo $html->link($translation['base'], array('controller' => 'translations', 'action' => 'edit', $translation['id']), array('style' => 'display: block;')); ?></td>
		<td><?php echo $html->link($translation['translation'], array('controller' => 'translations', 'action' => 'edit', $translation['id']), array('style' => 'display: block;')); ?></td>
		<td><?php echo $html->link('', array('controller' => 'translations', 'action' => 'edit', $translation['id']), array('class' => 'edit')); ?></td>
	</tr>
		
	<?php endforeach ?>
</table>
<div style="float: right;">
<?php echo $html->link('Add a new translation', array('controller' => 'translations', 'action' => 'add', $this->data['VocabularyList']['id']), array('class' => 'add')); ?>
</div>
<div class="clr"></div>
<?php echo $form->button('Done editing this list', array('onclick' => "location.href='". $this->webroot . "vocabulary_lists/view/" . $this->data['VocabularyList']['id'] ."'")); ?>