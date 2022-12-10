<?php

require_once '../config/db.php';

$id_azccolumn = $_POST['id_azccolumn'];
$id_buyern = $_POST['id_buyern'];
$id_fuel = $_POST['id_fuel'];
$id_employer = $_POST['id_employer'];
$id_provider = $_POST['id_provider'];
$user_id = $_POST['user_id'];
$table_name = $_POST['table_name'];
$name = $_POST['name'];
$auto = $_POST['auto'];
$capacity = $_POST['capacity'];
$fuel_type = $_POST['fuel_type'];
$fuel = $_POST['fuel'];
$price = $_POST['price'];
$type = $_POST['type'];
$date_of_bitrh = $_POST['date_of_bitrh'];
$status = $_POST['status'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$DOB = $_POST['DOB'];


switch ($table_name) {
    case 'azccolumn':
        mysqli_query($connect_maksim, "UPDATE `azccolumn` SET `name` = '$name' WHERE `azccolumn`.`id_azccolumn` = '$id_azccolumn'");
        break;
    case 'buyern':
        mysqli_query($connect_maksim, "UPDATE `buyern` SET `auto` = '$auto',`capacity` = '$capacity',`fuel_type` = '$fuel_type',`id_azccolumn` = '$id_azccolumn' WHERE `buyern`.`id_buyern` = '$id_buyern'");
        break;
    case 'fuel':
        mysqli_query($connect_maksim, "UPDATE `fuel` SET `price` = '$price',`type` = '$type' WHERE `fuel`.`id_fuel` = '$id_fuel'");
        break;
    case 'employer':
        mysqli_query($connect_maksim, "UPDATE `employer` SET `name` = '$name',`date_of_bitrh` = '$date_of_bitrh',`status` = '$status' WHERE `employer`.`id_employer` = '$id_employer'");
        break;
    case 'provider':
        mysqli_query($connect_maksim, "UPDATE `provider` SET `name` = '$name', `fuel` = '$fuel' WHERE `provider`.`id_provider` = '$id_provider'");
        break;
    case 'users':
        mysqli_query($connect_maksim, "UPDATE `users` SET `login` = '$login',`email` = '$email',`password` = '$password',`role` = '$role',`DOB` = '$DOB' WHERE `users`.`user_id` = '$user_id'");
        break;
  
}

header('Location: ../admin.php');
?>