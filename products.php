<link rel="stylesheet" href="view/stylesheet/style.css">
<body class="body">
<nav>
    <a href="index.html">Home</a>
    <a class="active" href="products.php">Product</a>
    <a href="categorys.php">Category</a>
    <a class="sign-in" href="login.php">Login</a>
</nav>

<h1>Products</h1>

<table class="products-categories-table" id="products-table">
    <tr class="products-row">
        <th class="products-categories-header">Sku</th>
        <th class="products-categories-header">Active</th>
        <th class="products-categories-header">Category_id</th>
        <th class="products-categories-header">Name</th>
        <th class="products-categories-header">Image</th>
        <th class="products-categories-header">Description</th>
        <th class="products-categories-header">Price</th>
        <th class="products-categories-header">Stock</th>
        <th class="products-categories-header">Delete/Edit</th>
    </tr>
</table>
<br>
<a href="new_product.php"><button class="create-new" id="new-product">Create a new Product</button></a>
<script src="controller/products.js"></script>
</body>