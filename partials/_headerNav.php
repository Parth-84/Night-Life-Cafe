<?php

echo ' <header>
<nav class="navbar">
    <a href="index.php"><img src="./img/Night-Life Cafe-logos_transparent.png" alt="logo"></a>
    <ul id="hmbgul">
        <li class="hmbgli"><a href="index.php">HOME</a></li>
        <li class="hmbgli"><a href="about.php">ABOUT</a></li>
        <li class="hmbgli"><a href="menu.php?category=All">MENU</a></li>
        <li class="hmbgli"><a href="contact.php">CONTACT US</a></li>
    </ul>
    <span class="openbtn" onclick="openNav()" id="hmbg">&#9776;</span>
    <div id="hmburger">
        <ul id="hmbgul2">
            <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li class="hmbgli2"><a href="index.php">HOME</a></li>
            <li class="hmbgli2"><a href="about.php">ABOUT</a></li>
            <li class="hmbgli2"><a href="menu.php?category=All">MENU</a></li>
            <li class="hmbgli2"><a href=""contact.php>CONTACT US</a></li>
        </ul>
    </div>
</nav>
</header>';
?>