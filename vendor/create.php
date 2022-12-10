<?php
require_once '../config/db.php';

$table_name = $_POST['table_name'];
$name = $_POST['name'];
$auto = $_POST['auto'];
$capacity = $_POST['capacity'];
$fuel_type = $_POST['fuel_type'];
$id_azccolumn = $_POST['id_azccolumn'];
$price = $_POST['price'];
$type = $_POST['type'];
$date_of_bitrh = $_POST['date_of_bitrh'];
$status = $_POST['status'];
$name = $_POST['name'];
$fuel = $_POST['fuel'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$DOB = $_POST['DOB'];


switch ($table_name) {
    case 'azccolumn':
        mysqli_query($connect_maksim, "INSERT INTO `azccolumn` (`id_azccolumn`, `name`) VALUES (NULL, '$name')");
        header('Location: ../admin.php');
        break;
    case 'buyern':
        mysqli_query($connect_maksim, "INSERT INTO `buyern` (`id_buyern`, `auto`, `capacity`, `fuel_type`, `id_azccolumn`) VALUES (NULL, '$auto', '$capacity', '$fuel_type','$id_azccolumn');");
        header('Location: ../admin.php');
        break;
    case 'fuel':
        mysqli_query($connect_maksim, "INSERT INTO `fuel` (`id_fuel`, `price`, `type`) VALUES (NULL, '$price', '$type')");
        header('Location: ../admin.php');
        break;
    case 'employer':
        mysqli_query($connect_maksim, "INSERT INTO `employer` (`id_employer`, `name`, `date_of_bitrh`, `status`) VALUES (NULL, '$name', '$date_of_bitrh', '$status')");
        header('Location: ../admin.php');
        break;
    case 'provider':
        mysqli_query($connect_maksim, "INSERT INTO `provider` (`id_provider`, `name`, `fuel`) VALUES (NULL, '$name', '$fuel')");
        header('Location: ../admin.php');
        break;
    case 'users':
        mysqli_query($connect_maksim, "INSERT INTO `users` (`user_id`, `login`, `email`, `password`, `role`, `DOB`) VALUES (NULL, '$login', '$email', '$password', '$role', '$DOB')");
        header('Location: ../admin.php');
        break;
}

// header('Location: ../admin.php');
?>