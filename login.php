<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>
<body class="text-center">
    <div class="container">
    <div class="wrap col-md-6 offset-md-3">
        <h1 class="h3 mb-3">Login</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1" class="float-left">Email address</label> 
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="float-left">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>
                <button type="submit" class="btn btn-primary w-100 btn-lg mt-4">Login</button>
        </form>
    </div>
</div>
<?php
    session_start();
    $email = $_POST['email'];
    $password=$_POST['password'];
    if($email === 'admin@admin.com' and $password === 'secret'){
        header('location: home.php');
    }
    else
    ?>

</body>
</html>