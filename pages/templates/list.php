<!-- Получаем инклуд что бы использовать функцию в которая возвращает запрос из базы -->
<?php include 'DB/readBaseProducts.php' ?>

<ul class="nav flex-column ">
    <!-- Проходим циклом по результату запроса из базы путем вызова функции -->
    <?php foreach (readBaseProducts() as $item): ?>
        <br>
        <li class="nav-item mb-3 text-start border border-info border-2 rounded p-2" >
            ID:
            <?= $item['id'] ?>
            <br>
            Product Name:
            <?= $item['product_name'] ?>
            <br>
            Quantity:
            <?= $item['quantity'] ?>
            <br>
            Description:
            <?= $item['description'] ?>
            <br>
        </li>
    <?php endforeach; ?>
</ul>