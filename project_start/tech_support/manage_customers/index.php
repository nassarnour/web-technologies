<?php include '../view/header.php';
require('../model/database.php');
// require('../model/product_db.php');

    $queryCustomers = "SELECT * FROM customers" ;
    $execStatement = $db->prepare($queryCustomers); //db object in database.php
    $execStatement->execute(); //executes query, execstatment has all the data

    $customersList = $execStatement->fetchAll(); // returns the rows. an array
    $execStatement->closeCursor(); // done moving through db, have it pulled into memory; we are persisiting data
    

?>

<main>
    <nav>
    <h2>Customer Search</h2>
    <form method="post" action="search.php">
			<label for="search_lastname">Last Name: </label>
            <input type="text" id="search_lastname" name="search_lastname">
            <input type="submit" value="Search">
            <br>

            
</form>
<h2>Results</h2>

    <table>
    <tr>
      <td> <strong>Name </strong></td>
      <td><strong>Email</strong></td>
      <td><strong>City</strong></td>

    </tr>
        <?php
        foreach($customersList as $custList) : ?>
            <tr>
                <td><?php echo $custList['firstName'] . " " . $custList['lastName'];?> </td>
                <td><?php echo $custList['email'];?> </td>
                <td><?php echo $custList['city'];?> </td>
                <td>
                    <!-- <form id="mp_deleteForm" action="mp_delete.php" method="post" >
                        <input type="button" value="Delete" id=mp_deleteBtn>
                    </form> -->
                    <!-- <button type="submit" method='mp_delete.php'>Delete</button> -->
                    <form action="customer_info.php" method="post">
                     <input type="hidden" name="customer_id"
                        value="<?php echo $custList['customerID']; ?>">
                     <input type="submit" value="Select">
                    </form>
                    
                </td>
                
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="../add_product/index.php">Add Product</a>
    <nav>
</main>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Products</title>
</head>
<body>
    <h1>Product List</h1>
    <table>

    </table>

    <a href="../add_product/add_product.php">Add Product</a>
</body>
</html> -->

<?php include '../view/footer.php'; ?>
