<?php include '../view/header.php';
require('../model/database.php');


	//get user input
	$firstName= filter_input(INPUT_POST, 'add_name');
	$firstName = htmlspecialchars($firstName);
	
	$lastName = filter_input(INPUT_POST, 'add_lastName');
	$lastName = htmlspecialchars($lastName);
	
	$email = filter_input(INPUT_POST, 'add_email');
    $email = htmlspecialchars($email);
    
    $phone = filter_input(INPUT_POST, 'add_phone');
    $phone = htmlspecialchars($phone);

    $password = filter_input(INPUT_POST, 'add_password');
    $password = htmlspecialchars($password);
    
    $queryInsert = "INSERT INTO technicians 
                                        (firstName, lastName, email, phone, password)
                    VALUES
                                        (:add_name, :add_lastName, :add_email, :add_phone, :add_password)";
    $insertStatement = $db->prepare($queryInsert);

    $insertStatement->bindValue(':add_name', $firstName);
    $insertStatement->bindValue(':add_lastName', $lastName);
    $insertStatement->bindValue(':add_email', $email);
    $insertStatement->bindValue(':add_phone', $phone);
    $insertStatement->bindValue(':add_password', $password);


    $insertStatement->execute();

    include('index.php');
?>


