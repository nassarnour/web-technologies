<?php include '../view/header.php';
require('../model/database.php');

    $queryTechnicians = "SELECT * FROM technicians" ;
    $execStatement = $db->prepare($queryTechnicians); //db object in database.php
    $execStatement->execute(); //executes query, execstatment has all the data

    $techniciansList = $execStatement->fetchAll(); // returns the rows. an array
	$execStatement->closeCursor(); // done moving through db, have it pulled into memory; we are persisiting data

?>

<main>
    <nav>
    <h1>Technician List</h1>
    <table>
    <tr>
      <td> <strong>First Name </strong></td>
      <td><strong>Last Name</strong></td>
      <td><strong>Email</strong></td>
      <td><strong>Phone</strong></td>
      <td><strong>Password</strong></td>

    </tr>
        <?php
        foreach($techniciansList as $techList) : ?>
            <tr>
                <td><?php echo $techList['techID'];?> </td>
                <td><?php echo $techList['firstName'];?> </td>
                <td><?php echo $techList['lastName'];?> </td>
                <td><?php echo $techList['email'];?> </td>
                <td><?php echo $techList['phone'];?> </td>
                <td><?php echo $techList['password'];?> </td>

                <td>
                    <!-- <form id="mp_deleteForm" action="mp_delete.php" method="post" >
                        <input type="button" value="Delete" id=mp_deleteBtn>
                    </form> -->
                    <!-- <button type="submit" method='mp_delete.php'>Delete</button> -->
                    <form action="mt_delete.php" method="post">
                     <input type="hidden" name="tech_id"
                        value="<?php echo $techList['techID']; ?>">
                     <input type="submit" value="Delete">
                    </form></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="../add_technicians/index.php">Add Technician</a>
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
