<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="../static/_add_new_dish.css">
</head>
<body> -->
    <?php
    echo'
    <section  id="addNewDish">

    <form action="./partials/_insert_dish.php" id="productForm" method="POST" enctype="multipart/form-data" >

    <label for="fd_name">Food Name</label>
    <input type="text" id="fd_name" name="fd_name" placeholder="Food Name">
    <label for="fd_categ">Food Category</label>
        <select name="fd_categ" id="fd_categ">
            <option value="coffee">Special Coffees</option>
            <option value="pizza">Pizza</option>
                <option value="combo">Beverages</option>
                <option value="burger">Burger</option>
                <option value="fries">Fries</option>
                <option value="combo">Meal</option>
        </select>

        <label for="sl_price">Selling Price</label>
        <input type="text" name="sl_price" placeholder="Selling Price" id="sl_price">
        <label for="al_price">Actual Price</label>
        <input type="text" name="al_price" placeholder="Actual Price" id="al_price">

        <label for="special">Special Item</label>
        <select name="special" id="special">
            <option value="1">true</option>
            <option value="0">false</option>
        </select>
        <label for="img_file">Upload Image</label>
        <input type="file" name="imgfile"  id="img_file" >

    <input type="submit" id="btn" value="Add Dish">
    <span id="btn2" onclick="closeDishCard();">Close</span>
    </form>
    </section>';
    ?>
<!-- </body>
</html> -->