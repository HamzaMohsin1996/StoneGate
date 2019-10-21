<?php
//Template Name:live-here-template
get_header();
?>

      <?php
      while ( have_posts() ) :
         the_post();

         get_template_part( 'template-parts/content', 'banner' );

         // If comments are open or we have at least one comment, load up the comment template.
         if ( comments_open() || get_comments_number() ) :
            comments_template();
         endif;

      endwhile; // End of the loop.
      ?>
         <!-- end #banner -->
         <section class="section-padding inner-small-grid-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-12">
                     <img src="<?php echo get_field('inner_small_img');?>" alt="stone-gate">
                  </div>
                  <div class="col-md-8 col-sm-12 mb-0">
                     <p><?php the_field('inner_small_p');?></p>
                  </div>
               </div>
            </div>
         </section>
         <!-- end #inner-small-grid-section-->
         <div class="live-build-here">
            <div class="container-fluid p-0">
               <div class="row no-gutters">
                  <div class="col-sm-6">
                     <img src="<?php the_field('Live_Build_Here_img1') ?>" alt="happy-child">
                  </div> 
                   <div class="col-sm-6 green-bg">
                     <div class="text-wrapper">
                        <h2><?php the_field('live_build_here_h1') ?></h2>
                        <p><?php the_field('live_build_here_p') ?><p>
                        <a href="#" class="hvr-float">More Information</a>
                     </div>
                  </div>
               </div>
               <div class="row no-gutters">
                   <div class="col-sm-6 yellow-bg">
                        <div class="text-wrapper">
                        <h2><?php the_field('live_build_here_h2'); ?></h2>
                        <p><?php the_field('live_build_here_p2'); ?></p>
                        <a href="#" class="hvr-float">More Information</a>
                     </div>
                  </div>
                   <div class="col-sm-6">
                     <img src="<?php the_field('live_build_here_img2') ?>" alt="happy-child">
                              
                  </div>
               </div>
            </div>
         </div>
          <!-- end #live-build-here -->
      

<?php get_footer()?>