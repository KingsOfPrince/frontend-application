<link rel="stylesheet" href="view/stylesheet/style.css">
<body class="body">
<nav>
    <a href="index.html">Home</a>
    <a href="products.php">Product</a>
    <a class="active" href="categorys.php">Category</a>
    <a class="sign-in" href="login.php">Login</a>
</nav>w
<h1>Categories</h1>
<table class="products-categorys-table" id="categorys-table">
    <tr>
        <th class="products-categories-header">Name</th>
        <th class="products-categories-header">Active</th>
        <th class="products-categories-header">Delete/Edit</th>
    </tr>
</table>
<br>
<a href="new_category.php"><button class="create-new" id="new-category">Create a new Category</button></a>
<script src="controller/categorys.js"></script>
</body>