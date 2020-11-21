<?php
require_once('../model/database.php');

$tech_id = filter_input(INPUT_POST, 'tech_id');



    $query = 'DELETE FROM technicians
    WHERE techid= :tech_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':tech_id', $tech_id);
    $success = $statement-> execute();
    $statement-> closeCursor();

include('index.php');
?>
