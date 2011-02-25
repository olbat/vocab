<h2>Training exercises</h2>
<?php echo $form->button('List of proposition', array('onclick' => "location.href='". $this->webroot . '/proposition_trainings/index/' . $vocabulary_list_id ."'")); ?>
<?php echo $form->button('Exact match', array('onclick' => "location.href='". $this->webroot . '/exact_trainings/index/' . $vocabulary_list_id ."'")); ?>
<?php echo $form->button('List of proposition', array('onclick' => "location.href='#'")); ?>