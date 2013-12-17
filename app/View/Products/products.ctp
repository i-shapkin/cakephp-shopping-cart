<?php $this->Html->addCrumb('Products'); ?>

<h1>Каталог товаров</h1>
<?php echo $this->element('products'); ?>
<h6>Выводить по:</h6>
<a href="/catalog/10">10</a>
<a href="/catalog/20">20</a>
<a href="/catalog/50">50</a>
<a href="/catalog/100">100</a>
<?php echo $this->element('pagination'); ?>