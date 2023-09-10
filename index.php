<?php
include "./partials/_dbConnect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night-Life|Cafe</title>
    <link rel="stylesheet" href="./static/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header Section starts-->

    <!-- </header> -->
    <?php
    include "./partials/_headerNav.php";
    ?>
    <!-- Header Section ends-->

    <!-- Middle Setion Starts -->
    <div class="mid-sec">
        <h1>Night-<span>Life</span> <br> Cafe</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> Numquam placeat repellat suscipit nam quae
            velit magni eos aut iusto officia!
        </p>
        <a href="">Explore</a>
    </div>



    <!-- Middle Setion Ends -->

    <!-- Latest Arrivals Starts -->
    <section class="lat-arr-cont">
        <div class="temp"></div>
        <h1>Latest <span style="color: red;">Arrivals</span></h1>
        <div class="card-container">
            <div class="card">
                <img src="./img/lat-arr-1.jpg" alt="">
                <h3>Cappuccino</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur in illo accusantium. Error
                    ipsum voluptatem laborum sunt obcaecati amet cumque!</p>
                <p class="mrbt"><span>$2.25</span> <span id="price1">$3.25</span></p>
                <a href="">Order Now</a>
            </div>
            <div class="card">
                <img src="./img/lat-arr-2.jpg" alt="">
                <h3>Spices Mix</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur in illo accusantium. Error
                    ipsum voluptatem laborum sunt obcaecati amet cumque!</p>
                <p class="mrbt"><span>$3.25</span> <span id="price1">$4.50</span></p>
                <a href="">Order Now</a>
            </div>
        </div>
    </section>
    <!-- Latest Arrivals Ends -->

    <!-- Menu-Link Section Starts -->
    <section class="menu-link-cont">
        <div class="menu-link">
            <h1>Enjoy our delicious recipes.</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>Amet commodi ullam facere accusantium
                voluptate quas earum ratione nihil fugiat id!</p>
            <a href="">See Products</a>
        </div>
    </section>
    <!-- Menu-Link Section Ends -->

    <!-- Home-Products-Section_Starts -->
    <section class="home-products-cont">
        <div class="home-product-page">
            <h1><span style="color: red;">Our Products </span>For Home</h1>
            <!-- <img src="./img/home-product.jpg" alt=""> -->
            <div class="home-products-card-container">
            <?php
            $sqlQuery = 'SELECT * FROM `homeproducts`';
            $result = mysqli_query($conn,$sqlQuery);

            while($row = mysqli_fetch_assoc($result)){
    
    echo '<div class="home-product-card" >
                    <img src="./img/coffee-home'.$row["sr_no"].'.'.$row["product_img"].'" alt="">
                    <h3>'.$row["product_name"].'</h3>
                    <p>'.$row["product_desc"].'</p>
                    <p><span>$'.$row["product_eff_price"].'</span> <span class="hmprice1">$'.$row["product_act_price"].'</span></p>
                    <a href="orderPage.php?item_no='.$row['sr_no'].'">Buy Now</a>
                </div>';
            }
                ?>
            </div>
        </div>

    </section>
    <!-- Home-Products-Section_Ends -->
    <!-- <div class="temp1"></div> -->
       <!-- Menu-Link Section Starts -->
       <section class="menu-link-cont menu-link-cont2">
        <div class="menu-link">
            <h1>Explore <span style="color:red;" >Night-Life</span> Cafe.</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>Amet commodi ullam facere accusantium
                voluptate quas earum ratione nihil fugiat id!</p>
            <a href="" class="menu-link2-a">Explore Now</a>
        </div>
    </section>
    <!-- Menu-Link Section Ends -->
    <!-- Testimonials Section Starts -->
    <section class="testimonials-container">
        <h1>Testimonials</h1>
        <div class="testimonials-card-container">
            <div class="testimonial-card">
                <img src="./img/person1.jpg" alt="">
                <h3><i>Angelina</i></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat amet ex, dolore dignissimos
                    excepturi ea animi magni accusantium consectetur beatae laboriosam, quas autem asperiores quisquam?
                </p>
            </div>
            <div class="testimonial-card">
                <img src="./img/person2.jpg" alt="">
                <h3><i>Lara</i></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat amet ex, dolore dignissimos
                    excepturi ea animi magni accusantium consectetur beatae laboriosam, quas autem asperiores quisquam?
                </p>
            </div>
            <div class="testimonial-card">
                <img src="./img/person3.jpg" alt="">
                <h3><i>John</i></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat amet ex, dolore dignissimos
                    excepturi ea animi magni accusantium consectetur beatae laboriosam, quas autem asperiores quisquam?
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section Ends -->

    <!-- Footer-Section-Starts -->
    <Section class="footer-section">
        <div class="social-media-links">
        <a href=""><img src="./img/insta-png.png" alt=""></a>
        <a href=""><img src="./img/fb-png.png" alt=""></a>
        <a href=""><img src="./img/twitter-png.png" alt=""></a>
    </div>
    <p>Copyrights Parth & Bhumi|2022</p>

    </Section>
    <!-- Footer-Section-Ends -->
    <script src="./static/script.js"></script>
</body>

</html>