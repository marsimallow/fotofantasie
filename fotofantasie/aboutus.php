<!doctype html>
<html class="no-js" lang="">



<body>

  <!-- Add your site or application content here -->
<?php 
require_once("header.php");
?>


<main>
    <div class="wrapper">
        <?php
            if(isset($_GET['msg'])){
            echo $_GET['msg'];
            }
        ?>
        <div class="fotofantasie">
            <h2>Over onze collega's</h2>
        </div>
        <div class="about">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat earum, impedit laudantium consequuntur rem corporis dolorum perspiciatis nostrum repellendus, iste molestias deleniti quia praesentium similique. Laborum earum veniam tempore. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vitae, ducimus dolorum, dolores quas quos sunt, officiis quasi laborum quisquam autem doloribus ad? Eaque, praesentium! Veniam, corporis! Repellat dicta, illum optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolore voluptatem inventore expedita, cumque ab mollitia commodi facilis possimus modi maiores, blanditiis voluptas architecto necessitatibus! Culpa quod maiores eligendi esse!</p>
            <img src="img/header_img.jpg" alt="fotofantasie">
        </div>
    </div>
</main>


<?php
require_once("footer.php");
?>