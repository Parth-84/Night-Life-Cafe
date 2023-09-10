
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link rel="stylesheet" href="./static/_admin_dashboard_login.css">
</head>
<body>
   
    <?php
if(isset($_GET["noUser"])){
    echo '<div class="alert-box-admin" id="nouser" style="top:0; ">No User Found!!!</div>
    <div class="close-btn" id="close-btn1" onclick="close_btn();" style="top:-10px; ">
    &times;
    </div>
    ';}
    if(isset($_GET["passFalse"])){
    
    echo '<div class="alert-box-admin" id="passfalse" style="top:0; ">Password Incorrect!!!</div>
    <div class="close-btn" id="close-btn2" onclick="close_btn1();" style="top:-10px; ">
    &times;
    </div>
    ';  
    }
    ?>
<section class="login-page">
    <div class="logo-img-box">
        <a href=""><img src="./img/Night-Life Cafe-logos_black.png" alt=""></a>
    </div>
    <form action="./partials/_handle_login.php" method="POST">
        <input  type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" id="login-btn" value="Login">
    </form>
</section>
</body>
<script>
    function close_btn(){
        let pos = "-100px";
        let close_btn1 = document.getElementById("close-btn1");
        let close_btn2 = document.getElementById("close-btn2");
        let nouser= document.getElementById("nouser");
        let passfalse = document.getElementById("passfalse");
 
        close_btn1.style.top = pos;
        nouser.style.top = pos;
        close_btn2.style.top = pos;
        passfalse.style.top = pos;
       

    }
    function close_btn1(){
        let pos = "-100px";
        let close_btn2 = document.getElementById("close-btn2");
        let passfalse = document.getElementById("passfalse");
 
        close_btn2.style.top = pos;
        passfalse.style.top = pos;
       

    }
</script>
</html>