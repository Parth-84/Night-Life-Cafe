<?php
include './partials/_dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu|Night-Life</title>
    <link rel="stylesheet" href="./static/menu.css">
    <link rel="stylesheet" href="./static/_headerNav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

</head>
<body>
    <?php include "./partials/_headerNav.php";?>

    <section class="menu-txt-box">
        <div class="menu-txt">
            <h1>MENU</h1>
            <h3>Night-Life Cafe</h3>
        </div>
    </section>
    <section class="banner-sec">
<h1>Enjoy Amazing Combo!!!</h1> 
<a href="">Order Now</a>

</section>
    <section class="menu-categ">
        <form action="./menu.php" method="GET">
            <label for="menu-category">Choose what to eat:</label>
            <select name="category" id="menu-category">
                <option value="All">-----</option>
                <option value="combo">Beverages</option>
                <option value="coffee">Special Coffees</option>
                <option value="pizza">Pizza</option>
                <option value="burger">Burger</option>
                <option value="fries">Fries</option>
                <option value="combo">Meal</option>
            </select>
            <input type="submit" value="GO">
        
        </form>

    </section>
<section class="menu-item-cont">
    <!-- <h1>Menu</h1> -->
    <div class="menu-item-card-cont">
        <?php
        if(!isset($_GET["category"])|| $_GET["category"]=="All"){
         $sqlQuery = 'SELECT * FROM `menuitems`';
         $result = mysqli_query($conn,$sqlQuery);
         $i=1;
         while($row = mysqli_fetch_assoc($result)){
        echo '
        <div class="menu-item-card">
                <img src="'.$row["food_img"].'" alt="">
                <h1>'.$row["food_name"].'</h1>
                <p>'.$row["food_desc"].'</p>
                <p><span>$'.$row["food_eff_price"].'</span> <span class="mnprice">$'.$row["food_act_price"].'</span></p>
                <a href="">Order Now</a>
                <a href="" style="margin-top:5px;">Add To Cart</a>
                
        </div>';
        $i++;
         }
        }
         else if($categ = $_GET["category"])
         {
            $sqlQuery = 'SELECT * FROM `menuitems` WHERE `food_categ` LIKE "'.$categ.'"';
            $result = mysqli_query($conn,$sqlQuery);
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
           echo '
           <div class="menu-item-card">
                   <img src="'.$row["food_img"].'" alt="">
                   <h1>'.$row["food_name"].'</h1>
                   <p>'.$row["food_desc"].'</p>
                   <p><span>$'.$row["food_eff_price"].'</span> <span class="mnprice">$'.$row["food_act_price"].'</span></p>
                   <a href="">Order Now</a>
                   <a href="" style="margin-top:5px;" >Add To Cart</a>
   
           </div>';
         }
         }
        ?>     
    </div>
</section>
    <script src="./static/script.js"></script>

</body>
</html>