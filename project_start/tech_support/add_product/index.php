<?php include '../view/header.php';
require('../model/database.php');


?>

<main>
    <nav>
    <h1>Add Product</h1>

    <form method="post" action="add_product.php">
			<label for="add_code">Code :</label>
			<input type="text" id="add_code" name="add_code">
			<br>
			<label for="add_name">Name :  </label>
			<input type="text" id="add_name" name="add_name">
			<br>
			<label for="add_version">Version :</label>
			<input type="text" id="add_version" name="add_version">
            <br>
            <label for="add_releaseDate">Release Date :</label>
            <input type="text" id="add_releaseDate" name="add_releaseDate">
            <br>
			<input type="submit" value="Add Product">
		</form>

    
    
    <br>
    <a href="../manage_products/index.php">View Product List</a>
    <nav>
</main>