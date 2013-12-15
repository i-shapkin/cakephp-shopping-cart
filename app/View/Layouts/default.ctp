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
<div id="head-line">
    <div class="reg">
        <a href="/registration">Регистрация</a>
    </div>
    <div class="head-body">
        <div class="sign">
            <a href="/login"><img src="/img/login.png" />Вход</a>
        </div>
        <strong>Зарегистрируйтесь,</strong> чтобы получить <strong>5% скидку</strong>
        <img class="this" src="/img/this.png" />
    </div>
</div>
<div id="wrap">
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header row-fluid">
            <div class="span3">
                <a id="logo" title="logo" href="/"></a>
            </div>
            <div class="span4">
                <div id="formsearch">
                    <span class="search-icon"></span>
                    <?php echo $this->Form->create('Product', array('type' => 'GET', 'url' => array('controller' => 'products', 'action' => 'search'))); ?>
                    <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'class' => 'input-sm', 'autocomplete' => 'off')); ?>
                    <?php echo $this->Form->button('Найти', array('div' => false, 'class' => 'search-btn')); ?>
                            <span id="cartbutton" style="display:none;">
                            <?php echo $this->Html->link('Shopping Cart', array('controller' => 'shop', 'action' => 'cart'), array('class' => 'btn btn-sm btn-success')); ?>
                            </span>
                    <?php echo $this->Form->end(); ?>
                </div>
             </div>
            <div class="span3">
                <div class="phones">
                    <p><img src="/img/phone-call.png"/> 8 (800) <b>2000 500</b></p>
                    <p><img src="/img/phone-call.png"/> 8 (800) <b>2000 600</b></p>
                </div>
            </div>
            <div class="span2">
                <div class="row-fluid">
                    <a href="/shop/cart" class="cart span11">
                        <h5><img src="/img/cart.png"/>Ваша корзина</h5>
                        <?= $cartCount; ?> товаров
                    </a>
                    <div class="span1"></div>
                </div>
            </div>

        </div>
        <div id="menu" class="row-fluid">
            <a class="span3" href="/catalog">Каталог товаров</a>
            <a class="span3" href="/sale">Акции и скидки</a>
            <a class="span3" href="/payments">Доставка и оплата</a>
            <a class="span2" href="/contacts">Контакты</a>
            <a class="span1" href="/wholesale">Опт</a>
        </div>
        <div id="page-content" class="row-fluid">
            <? if($this->params['controller'] == 'pages') : ?>
                <div class="span3 catalog">
                    <h3>Каталог</h3>
                    <?=$this->Tree->generate($categories, array('element' => 'categories/tree_item', 'class' => 'categorytree', 'id' => 'categorytree')); ?>
                    <h4><img src="/img/big-cart.png" />Доставка</h4>
                    <p>Интернет-магазин Ko4ka.com осуществляет доставку курьером по Москве, Санкт-Петербургу и всем городам России.Товар также можно получить самостоятельно в одном из 305 пунктов выдачи заказов.</p>
                    <h4><img src="/img/money.png" />Оплата</h4>
                    <p>Оплата заказа осуществляется наличными или банковской картой. Оплата картой на сайте производится только после подтверждения заказа оператором интернет-магазина. При оплате картой на сайте указанный срок доставки считается со дня поступления оплаты.</p>
                </div>
                <div class="span9">
                    <?= $this->fetch('content'); ?>
                </div>
            <? else: ?>
                <div class="span12">
                    <?= $this->fetch('content'); ?>
                </div>
            <? endif; ?>

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
