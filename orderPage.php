<?php
include "./partials/_dbConnect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <!-- <link rel="stylesheet" href="./static/style.css"> -->
    <link rel="stylesheet" href="./static/orderPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>

<body class="body2">
    <?php
    // include "./partials/_headerNav.php";
    ?>
    <div class="circle"></div>
    <section class="order_navBar">
        <nav class="navbar">
            <a href="index.php"><img src="./img/Night-Life Cafe-logos_black.png" alt="logo"></a>
            <ul id="hmbgul">
                <li class="hmbgli"><a href="./index.php">HOME</a></li>
                <li class="hmbgli"><a href="./about.php">ABOUT</a></li>
                <li class="hmbgli"><a href="./menu.php">MENU</a></li>
                <li class="hmbgli"><a href="./contact.php">CONTACT US</a></li>
            </ul>
            <span class="openbtn" onclick="openNav()" id="hmbg">&#9776;</span>
            <div id="hmburger">
                <ul id="hmbgul2">
                    <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                    <li class="hmbgli2"><a href="./index.php">HOME</a></li>
                    <li class="hmbgli2"><a href="./about.php">ABOUT</a></li>
                    <li class="hmbgli2"><a href="./menu.php">MENU</a></li>
                    <li class="hmbgli2"><a href="./contact.php">CONTACT US</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <secction class="product_info_cont">
        <?php

if(isset($_GET["item_no"])){
// include "./partials/_dbConnect.php";

    $item = $_GET["item_no"];
    $sqlQuery = "SELECT * FROM `homeproducts` WHERE `sr_no` = $item";
    $result = mysqli_query($conn,$sqlQuery);

    if($row = mysqli_fetch_assoc($result)){
        $sr_no = $row["sr_no"];
        $product_name = $row["product_img"];
        $product_price = $row["product_eff_price"];
        echo '<div class="img_disp">
            <img src="./img/coffee-home'.$sr_no .'.'.$product_name.'" alt="">
            <!-- <div class="link_btn">
                <a href="">Add to Cart</a>
                <a href="">Buy Now</a>
            </div> -->
        </div>
        <div class="product_info">
            <h1>'.$row["product_name"].'</h1>
            <p>'.substr($row["product_desc"],0,90).'</p>
            <h2>$'.$row["product_eff_price"].'<span id="price1">$'.$row["product_act_price"].'</span></h2>
            <div class="quantity">
                <p>Quantity </p>
                <button id="btn1" onclick="decNum()" style="padding:5px 12px">-</button><span id="addQuan"> </span><button id="btn2" onclick="incNum()">+</button>
            </div>
            <p id="total">Total: <span id="totalamnt">$'.$product_price.'</span></p>
           <div class="mainbtn">
            <a href="">Add To Cart</a>
            <a href="">Buy Now</a>
            </div>
        </div>';
    }
        ?>
    </secction>


    <section class="nxt-sec">
        <div class="nxt-sec-cont">
            <h1 style="margin-top: 20px;">Bought Together</h1>
            <div class="nxt-sec-card-container">
            <?php
            
                $sqlQuery1 = "SELECT * FROM `homeproducts` WHERE product_categ=1";
                $results = mysqli_query($conn,$sqlQuery1);
                $i=1;
                while($row1 = mysqli_fetch_assoc($results)){
            echo '<div class="nxt-sec-card">
                <img src="./img/coffee-home'.$row1["sr_no"].'.'.$row1["product_img"].'" alt="">
                <h1>'.$row1["product_name"].'</h1>
                <p>'.$row1["product_desc"].'</p>
                <p><span>$'.$row1["product_eff_price"].'</span> <span class="hmprice">$'.$row1["product_act_price"].'</span></p>
                <a href="">Add To Cart</a>
            </div>';
            if($i==3){break;}
            $i++;
                }
            }
                else{
                    echo 'No Results Found';
                }
            ?>
        </div>
    </section>
    <script src="./static/script.js"></script>
<script>
            let addQuan = document.getElementById('addQuan');
            let totalamnt = document.getElementById('totalamnt');
            let i=1;
            // let str = " "+i;
            addQuan.innerHTML= i;
        function incNum(){
            
            if(i<10){
            i=i+1;
            addQuan.innerHTML=String(i);
            totalamnt.innerHTML='$'+i*<?php echo $product_price?>
            }
            
        }
        function decNum(){
            if(i>1){
            i=i-1;
            addQuan.innerHTML=String(i);
            totalamnt.innerHTML='$'+i*<?php echo $product_price?>

            }
        }
</script>
</body>

</html>