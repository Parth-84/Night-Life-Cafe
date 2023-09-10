<?php

if($_SERVER["REQUEST_METHOD"]="POST"){
    include './_dbConnect.php';
    $fd_name = $_POST["fd_name"];
    $fd_categ = $_POST["fd_categ"];
    $sl_price = $_POST["sl_price"];
    $al_price = $_POST["al_price"];
    $special = $_POST["special"];

    // echo $fd_name; 
    $img_name = $_FILES['imgfile']['name'];
    $extension = pathinfo($img_name,PATHINFO_EXTENSION);
    // echo $img_name;
    $sqlQuery = 'SELECT * FROM `menuitems` WHERE food_categ LIKE "'.$fd_categ.'"';
    $result = mysqli_query($conn,$sqlQuery);
    $img_no = mysqli_num_rows($result)+1;
    // echo $img_no;
    $newname = $fd_categ.$img_no.'.'.$extension;
    // echo $newname;

    $tmp_filename = $_FILES['imgfile']['tmp_name'];
 
    if(move_uploaded_file($tmp_filename,'../img/Menu/'.$newname)){
        echo 'uploaded as '.$newname;
        $itemno_Query = "SELECT * FROM `menuitems`";
        $itemresult = mysqli_query($conn,$itemno_Query);
        $itemno = mysqli_num_rows($itemresult)+1;

        $insertQuery = "INSERT INTO `menuitems` (`item_no`, `food_categ`, `food_name`, `food_desc`, `food_eff_price`, `food_act_price`, `food_special`, `food_img_type`, `food_categ_item_no`, `food_img`) VALUES ('$itemno', '$fd_categ', '$fd_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, est!', '$sl_price', '$al_price', '$special', '$extension', '$img_no', './img/Menu/$newname');";
        $result = mysqli_query($conn,$insertQuery);
        if($result){
            echo 'Information added into database';

            header("location: /cafe/menu.php?category=$fd_categ");
        }
    }
  else{
      echo 'Image file does not uploaded';
  }

}
?>