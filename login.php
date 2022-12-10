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
style="background-image: url('img/background.jpg');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Вход в Аккаунт</h2>

            <form method="post">
                <?php include('error.php'); ?>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Ваш Логин</label>
                    <input type="text" class="form-control form-control-lg" name="login"/>     
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Пароль</label>
                    <input type="password" class="form-control form-control-lg" name="password"/>
                </div>

                <div class="d-flex justify-content-center">
                <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="login_user">Войти</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Еще нет аккаунта? <a href="register.php"
                    class="fw-bold text-body"><u>Зарегистрируйтесь</u></a></p>

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