<?php
session_start();
include "logic.php";
$_SESSION['logged'] = 0;
if(isset($_REQUEST['sent'])){
    conn();
    $check = login($_REQUEST['username'],$_REQUEST['password']);
    if ($check == 1){
        $_SESSION['logged'] = 1;
        header ("Location: menu.php");
    }else{
        echo "The user doesn't exist</br>";
        echo "<a href='index.php'>Click to go back</a></br>";
        echo "<a href='register_html.php'>Click here to register</a></br>";
    }
}else{
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Blog</title>
</head>
    <body>
    <div class="row">
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">
                            <form action="index.php" method="POST">
                            <p>Username: <input type="text" name="username" required></p>
                            <p>Password: <input type="password" name="password" required></p>
                            <input type="submit" name="sent" Value="Login" class="btn btn-light">
                            </form>
                            <p>You dont have an acoount please register <a href="register_html.php"><em>Here</em></a><p>
                        </div>
                    </div>
                </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
<?php
    }
?>