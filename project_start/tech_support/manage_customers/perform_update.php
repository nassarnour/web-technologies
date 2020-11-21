<?php 
require('../model/database.php');

    $customerID= filter_input(INPUT_POST, 'customer_id');
    $customerID = htmlspecialchars($customerID);

	//get user input
	$firstName= filter_input(INPUT_POST, 'up_first_name');
	$firstName = htmlspecialchars($firstName);
	
	$lastName = filter_input(INPUT_POST, 'up_last_name');
    $lastName = htmlspecialchars($lastName);
    
    $address = filter_input(INPUT_POST, 'up_address');
    $address = htmlspecialchars($address);

    $city = filter_input(INPUT_POST, 'up_city');
    $city = htmlspecialchars($city);

    $state = filter_input(INPUT_POST, 'up_state');
    $state = htmlspecialchars($state);

    $postalCode = filter_input(INPUT_POST, 'up_postalCode');
    $postalCode = htmlspecialchars($postalCode);

    $countryCode = filter_input(INPUT_POST, 'up_countryCode');
    $countryCode = htmlspecialchars($countryCode);
        
    $phone = filter_input(INPUT_POST, 'up_phone');
    $phone = htmlspecialchars($phone);
	
	$email = filter_input(INPUT_POST, 'up_email');
    $email = htmlspecialchars($email);

    $password = filter_input(INPUT_POST, 'up_pass');
    $password = htmlspecialchars($password);

    $queryUpdate = "UPDATE customers
    SET customerID=:customer_id,
        firstName=:up_first_name,
        lastName=:up_last_name,
        address=:up_address,
        city=:up_city,
        state=:up_state,
        postalCode=:up_postalCode,
        countryCode=:up_countryCode,
        phone=:up_phone,
        email=:up_email,
        password=:up_pass
    WHERE customerID=:customer_id";
$updateStatement = $db->prepare($queryUpdate);

$updateStatement->bindValue(':customer_id', $customerID);
$updateStatement->bindValue(':up_first_name', $firstName);
$updateStatement->bindValue(':up_last_name', $lastName);
$updateStatement->bindValue(':up_address', $address);
$updateStatement->bindValue(':up_city', $city);
$updateStatement->bindValue(':up_state', $state);

$updateStatement->bindValue(':up_postalCode', $postalCode);
$updateStatement->bindValue(':up_countryCode', $countryCode);
$updateStatement->bindValue(':up_phone', $phone);
$updateStatement->bindValue(':up_email', $email);
$updateStatement->bindValue(':up_pass', $password);

$updateStatement->execute();


    include('index.php');
?>


