<?php
include __DIR__.DIRECTORY_SEPARATOR.'../Layouts/header.php'
?>
<div class="card" style="width: 18rem;">
    <img src=<?php $product['url'] ?> class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $product['name']?></h5>
        <p class="card-text"><?php echo $product['content']?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Артикул: <?php echo $product['articul']?> </li>
        <li class="list-group-item">Цена со скидкой: <?php echo $product['price']?></li>
        <li class="list-group-item">Старая цена: <?php echo $product['price_old']?></li>
    </ul>
    <div class="card-body">
        <?php echo $product['visible'] ? '<a href="#" class="card-link">Заказать</a> ' : '<a href="#" class="card-link">Товар отсутствует</a> ' ?>
        <a href="#" class="card-link">Избранное</a>
    </div>
</div>