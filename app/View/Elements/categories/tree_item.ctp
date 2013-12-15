<?
    $class = empty($data['Category']['parent_id']) ? 'parent' : 'child';
?>
<?php echo $this->Html->link($data['Category']['name'], array('controller' => 'categories', 'action' => 'view/'.$data['Category']['slug']), array('class'=> $class)); ?>
<? if($class == 'parent') : ?>
    <span class="close-open"></span>
<? endif; ?>