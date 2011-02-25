<?php 
	$javascript->link('scriptaculous/prototype', false);
	$javascript->link('scriptaculous/scriptaculous', false);
	$javascript->link('scriptaculous/effects', false);
	$javascript->link('scriptaculous/controls', false);
?>

<h2>Vocabulary lists</h2>
<div style="float: left;">
<p>Search by title&nbsp;&nbsp;</p>
</div>
<div style="float: left;">
<?php echo $ajax->autoComplete('VocabularyList.name', '/vocabulary_lists/autoComplete', array('size' => 58))?>
</div>
<div class="clr"></div>

<br/>
<div style="float: right;">
<?php echo $html->link('Add a new list', array('controller' => 'vocabulary_lists', 'action' => 'add'), array('class' => 'add')); ?>
</div>
<div style="float: left;">
	<p><small>
	Sort: 
	<?= $html->link('alpha', '/vocabulary_lists/index/alpha'); ?>
	| <?= $html->link('added', '/vocabulary_lists/index/added'); ?>
	</small></p>
</div>
<div class="clr"></div>
<hr/>
<table>
	<tr><th>Title</th><th style="width:60px;">Languages</th></tr>
	<?php $odd = true; ?>
  <?php foreach ($this->data as $data): ?>
	<tr class="<?php echo $application->odd($odd); ?>">
		<td>
			<?php echo $html->link(ucfirst($data['VocabularyList']['name']), array('controller' => 'vocabulary_lists', 'action' => 'view', $data['VocabularyList']['id']), array('style' => 'display: block;')); ?>
		</td>
		<td>
			<?php echo $data['InputLanguage']['country_code'] . " - " . $data['OutputLanguage']['country_code']; ?>
		</td>
	<?php endforeach ?>
</table>
