<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stonegate
 */

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Assets/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700&display=swap" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Assets/css/jquery.fancybox.min.css">
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Assets/css/style.css">
   </head>
   <body>
      <div id="wrapper">
           <?php wp_body_open(); ?>
         <header  id="header" >
            <div class="container-fluid">
               <div id="menu-wrap">
                  <nav class="navbar navbar clearfix padding-container">
                     <div class="navbar-header"  id="logo-bg">
                        <?php 
                        $header_logo = get_field('header_logo' , 'option');
                        ?>
                        <a class="navbar-brand logo-align" href="<?php bloginfo('url')?>"><img src="<?php echo  $header_logo?>" alt="logo-img"></a>
                     </div>
                     <button type="button" class="navbar-toggle d-md-block d-lg-none" data-target="#myNavbar" onclick="openNavigation()">
                     <span class="bar1 bar"></span>
                     <span class="bar2 bar"></span>
                     <span class="bar3  bar"></span>
                     </button>
                     <!-- <div id="mySidenav" class=""> -->
                     <div class=" navbar-collapse sidenav-1 clearfix " id="myNavbar-1">
                        <?php 
                        wp_nav_menu(array('theme_location' => 'header_menu' , 'menu_class' => 'nav navbar-nav nav-ul'));
                        ?>
                        <!-- <ul class="nav navbar-nav nav-ul">

                           <li><a href="#">Live here</a></li>
                           <li><a href="#">Build Here</a></li>
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">News</a></li>
                           <li><a href="#">FAQs</a></li>
                           <li><a href="#">Contact Us</a></li>
                        </ul> -->
                     </div>
                     <!-- </div> -->
                  </nav>
               </div>
            </div>
         </header>
         <!-- end #Haeder -->
            </div>
      <!-- end #wrapper -->
      <script src="<?php bloginfo('template_url'); ?>/Assets/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/Assets/js/jquery.fancybox.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/Assets/js/jquery.fancybox.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/Assets/js/custom.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/Assets/js/bootstrap.min.js"></script>
   </body>
</html>
