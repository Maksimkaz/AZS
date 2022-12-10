<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'AZS');

$connect_maksim = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db_maksim = new PDO("mysql:host=localhost:3307;dbname=AZS","root","");
if (!$db_maksim) {
    die('erroe connect do database!');
}

/*====azccolumn====*/ 
$azccolumn = [];    
if ($query = $db_maksim->query("SELECT * FROM `azccolumn`")) {
    $azccolumn = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_maksim->errorInfo());
}
/*====buyern====*/ 
$buyern = [];    
if ($query = $db_maksim->query("SELECT * FROM `buyern`")) {
    $buyern = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_maksim->errorInfo());
}
/*====employer====*/ 
$employer = [];    
if ($query = $db_maksim->query("SELECT * FROM `employer`")) {
    $employer = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_maksim->errorInfo());
}
/*====fuel====*/ 
$fuel = [];    
if ($query = $db_maksim->query("SELECT * FROM `fuel`")) {
    $fuel = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_maksim->errorInfo());
}
/*====provider====*/ 
$provider = [];    
if ($query = $db_maksim->query("SELECT * FROM `provider`")) {
    $provider = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_maksim->errorInfo());
}
/*====users====*/ 
$users = [];    
if ($query = $db_maksim->query("SELECT * FROM `users`")) {
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_maksim->errorInfo());
}

?>