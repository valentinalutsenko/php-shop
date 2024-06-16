<?php
include __DIR__ . DIRECTORY_SEPARATOR .'../Layouts/header.php'
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Notice</th>
        <th scope="col">Content</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
        <th scope="row"><?php echo $product['id']; ?></th>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['url'];?></td>
        <td><?php echo $product['price'];?></td>
        <td><?php echo $product['notice'];?></td>
        <td><?php echo $product['content'];?></td>
        <td>
            <a type="button" class="btn btn-secondary"><?php echo $product['visible'] ? 'Подробнее' : 'Отсутсвует'?></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
