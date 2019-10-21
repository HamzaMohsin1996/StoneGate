<div class="venture-out section-padding" style="background:url(<?php the_field('venture_out_bg_img')?>) no-repeat;background-size: cover;">
   <div class="container">
      <div class="row">
         <div class="col-md-6 yellow-bg">
            <h2><?php the_field('venture_out_yellow_bg_head')?></h2>
            <p><?php the_field('venture_out_yellow_bg_p')?></p>
            <ul class="nav nav-tabs venture-ul pr-0">
               <?php while(have_rows('venture_ul')){
                  the_row();
                  $nav_links = get_sub_field('nav_links');
                  $nav_links_title = get_sub_field('nav_links_title');
                  ?>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#<?php echo $nav_links?>"><i></i><?php echo $nav_links_title ?></a>
               </li>
               <?php }?>
            </ul>
         </div>
         <div class="col-md-6 pl-0">
          <div class="tab-content">
            <!-- Tab panes -->
             <?php
                  $i = 0;
                  while(have_rows('venture_ul')){
                    the_row();
                     $nav_links_image =get_sub_field('nav_links_image');
                      $nav_links = get_sub_field('nav_links');
                     
                      ?>
                  
               <?php
                  if ($i == 0) {
                  
                      echo '<div id="'.$nav_links.'"  class="tab-pane active">';
                  } else {
                      echo '<div id="'.$nav_links.'"  class="tab-pane fade">';
                  }
                  $i++;
                  ?>
               <img src="<?php echo $nav_links_image ?>" alt="Vicinity-img">
              </div>
            <?php }?>
          </div>
          
         </div>
      </div>
   </div>
</div>