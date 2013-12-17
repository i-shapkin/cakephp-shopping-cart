
<div class="paging">

	<?php echo $this->Paginator->prev('← Сюда', array(), null, array('class' => 'prev disabled')); ?>

	<?php echo $this->Paginator->numbers(array('separator' => ' ')); ?>

	<?php echo $this->Paginator->next('Туда →', array(), null, array('class' => 'next disabled')); ?>



</div>

