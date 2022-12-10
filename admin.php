<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN_AZC-BD</title>
</head>
<body>

<style>
    body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background:
      linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
      linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
      linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: bold;
      font-size: 15px;
}
    .table {
        width: 1600px;
        margin-bottom: 20px;
        border: 15px solid #800000;
        border-top: 5px solid #800000;
        border-collapse: collapse; 
        text-align:center;
    }
    .table th {
        font-weight: bold;
        padding: 5px;
        background: #800000;
        border: none;
        border-bottom: 5px solid #800000;
    }
    .table td {
        width: 200px;
        padding: 1rem;
    }

    .text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        line-height: 1.3em;
        height: 3.9em;
    }

    .form {
        display: flex;
    }

    .form__item {
        width: 230px;
        height: 100px;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 45px;

       
    }

    .form__item input {
        height: 30px;
        margin-left: 10px;
    }

    a {
        background-color: YELLOW;
        color: BLACK;
        font-size: 20px;
        text-transform: uppercase;
        text-decoration: none;
    }

</style>



<table class="table">
    <h1><?= $table_name = 'azccolumn';?></h1>
    <thead>
        <tr>
            <th>ID_AZCCOLUMN</th>
            <th>NAME</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($azccolumn as $data) {?>
            <tr>
                <td><?= $data['id_azccolumn'];?></td>
                <td><?= $data['name'];?></td>
                <td><a href="update.php?id=<?= $data['id_azccolumn'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id_azccolumn'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>NAME</p>
        <input type="text" name="name">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>



<table class="table">
    <h1><?= $table_name = 'buyern';?></h1>
    <thead>
        <tr>
	        <th>ID_BUYERN</th>
            <th>AUTO</th>
            <th>CAPACITY</th>
            <th>FUEL_TYPE</th>
            <th>ID_AZCCOLUMN</th>
            <th colspan="3"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($buyern as $data) { ?>
            <tr>
                <td><?= $data['id_buyern'];?></td>
                <td><?= $data['auto'];?></td>
                <td><?= $data['capacity'];?></td>
                <td><?= $data['fuel_type'];?></td>
                <td><?= $data['id_azccolumn'];?></td>
                <td><a href="update.php?id=<?= $data['id_buyern'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id_buyern'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
            <?php }?>
    </tbody>
</table>


<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>AUTO</p>
        <input type="text" name="auto">
    </div>
    <div class="form__item">
        <p>CAPACITY</p>
        <input type="text" name="capacity">
    </div>
    <div class="form__item">
        <p>FUEL_TYPE</p>
        <select required name="fuel_type" class="select">
                <option value="1">fuel 92 samples</option>
                <option value="2">fuel 95 samples</option>
                <option value="3">fuel 98 samples</option>
                <option value="4">diesel</option>
                <option value="5">gas</option>
        </select>
    </div>
    <div class="form__item">
        <p>ID_AZCCOLUMN</p>
        <select required name="id_azccolumn" class="select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>




<table class="table">
    <h1><?= $table_name = 'employer';?></h1>
    <thead>
        <tr>
	        <th>id_employer</th>
            <th>name</th>
            <th>date_of_bitrh</th>
            <th>status</th>
            <th colspan="5"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employer as $data) {?>
            <tr>
                <td><?= $data['id_employer'];?></td>
                <td><?= $data['name'];?></td>
                <td><?= $data['date_of_bitrh'];?></td>
                <td><?= $data['status'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="update.php?id=<?= $data['id_employer'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id_employer'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>name</p>
        <input type="text" name="name">
    </div>
    <div class="form__item">
        <p>date_of_bitrh</p>
        <input type="text" name="date_of_bitrh">
    </div>
    <div class="form__item">
        <p>status</p>
        <input type="text" name="status">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>




<table class="table">
    <h1><?= $table_name = 'fuel';?></h1>
    <thead>
        <tr>
	        <th>id_fuel</th>
            <th>price</th>
            <th>type</th>
            <th colspan="6"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fuel as $data) {?>
            <tr>
                <td><?= $data['id_fuel'];?></td>
                <td><?= $data['price'];?></td>
                <td><?= $data['type'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="update.php?id=<?= $data['id_fuel'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id_fuel'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>price</p>
        <input type="text" name="price">
    </div>
    <div class="form__item">
        <p>type</p>
        <input type="text" name="type">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>


<table class="table">
    <h1><?= $table_name = 'provider';?></h1>
    <thead>
        <tr>
	        <th>id_provider</th>
            <th>name</th>
            <th>fuel</th>
            <th colspan="6"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($provider as $data) {?>
            <tr>
                <td><?= $data['id_provider'];?></td>
                <td><?= $data['name'];?></td>
                <td><?= $data['fuel'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="update.php?id=<?= $data['id_provider'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id_provider'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>name</p>
        <input type="text" name="name">
    </div>
    <div class="form__item">
        <p>fuel</p>
        <input type="text" name="fuel">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>


<table class="table">
    <h1><?= $table_name = 'users';?></h1>
    <thead>
        <tr>
	        <th>user_id</th>
            <th>login</th>
            <th>email</th>
            <th>password</th>
            <th>role</th>
            <th>DOB</th>
            <th colspan="3"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $data) {?>
            <tr>
                <td><?= $data['user_id'];?></td>
                <td><?= $data['login'];?></td>
                <td><?= $data['email'];?></td>
                <td><?= $data['password'];?></td>
                <td><?= $data['role'];?></td>
                <td><?= $data['DOB'];?></td>
                <td></td>
                <td><a href="update.php?id=<?= $data['user_id'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['user_id'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>login</p>
        <input type="text" name="login">
    </div>
    <div class="form__item">
        <p>email</p>
        <input type="text" name="email">
    </div>
    <div class="form__item">
        <p>password</p>
        <input type="text" name="password">
    </div>
    <div class="form__item">
        <p>role</p>
        <input type="text" name="role">
    </div>
    <div class="form__item">
        <p>DOB</p>
        <input type="text" name="DOB">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>








<script>
        let flag = false;
        document.onkeydown = function(event) {
            if (event.code == 'AltLeft') flag = true;
            if (event.code == 'KeyA' && flag){
                flag = false;
                window.location.href = 'index.php';
            };
        }
</script> 


</body>
</html>