<?php
require_once 'config/db.php';

$data_id = $_GET['id'];
$table_name = $_GET['table_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE_SURF-BD</title>
</head>
<body>
<style>
    body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
</style>

<h3>UPDATE DATA</h3>

<?php
switch ($table_name) {
    case 'azccolumn':
        $data = mysqli_query($connect_maksim, "SELECT * FROM `$table_name` WHERE `id_azccolumn` = '$data_id'" );
        $data = mysqli_fetch_assoc($data);?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="id_azccolumn" value="<?= $data['id_azccolumn']?>">
            <input type="hidden" name="table_name" value="azccolumn">
            <p>NAME</p>
            <input type="text" name="name" value="<?= $data['name']?>">
            <button type="submit">update data</button>
        </form>
        <?php break;

    case 'buyern':
        $data = mysqli_query($connect_maksim, "SELECT * FROM `$table_name` WHERE `id_buyern` = '$data_id'" );
        $data = mysqli_fetch_assoc($data);?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="id_buyern" value="<?= $data['id_buyern']?>">
            <input type="hidden" name="table_name" value="buyern">
            <p>auto</p>
            <input type="text" name="auto" value="<?= $data['auto']?>">
            <p>capacity</p>
            <input type="text" name="capacity" value="<?= $data['capacity']?>">
            <p>fuel_type</p>
            <!-- <input type="text" name="fuel_type" value=""> -->
            <select required name="fuel_type" class="select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <p>id_azccolumn</p>
            <select required name="id_azccolumn" class="select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <!-- <input type="text" name="id_azccolumn" value=""> -->
            <button type="submit">update data</button>
        </form>
        <?php break;

case 'fuel':
    $data = mysqli_query($connect_maksim, "SELECT * FROM `$table_name` WHERE `id_fuel` = '$data_id'" );
    $data = mysqli_fetch_assoc($data);?>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id_fuel" value="<?= $data['id_fuel']?>">
        <input type="hidden" name="table_name" value="fuel">
        <p>price</p>
        <input type="text" name="price" value="<?= $data['price']?>">
        <p>type</p>
        <input type="text" name="type" value="<?= $data['type']?>">
        <button type="submit">update data</button>
    </form>
    <?php break;

case 'employer':
    $data = mysqli_query($connect_maksim, "SELECT * FROM `$table_name` WHERE `id_employer` = '$data_id'" );
    $data = mysqli_fetch_assoc($data);?>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id_employer" value="<?= $data['id_employer']?>">
        <input type="hidden" name="table_name" value="employer">
        <p>name</p>
        <input type="text" name="name" value="<?= $data['name']?>">
        <p>date_of_bitrh</p>
        <input type="text" name="date_of_bitrh" value="<?= $data['date_of_bitrh']?>">
        <p>status</p>
        <input type="text" name="status" value="<?= $data['status']?>">
        <button type="submit">update data</button>
    </form>
    <?php break;

case 'provider':
    $data = mysqli_query($connect_maksim, "SELECT * FROM `$table_name` WHERE `id_provider` = '$data_id'" );
    $data = mysqli_fetch_assoc($data);?>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id_provider" value="<?= $data['id_provider']?>">
        <input type="hidden" name="table_name" value="provider">
        <p>name</p>
        <input type="text" name="name" value="<?= $data['name']?>">
        <p>fuel</p>
        <input type="text" name="fuel" value="<?= $data['fuel']?>">
        <button type="submit">update data</button>
    </form>
    <?php break;

case 'users':
    $data = mysqli_query($connect_maksim, "SELECT * FROM `$table_name` WHERE `user_id` = '$data_id'" );
    $data = mysqli_fetch_assoc($data);?>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="user_id" value="<?= $data['user_id']?>">
        <input type="hidden" name="table_name" value="users">
        <p>login</p>
        <input type="text" name="login" value="<?= $data['login']?>">
        <p>email</p>
        <input type="text" name="email" value="<?= $data['email']?>">
        <p>password</p>
        <input type="text" name="password" value="<?= $data['password']?>">
        <p>role</p>
        <input type="text" name="role" value="<?= $data['role']?>">
        <p>DOB</p>
        <input type="text" name="DOB" value="<?= $data['DOB']?>">
        <button type="submit">update data</button>
    </form>
    <?php break;

}?>

</body>
</html>