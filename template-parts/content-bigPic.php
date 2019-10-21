          <div class="section-padding gallery-section">
            <div class="container">
               <div class="row">
                  <div class="heading-wrapper">
                     <h2><?php the_field('gallery_section_head')?></h2>
                     <p><?php the_field('gallery_section_p')?></p>
                  </div>
                  <div class="gallery-wrapper">
                     <div class="row no-gutters ">
                        <?php while(have_rows('gallery_wrapper')){
                           the_row();
                           $gallery_wrapper_bg_img = get_sub_field('gallery_wrapper_bg_img');
                           $gallery_wrapper_head = get_sub_field('gallery_wrapper_head');
                           $gallery_wrapper_p = get_sub_field('gallery_wrapper_p');
                        ?>
                        <div class="col-md-4 col-sm-6">
                           <a href="#">
                              <img src="<?php  echo $gallery_wrapper_bg_img ?>" alt="gal-img-1">  
                              <div class="gallery-text">
                                 <h2><?php echo $gallery_wrapper_head ?></h2>
                                 <p><?php echo $gallery_wrapper_p  ?></p>
                              </div>
                           </a>
                        </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>