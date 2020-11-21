<?php include '../view/header.php';
require('../model/database.php');
?>

<main>
    <nav>
    <h1>Add Technician</h1>

    <form method="post" action="add_product.php">
			<label for="add_name">First Name :</label>
			<input type="text" id="add_name" name="add_name">
			<br>
			<label for="add_lastName">Last Name  </label>
			<input type="text" id="add_lastName" name="add_lastName">
			<br>
			<label for="add_email">Email</label>
			<input type="text" id="add_email" name="add_email">
            <br>
            <label for="add_phone">Phone</label>
            <input type="text" id="add_phone" name="add_phone">
            <br>
            <label for="add_password">Password</label>
            <input type="text" id="add_password" name="add_password">
            <br>
			<input type="submit" value="Add Technician">
		</form>
    <br>
    <a href="../manage_technician/index.php">View Technician List</a>
    <nav>
</main>