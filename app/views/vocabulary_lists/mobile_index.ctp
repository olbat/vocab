<h2>Select a list</h2>
<table>
	<tr><th>Title</th><th style="width: 60px;">Languages</th></tr>
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