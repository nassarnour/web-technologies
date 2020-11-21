<?php include '../view/header.php';
require('../model/database.php');

$customerID= filter_input(INPUT_POST, 'customer_id');
$customerID = htmlspecialchars($customerID);


$queryCustomers = 'SELECT * FROM customers
WHERE customerID= :customer_id';

$execStatement = $db->prepare($queryCustomers); //db object in database.php
$execStatement->bindValue(':customer_id', $customerID);
$execStatement->execute(); //executes query, execstatment has all the data

$customerInfo = $execStatement->fetchAll(); // returns the rows. an array
$execStatement->closeCursor(); // done moving through db, have it pulled into memory; we are persisiting data


?>

<main>
    <nav>
    <h1>Add Product</h1>

<?php 
    foreach($customerInfo as $cust)  : ?>

        <form method="post" action="perform_update.php">
			<label for="up_first_name">First Name : </label>
			<input type="text" 
                id="up_first_name" 
                name="up_first_name" 
                value="<?php echo $cust['firstName'];?>">
			<br>

			<label for="up_last_name">Last Name :  </label>
			<input type="text" 
                id="up_last_name" 
                name="up_last_name"
                value="<?php echo $cust['lastName'];?>">
			<br>

			<label for="up_address">Address : </label>
			<input type="text" 
                id="up_address" 
                name="up_address"
                value="<?php echo $cust['address'];?>">
            <br>

            <label for="up_city">City : </label>
            <input type="text" 
                id="up_city" 
                name="up_city"
                value="<?php echo $cust['city'];?>">
            <br>

            <label for="up_state">State : </label>
            <input type="text" 
                    id="up_state" 
                    name="up_state"
                    value="<?php echo $cust['state'];?>">
            <br>

            <label for="up_postalCode">Postal Code : </label>
            <input type="text" 
                id="up_postalCode" 
                name="up_postalCode"
                value="<?php echo $cust['postalCode'];?>">
            <br>
            
            <label for="up_countryCode">Country Code : </label>
            <input type="text" 
                id="up_countryCode" 
                name="up_countryCode"
                value="<?php echo $cust['countryCode'];?>">
            <br>

            <label for="up_phone">Phone : </label>
            <input type="text" 
                id="up_phone" 
                name="up_phone"
                value="<?php echo $cust['phone'];?>">
            <br>

            <label for="up_email">Email : </label>
            <input type="text" 
                id="up_email" 
                name="up_email"
                value="<?php echo $cust['email'];?>">
            <br>

            <label for="up_pass">Password : </label>
            <input type="text" 
                id="up_pass" 
                name="up_pass"
                value="<?php echo $cust['password'];?>">
            <br>


                     <input type="hidden" name="customer_id"
                        value="<?php echo $cust['customerID']; ?>">

			<input type="submit" value="Update Customer">
		</form>
        <?php endforeach; ?>

    
    <br>
    <a href="../manage_products/index.php">View Product List</a>
    <nav>
</main>