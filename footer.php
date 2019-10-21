<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stonegate
 */

?>

	</div><!-- #content -->
 <footer class="footer-sec section-padding">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6 contactus-content">
                     <?php
                      $footer_sec_head=get_field('footer_sec_head' ,'option');
                      $footer_sec_p=get_field('footer_sec_p' , 'option');

                      ?>
                     <h2><?php echo $footer_sec_head ?></h2>
                     <p><?php echo $footer_sec_p ?></p>
                  </div>
                  <div class="col-sm-6 Conatct-us-form">
                     <ul class="nav nav-tabs ">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#home">Buyers</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#menu1">Builders</a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                           <?php 
                           $form_inner_head = get_field('form_inner_head' , 'option');
                           $form_inner_p = get_field('form_inner_p' , 'option');
                           ?>
                           <div class="form-inner">
                              <h3><?php echo  $form_inner_head ?></h3>
                              <p><?php echo $form_inner_p?></p>
                            <?php echo do_shortcode ('[contact-form-7 id="18" title="Contact form 1"]')?>
                           </div>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                           <div class="form-inner">
                              <h3>Contact Us</h3>
                              <p>777 S.Center St. Studio 105 <br>Reno, NV 89501</p>
                            <?php echo do_shortcode ('[contact-form-7 id="65" title="Builders"]')?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-logo-sec">
               <div class="container">
                  <div class="row">
                     <?php 
                     $footer_logo_sec =get_field('footer_logo_sec', 'option');
                     ?>
                     <a href="#" class="logo-link">
                     <img src="<?php echo  $footer_logo_sec ?>">
                     </a>
                  </div>
               </div>
            </div>
         </footer>
         <div class="copyrights">
            <div class="container">
               <div class="row">
                   <?php 
                     $copyrights =get_field('copyrights', 'option');
                     ?>
                  <p><?php echo $copyrights ?></p>
               </div>
            </div>
         </div>
  
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
