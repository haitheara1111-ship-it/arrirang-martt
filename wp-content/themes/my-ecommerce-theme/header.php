<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  
</head>
<body <?php body_class(); ?>>
<header>
        <div class="logo">
                <img src="wp-content/themes/my-ecommerce-theme/logo-removebg-preview.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li> 
                    <a href="">Home</a>
                </li>
                
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Shop</a>
                </li>
                <li>
                    <a href="">Products</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
             
            </ul>
                <div class="menu-icons">
            
            <a href=""><i class="fas fa-user"></i></a>
            <a href=""><i class="fa-solid fa-bars"></i></a>
           
        </div>
        </div>
     
    </div>
     
</header>





    <div class="search-container">
    <form action="" method="get" class="search-bar">
        <span class="search-icon"><i class="fas fa-search"></i></span>
        
        <input type="text" placeholder="Search..." name="" class="search-input">
    </form>
</div>
<main>