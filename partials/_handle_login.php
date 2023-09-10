<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include './_dbConnect.php';
    if(!$conn){
        die("Sorry! we could connect to the database.");
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $SelectQuery = 'SELECT * FROM `admin_users`';
    $result = mysqli_query($conn,$SelectQuery);
    $admin_row = mysqli_fetch_assoc($result);
    if($admin_row){
        if($username==$admin_row["admin_username"]){
            if($password==$admin_row["admin_password"]){
                session_start();
                $_SESSION["adminLoggedin"]=true;
                $_SESSION["adminUsername"]=$username;
                $_SESSION["adminPassword"]=$password;
                header("location: /cafe/_admin_dashboard.php");

            }
            else{
                header("location: /cafe/_admin_dashboard_login.php?passFalse=true");
            }
        }
        else{
            header("location: /cafe/_admin_dashboard_login.php?noUser=true");

        }
    }
    else{
        die("We couldn't process your request at the moment please try again later.");

    }

    
}
?>