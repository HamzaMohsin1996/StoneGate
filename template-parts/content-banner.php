
 <div class="main-banner" style="background:url(<?php the_field('banner_bg_image');?>) no-repeat;background-size: cover;">
         <div class="banner-home">
            <h1><?php the_field('banner_home'); ?></h1>
            <video autoplay loop muted data-autoplay data-keepplaying>
             <source src="<?php the_field('banner_video'); ?>" type="video/mp4">
            </video>
            <a id="single_image" data-fancybox="gallery" href="<?php the_field('pop_up_video')?>"> 
               <img src="<?php the_field('play_img')?>">
            </a>
      </div>
 </div>
<!-- end #banner -->