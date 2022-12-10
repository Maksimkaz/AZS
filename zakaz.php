<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://yt3.ggpht.com/a/AATXAJwv8osjGBjExEIKfCsDxUbK-xZ5gyOrfB8X0uGRbw=s900-c-k-c0xffffffff-no-rj-mo" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Вход</title>
    </head>
</head>
<body>
<section class="vh-100 bg-image"
style="background-image: url('https://funart.pro/uploads/posts/2022-08/1659731562_4-funart-pro-p-novostnoi-fon-krasivo-4.png');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Заказ топлива</h2>

            <form method="post">
                <?php include('error.php'); ?>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Машина</label>
                    <input type="text" class="form-control form-control-lg" name="car"/>
                </div>
                <label class="form-label">Вид топлива</label>
                <select class="form-control form-control-lg" style="text-align: center; width: 250px;" name="fuel_type">
                    <option value="1">fuel 92 samples</option>
                    <option value="2">fuel 95 samples</option>
                    <option value="3">fuel 98 samples</option>
                    <option value="4">diesel</option>
                    <option value="5">gas</option>
                </select>

                <label class="form-label">Номер колонки</label>
                <select class="form-control form-control-lg" style="text-align: center; width: 250px;" name="column">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div cla5s="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Литраж</label>
                    <input type="number" class="form-control form-control-lg" name="capacity"/>
                </div>

                <div class="d-flex justify-content-center">
                <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="zakaz">Заказ</button>
                </div>

            </form>

            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>