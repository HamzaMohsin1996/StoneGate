<?php
//Template Name:build-here-template
get_header();
?>
   <?php
      while ( have_posts() ) :
         the_post();

         get_template_part( 'template-parts/content', 'banner' );

      endwhile; // End of the loop.
      ?>
   <div class="section-padding text-description right-collage mb-0">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2><?php the_field('text_description_head')?></h2>
				<p><?php the_field('text-description_')?><p>
			</div>
			<div class="col pr-0 text-description-banner ml-auto">
				<img loading="lazy" src="<?php the_field('text_description_banner_img') ?>">
			</div>
		</div>
	</div>
</div>
         <?php
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', 'venture' );

            endwhile; // End of the loop.
            ?>

               <div class="section-padding Times-map" style="background:url(<?php the_field('markeet_value_bg_img')?>) no-repeat;background-size: cover;">
            <div class="container">
               <div class="row">                 
                  <div class="col-md-6 pl-0  tab-content  map-area">
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <?php
                            $i = 0;
                         while(have_rows('venture_ul_time')){
                              the_row();
                               $nav_links_image_time =get_sub_field('nav_links_image_time');
                                $nav_links_time = get_sub_field('nav_links_time');
                                ?>
                                <?php 
                                 if ($i == 0) {
                                 
                                     echo '<div id="'.$nav_links_time.'"  class="tab-pane active">';
                                 } else {
                                     echo '<div id="'.$nav_links_time.'"  class="tab-pane fade">';
                                 }
                                 $i++;
                                 ?>
                                 <img src="<?php echo $nav_links_image_time ?>" alt="Vicinity-img">
                               </div>
                            <?php }?>
                     </div>
                 </div>
                       <div class="col-md-6 green-bg">
		                 <h2><?php the_field('times_new')?></h2>
		                     <p><?php the_field('times_new_p')?></p>
		                     <ul class="nav nav-tabs venture-ul pr-0">
		                        <?php while(have_rows('venture_ul_time')){
		                              the_row();
		                              $nav_links_time = get_sub_field('nav_links_time');
		                              $nav_links_title_time = get_sub_field('nav_links_title_time');
		                           ?>
		                        <li class="nav-item">
		                           <a class="nav-link" data-toggle="tab" href="#<?php echo $nav_links_time?>"><i></i><?php echo $nav_links_title_time ?></a>
		                        </li>
		                         <?php }?>
		                     </ul>
		                  </div>
                  </div>
              
               </div>
            </div>
               <?php
             while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content', 'gallery' );

            endwhile; // End of the loop.
            ?>
<?php get_footer()?>