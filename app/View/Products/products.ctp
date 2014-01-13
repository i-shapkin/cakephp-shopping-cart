<div class="page catalog">
    <h3>Каталог товаров</h3>
    <?php echo $this->element('products'); ?>
    <div class="paginate">
        <h4>Выводить по:
            <a href="/catalog/10">10</a>
            <a href="/catalog/20">20</a>
            <a href="/catalog/50">50</a>
            <a href="/catalog/100">100</a>
        </h4>
        <h4 class="none-border"><?php echo $this->element('pagination'); ?></h4>
    </div>
</div>