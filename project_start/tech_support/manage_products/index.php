<?php include '../view/header.php';
require('../model/database.php');
// require('../model/product_db.php');

    $queryProducts = "SELECT * FROM products" ;
    $execStatement = $db->prepare($queryProducts); //db object in database.php
    $execStatement->execute(); //executes query, execstatment has all the data

    $productsList = $execStatement->fetchAll(); // returns the rows. an array
	$execStatement->closeCursor(); // done moving through db, have it pulled into memory; we are persisiting data

?>

<main>
    <nav>
    <h1>Product List</h1>
    <table>
    <tr>
      <td> <strong> Code </strong></td>
      <td><strong>Name</strong></td>
      <td><strong>Version</strong></td>
      <td><strong>Release Date</strong></td>
    </tr>
        <?php
        foreach($productsList as $prodList) : ?>
            <tr>
                <td><?php echo $prodList['productCode'];?> </td>
                <td><?php echo $prodList['name'];?> </td>
                <td><?php echo $prodList['version'];?> </td>
                <td><?php echo $prodList['releaseDate'];?> </td>
                <td>
                    <!-- <form id="mp_deleteForm" action="mp_delete.php" method="post" >
                        <input type="button" value="Delete" id=mp_deleteBtn>
                    </form> -->
                    <!-- <button type="submit" method='mp_delete.php'>Delete</button> -->
                    <form action="mp_delete.php" method="post">
                     <input type="hidden" name="product_code"
                        value="<?php echo $prodList['productCode']; ?>">
                     <input type="submit" value="Delete">
                    </form></td>
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
