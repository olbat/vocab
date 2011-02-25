<?php
	$str = '<p style="text-align: center; margin-top:0px;"><small>' . $html->link('Browse lists', '/vocabulary_lists', array('style' =>  'color: white;')) . '</small></p>';
	$this->set('header_links', $str);
?>

<h2 style="display: inline;"><?php echo ucfirst($this->data['VocabularyList']['name']); ?></h2>
<p style="display: inline;"><small>(<i><?= $this->data['InputLanguage']['name'] . " - " . $this->data['OutputLanguage']['name']; ?></i>)</small></p>


  <?php echo $this->data['VocabularyList']['description']; ?>

<?php //echo $form->button('Start to learn it !', array('onclick' => "location.href='". $this->webroot . '/proposition_trainings/index/' . $this->data['VocabularyList']['id'] ."'")); ?>
<h3 style="text-align:center;"><?php echo $html->link('Start to learn it !', '/proposition_trainings/index/' . $this->data['VocabularyList']['id']); ?></h3>
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