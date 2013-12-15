<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $__pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array('main', 'footer', 'bootstrap'));
    echo $this->Html->script(array('jquery-1.10.2.min', 'bootstrap/js/bootstrap.min', 'js'));
    ?>
</head>
<body>
<div id="head-line"></div>
<div id="wrap">
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header row-fluid">
            <div class="span3">
                <a id="logo" title="logo" href="/"></a>
            </div>
            <div class="span9">
                <div id="formsearch">
                    <?php echo $this->Form->create('Product', array('type' => 'GET', 'url' => array('controller' => 'products', 'action' => 'search'))); ?>
                    <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'class' => 'input-sm', 'autocomplete' => 'off')); ?>
                    <?php echo $this->Form->button('Найти', array('div' => false, 'class' => 'search-btn')); ?>
                            <span id="cartbutton" style="display:none;">
                            <?php echo $this->Html->link('Shopping Cart', array('controller' => 'shop', 'action' => 'cart'), array('class' => 'btn btn-sm btn-success')); ?>
                            </span>
                    <?php echo $this->Form->end(); ?>
                </div>
             </div>
        </div>
<!--        --><?/*
            pr($this->request);
        */?>
        <div id="menu" class="row-fluid">
            <a class="span3" href="/catalog">Каталог товаров</a>
            <a class="span3" href="/sale">Акции и скидки</a>
            <a class="span3" href="/payments">Доставка и оплата</a>
            <a class="span2" href="/contacts">Контакты</a>
            <a class="span1" href="/wholesale">Опт</a>
        </div>
        <div class="row-fluid page-content">
            <? if($this->params['controller'] == 'pages' || $this->params['controller'] == 'products') : ?>
                <div class="span3 catalog">
                    <h3>Каталог</h3>
                    <?=$this->Tree->generate($categories, array('element' => 'categories/tree_item', 'class' => 'categorytree', 'id' => 'categorytree')); ?>
                </div>
            <? endif; ?>
            <div class="span9">
                <?= $this->fetch('content'); ?>
            </div>
        </div>
    </div>
    <div id="push"></div>
</div>
<div id="footer">
    <div class="container">
        <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
    </div>
</div>
    <pre>
	    <?= $this->element('sql_dump'); ?>
	</pre>
</body>
</html>
