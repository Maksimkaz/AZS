<?php
require_once '../config/db.php';

$id_azccolumn = $_GET['id'];
$id_buyern = $_GET['id'];
$id_employer = $_GET['id'];
$id_fuel = $_GET['id'];
$id_provider = $_GET['id'];
$user_id = $_GET['id'];
$table_name = $_GET['table_name'];


switch ($table_name) {
    case 'azccolumn':
        mysqli_query($connect_maksim, "DELETE FROM `$table_name` WHERE `$table_name`.`id_azccolumn` = '$id_azccolumn'");
        header('Location: ../admin.php');
        break;
    case 'buyern':
        mysqli_query($connect_maksim, "DELETE FROM `$table_name` WHERE `$table_name`.`id_buyern` = '$id_buyern'");
        header('Location: ../admin.php');
        break;
    case 'employer':
        mysqli_query($connect_maksim, "DELETE FROM `$table_name` WHERE `$table_name`.`id_employer` = '$id_employer'");
        header('Location: ../admin.php');
        break;
    case 'fuel':
        mysqli_query($connect_maksim, "DELETE FROM `$table_name` WHERE `$table_name`.`id_fuel` = '$id_fuel'");
        header('Location: ../admin.php');
        break;
    case 'provider':
        mysqli_query($connect_maksim, "DELETE FROM `$table_name` WHERE `$table_name`.`id_provider` = '$id_provider'");
        header('Location: ../admin.php');
        break;
    case 'users':
        mysqli_query($connect_maksim, "DELETE FROM `$table_name` WHERE `$table_name`.`user_id` = '$user_id'");
        header('Location: ../admin.php');
        break;
  
}


?>