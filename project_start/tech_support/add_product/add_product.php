<?php
require('../model/database.php');


	//get user input
	$productCode = filter_input(INPUT_POST, 'add_code');
	$productCode = htmlspecialchars($productCode);
	
	$name = filter_input(INPUT_POST, 'add_name');
	$name = htmlspecialchars($name);
	
	$version = filter_input(INPUT_POST, 'add_version');
    $version = htmlspecialchars($version);
    
    $releaseDate = filter_input(INPUT_POST, 'add_releaseDate');
    $releaseDate = htmlspecialchars($releaseDate);
    
    $queryInsert = "INSERT INTO products 
                                        (productCode, name, version, releaseDate)
                    VALUES
                                        (:add_code, :add_name, :add_version, :add_releaseDate)";
    $insertStatement = $db->prepare($queryInsert);

    $insertStatement->bindValue(':add_code', $productCode);
    $insertStatement->bindValue(':add_name', $name);
    $insertStatement->bindValue(':add_version', $version);
    $insertStatement->bindValue(':add_releaseDate', $releaseDate);

    $insertStatement->execute();

    include('index.php');
?>


