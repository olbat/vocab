<ul>
 <?php foreach($vocabulary_lists as $vocabulary_list): ?>
     <li class="autocomplete"><?php echo $html->link(ucfirst($vocabulary_list['VocabularyList']['name']), array('controller' => 'vocabulary_lists', 'action' => 'view', $vocabulary_list['VocabularyList']['id']), array('class' => 'autocomplete', 'style' => 'display: block;')); ?></li>
 <?php endforeach; ?>
</ul>