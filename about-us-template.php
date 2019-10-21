<?php
//Template Name:about-us-template
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
         <div class="section-padding inner-small-grid-section">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-7 col-sm-12">
                     <h2><?php the_field('inner_small_grid_section_head')?></h2>
                     <p><?php the_field('inner_small_grid_section_p')?></p>
                  </div>
                  <div class="col-md-5 col-sm-12 mb-0">
                     <a href="">
                        <img src="<?php the_field('inner_small_grid_section_img')?>">
                     </a>
                  </div>
               </div>
            </div>
         </div>
          <!-- end #inner-small-grid-section -->
          <div class="section-padding about-section" style="background: #f5f8f6 url('<?php the_field('about_section_bg_img')?>') no-repeat left top 300px;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-6 col-sm-12">
                     <img src="<?php the_field('about_section_img1')?>">
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <h2><?php the_field('about_section_h1')?></h2>
                     <p><?php the_field('about_section_p1')?></p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <h2><?php the_field('about_section_h2')?> </h2>
                     <p><?php the_field('about_section_p2')?> </p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <img src="<?php the_field('about_section_img2')?>">
                  </div>
               </div>
            </div>
         </div>
      <!-- end #about-section -->
      <div class="section-padding the-team text-center">
         <div class="container">
            <div class="row">
            	<?php while(have_rows('the_team')){
            		the_row();
            	?>
               <div class="col-sm-6 col-12">
                  <img src="<?php the_sub_field('the_team_img')?>">
                  <h2><?php the_sub_field('the_team_head')?></h2>
                  <p><?php the_sub_field('the-team_p')?></p>
               </div>
           <?php } ?>
            </div>
         </div>
      </div>
      <!-- end #the-team -->


<?php get_footer()?>