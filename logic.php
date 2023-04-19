<?php

    ini_set("display_errors", "off");
    $conn = mysqli_connect("localhost", "root", "", "blog");

    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data (title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: menu.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: menu.php");
        exit();
    }

    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: menu.php");
        exit();
    }
function conn (){
    $conn2 = mysqli_connect("localhost", "root", "", "clients");
    global $conn2;
}
function login ($user, $password){
global $conn2;
 $list = mysqli_query($conn2,"SELECT * FROM users WHERE username=$user && passwords=$password");
    if($list){
        return $check = 1;
    }
}
?>
