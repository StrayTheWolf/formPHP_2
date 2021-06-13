<h1>Products Add Page</h1>

<?php
include 'menu.php';
?>

<form action="/DB/writeProduct.php" method="post">
    <div class="mb-3">
        <label>
            Product:
            <input type="text" name="product_name" class="form-control">
            <div class="form-text  mb-3">Add product name</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Quantity:
            <input type="number" name="quantity" class="form-control">
            <div class="form-text  mb-3">Enter quantity</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Description:
            <input type="text" name="description" class="form-control">
            <div class="form-text  mb-3">Add product description</div>
        </label>
    </div>

    <button class="btn btn-outline-primary mb-3">Submit</button>
</form>