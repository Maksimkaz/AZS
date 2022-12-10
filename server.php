<?php
session_start();
$login = "";
$email = "";
$errors = array(); 
$avatar = "";

$db = mysqli_connect('127.0.0.1', 'root', '', 'AZS');
if ($db == false)
{
    echo "Ошибка подключения";
}
// регистрация
if (isset($_POST['reg_user'])) 
{
    $login = mysqli_real_escape_string($db, $_POST['login']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);

    if (empty($login)) { array_push($errors, "Вы не ввели логин"); }
    if (empty($email)) { array_push($errors, "Вы не ввели почту"); }
    if (empty($password_1)) { array_push($errors, "Вы не ввели пароль"); }
    if ($password_1 != $password_2) 
    {
	    array_push($errors, "Пароли не совпадают");
    }

    $user_check_query = "SELECT * FROM users WHERE login='$login' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) 
    {
        if ($user['login'] === $login) 
        {
            array_push($errors, "Пользователь уже существует");
        }

        if ($user['email'] === $email) 
        {
            array_push($errors, "Почта уже зарегистрирована");
        }
    }

    if (count($errors) == 0) {
  	    $password = md5($password_1);
  	    $query = "INSERT INTO users (login, email, password, DOB) VALUES('$login', '$email', '$password', '$dob')";
  	    mysqli_query($db, $query);
  	    header('location: login.php');
    }
}

// login
if (isset($_POST['login_user'])) 
{
    $login = mysqli_real_escape_string($db, $_POST['login']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($login)) 
    {
        array_push($errors, "Вы не ввели логин");
    }
    if (empty($password)) 
    {
        array_push($errors, "Вы не ввели пароль");
    }
  
    if (count($errors) == 0) 
    {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) 
        {
            $user = mysqli_fetch_assoc($results);
            $_SESSION['user'] = [
                "id" => $user['user_id'],
                "login" => $user['login'],
                "email" => $user['email'],
                "DOB" => $user['DOB'],
                "role" => $user['role']
            ];
            header('location: index.php');
        } else {
            array_push($errors, "Не верный логин или пароль");
        }
    }
}

if(isset($_POST['zakaz']))
{
    $id = $_SESSION['user']['id'];
    $car = mysqli_real_escape_string($db, $_POST['car']);
    $capacity = mysqli_real_escape_string($db, $_POST['capacity']);
    $fuel_type = mysqli_real_escape_string($db, $_POST['fuel_type']);
    $id_azs = mysqli_real_escape_string($db, $_POST['column']);
    if (empty($car)) 
    {
        array_push($errors, "Вы не ввели авто");
    }
    if (empty($capacity)) 
    {
        array_push($errors, "Вы не ввели Литраж");
    }
    if(count($errors) == 0)
    {
        $query_2 = "INSERT INTO buyern (id_buyern, auto, capacity, fuel_type, id_azccolumn) VALUES ('$id', '$car', '$capacity', '$fuel_type', '$id_azs')";
        mysqli_query($db, $query_2);
        header('location: index.php');
    }
}
?>