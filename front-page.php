<?php get_header()?>
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
          <?php
             $gallery_head = get_field('gallery_head');
             $gallery_p = get_field('gallery_p');
             $gallery_img = get_field('gallery_img');
           ?>
         <div class="gallery section-padding">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col">
                     <h2><?php echo  $gallery_head ?></h2>
                     <p><?php echo $gallery_p ?></p>
                  </div>
                  <div class="col pr-0">
                     <img src="<?php echo $gallery_img ?>"> 
                  </div>
               </div>
            </div>
         </div>
         <!-- end #gallery -->
         <?php 
         $life_at_stonegate_head = get_field('life_at_stonegate_head');
         $life_at_stonegate_img = get_field('life_at_stonegate_img');
         ?>
         <div class="life-at-stonegate section-padding">
            <h2><?php echo $life_at_stonegate_head?></h2>
            <div class="container">
               <div class="row">
                  <div class="col pl-0">
                     <img src="<?php echo $life_at_stonegate_img ?>" alt="Left-img">
                  </div>
                  <div class="col">
                     <?php while (have_rows('life_at_stonegate_desc')){
                        the_row();
                        $life_at_stonegate_desc_head = get_sub_field('life_at_stonegate_desc_head');
                        $life_at_stonegate_desc_p = get_sub_field('life_at_stonegate_desc_p')
                      ?>
                     <div class="life-at-stonegate-desc">
                        <h3><?php echo $life_at_stonegate_desc_head ?></h3>
                        <p><?php echo  $life_at_stonegate_desc_p ?></p>
                     </div>
                  <?php } ?>
                  </div>
               </div>
            </div>
         </div>
         <!-- end life-at-stonegate -->
          <?php
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', 'venture' );

            endwhile; // End of the loop.
            ?>

          <?php
             while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', 'gallery' );

            endwhile; // End of the loop.
            ?>
         </div>
         <!-- end life-at-stonegate -->
        <?php get_footer()?>