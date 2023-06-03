<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RAWAS.in</title>
   <?php  wp_head(); ?>
  </head>
  <body>
    
      <div id="slideout-menu">
        <ul>
          <li>
            <a href="<?php  echo site_url('#'); ?>"> HOME</a>
          </li>
          <li>
            <a href="<?php  echo site_url('/Men'); ?>"> MENS</a>
          </li>
          <li>
            <a href="<?php  echo site_url('/Accessories'); ?>"> ACCESSORIES </a>
          </li>
          <li>
            <a  href="/account-page.php"> ACCOUNT</a>
          </li>
          <li>
            <a href="<?php  echo site_url('/Cart'); ?>">
              CART
            </a>
          </li>
          <li>
            <input type="text" placeholder="search here">
            
          </li>
    
        </ul>
      </div>
      <nav>
    
        <div id="logo-img">
          <a href="#">
            <img id="logo_1" src="<?php echo get_template_directory_uri(); ?>/img/white.png" alt=" RAWAS.in logo">
         </a>
        </div>
    
        <div id="menu-icon">
    
          <i class="fas fa-bars">
    
          </i>
        </div>
        <ul>
          <li>
            <a class="active" href="index.html"> HOME</a>
          </li>
          <li>
            <a href="Men.html"> MENS</a>
          </li>
          <li>
            <a href="#"> ACCESSORIES </a>
          </li>
          <li>
          <a href="account-page.php"> ACCOUNT</a>
          </li>
          <li>
            <a href="addtocart.html">
              CART
            </a>
          </li>
          <li>
            <div id="search-icon">
              <i class="fas fa-search"></i>
            </div>
          </li>
    

          
        </ul>
    
      </nav>

       <div id="searchbox">
        <input type="text" placeholder="search here">
    
      </div>  