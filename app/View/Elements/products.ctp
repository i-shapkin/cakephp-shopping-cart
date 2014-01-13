<div class="element-products">
    <?php
    $i = 0;
    foreach ($products as $product):
        if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n"; $i = 0;}
        $i++;
    ?>
    <div class="span3">
        <div class="element">
            <?php echo $this->Html->image('/images/small/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'width' => 150, 'height' => 150, 'class' => 'image')); ?>
            <div class="pname"><?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug'])); ?></div>
            <div class="pcategory"><?=$product['Category']['name']?></div>
            <div class="pprice"><strong><?php echo $product['Product']['price']; ?> руб.</strong></div>
        </div>
    </div>
    <?php
    if (($i % 4) == 0) { echo "\n</div>\n\n";}
    endforeach;
    if(count($products) % 4 != 0) {
        echo '</div>';
    }
    ?>

</div>
