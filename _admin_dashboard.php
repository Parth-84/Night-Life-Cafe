<?php
include './partials/_dbConnect.php';
session_start();
if (isset($_SESSION["adminUsername"])) {
    $name = $_SESSION["adminUsername"];
    $SelectQuery = 'SELECT * FROM `admin_users`';
    $result = mysqli_query($conn,$SelectQuery);
    $admin_row = mysqli_fetch_assoc($result);
    if($admin_row){
        if($_SESSION["adminUsername"]==$admin_row["admin_username"]){
            
            if($_SESSION["adminPassword"]==$admin_row["admin_password"]){
                // echo 'Authenticate Admin';            
            }
            else{
                header("location: /cafe/index.php");
            }
        }
        else{
            header("location: /cafe/index.php");

        }
    }
}
else{
    header("location: /cafe/index.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $name; ?></title>
    <link rel="stylesheet" href="./static/_admin_dashboard.css">
    <link rel="stylesheet" href="./static/_add_new_dish.css">
</head>

<body>
    <section class="hmburger-menu" id="hm-menu">
        <div class="open-btn" onclick="open_btn();"> &#9776;</div>
        <div class="main-cont">
            <div class="dshbd-card-cont">
                <div class="dshbd-card">
                    <div class="card-img-bx">
                        <img src="" alt="">
                    </div>
                    <div class="card-content-bx">
                        <p> Latest Orders</p>
                        <span class="animateTxt" id="ani-txt1" data-val="84">0</span>

                    </div>
                </div>
                <div class="dshbd-card">
                    <div class="card-img-bx">
                        <img src="" alt="">
                    </div>
                    <div class="card-content-bx">
                        <p>New Users</p>
                        <span class="animateTxt" id="ani-txt2" data-val="95" >0</span>

                    </div>
                </div>
                <div class="dshbd-card">
                    <div class="card-img-bx">
                        <img src="" alt="">
                    </div>
                    <div class="card-content-bx">
                        <p>Profit</p>

                        <span class="animateTxt" id="ani-txt3" data-val="100000">0</span>

                    </div>
                </div>
            </div>
            <?php include './partials/_add_new_dish.php';?>
            <div class="mid-sec">
                <div class="sec-1">
                    <!-- <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div>
                    <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div>
                    <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div>
                    <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div>
                    <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div>
                    <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div>
                    <div class="db_data">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eaque!
                    </div> -->

                </div>
                <div class="sec-2">
                    
                </div>
            </div>
        </div>
    </section>
    <section class="side-bar" id="sidebar">
        <div class="close-btn" onclick="close_btn();">&times;</div>
        <div class="logo-img-box">
            <img src="./img/Night-Life Cafe-logos_black.png" alt="">
            <h3><?php echo $name; ?></h3>
        </div>
        <div class="dashboard-links">
            <ul>
                <li><a  >Add New Product</a></li>
                <li><a onclick="addDish();"  >Add New Dish</a></li>
                <li><a >Latest Orders</a></li>
                <li><a >Home Page</a></li>
                <li><a >Menu Page</a></li>
            </ul>
        </div>
        <div class="external-links">
            <a href="./partials/_handle_logout.php">Logout</a>
            </div>
        </section>
        <section class="nxt-sec">
            <div class="nxt-sec-1">
    
            </div>
        </section>
        
        
        <script>
            function close_btn() {
            let sidebar = document.getElementById('sidebar');

            sidebar.style.left = '-350px';
        }

        function open_btn() {
            let sidebar = document.getElementById('sidebar');
            sidebar.style.left = '0px';
        }
        let anitxts = document.querySelectorAll('.animateTxt');
        let interval = 3000;

        anitxts.forEach((anitxt)=>{
            let start = 0;
            let end = parseInt(anitxt.getAttribute("data-val"));
            let new_end=0;
            if(end>1000){
                new_end = end;
                end = end/1000;
                        }
            let duration = Math.floor(interval/end);
            let counter = setInterval(function (){
                start += 1;
                if(new_end) anitxt.textContent = start+"k"; 
                else anitxt.textContent = start;
                if(start==Math.floor(end)){
                    clearInterval(counter);
                }
            },duration);
        });
        
        let addNewDish = document.getElementById('addNewDish');
        let docBody = document.querySelector('body');
        let root = document.querySelector(':root');

        function addDish(){
            // root.style.setProperty('--body_before_display_style','block');
            addNewDish.style.display = "block";
            addNewDish.style.top = "50%";
        }
        function closeDishCard(){
            root.style.setProperty('--body_before_display_style','none');
            addNewDish.style.display = "none";
        }

    </script>
</body>

</html>