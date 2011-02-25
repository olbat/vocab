<div style="float:right;">
<p><i><?= $this->data['InputLanguage']['name'] . " - " . $this->data['OutputLanguage']['name']; ?></i></p>
</div>
<div style="float:left;">
<h2><?php echo ucfirst($this->data['VocabularyList']['name']); ?></h2>
</div>
<div class="clr"></div>

  <?php echo $this->data['VocabularyList']['description']; ?>

<br/>
<div class="boxarea">
<?php echo $html->link('Start to learn it !', '/trainings/index/' . $this->data['VocabularyList']['id'], array('class' => 'boxarea')); ?>
</div>
<br/>
<div style="float: right;">
<?php echo $html->link('Edit', array('controller' => 'vocabulary_lists', 'action' => 'edit_view', $this->data['VocabularyList']['id']), array('class' => 'edit')); ?>
</div>
<div style="float: left;">
	<p><small>
	Sort: 
	<?= $html->link('alpha', '/vocabulary_lists/view/' . $this->data['VocabularyList']['id'] . '/alpha'); ?>
	| <?= $html->link('added', '/vocabulary_lists/view/' . $this->data['VocabularyList']['id'] . '/added'); ?>
	</small></p>
</div>
<div class="clr"></div>
<hr/>
<table>
	<tr><th></th><th></th><th style="width: 10px;"></th></tr>
	<?php $odd = true; $i = 1; ?>
  	<?php foreach ($list as $translation): ?>
	<tr class="<?php echo $application->odd($odd); ?>">
		<td><?php echo ucfirst(strtolower($translation['Translation']['base'])); ?></td>
		<td><?php echo ucfirst(strtolower($translation['Translation']['translation'])); ?></td>
		<td><?= $i++; ?></td>
	</tr>
		
	<?php endforeach ?>
</table>
<div style="float: right;">
<?php echo $html->link('Edit', array('controller' => 'vocabulary_lists', 'action' => 'edit_view', $this->data['VocabularyList']['id']), array('class' => 'edit')); ?>
</div>
<div class="clr"></div>