<div class="section-padding gallery-section">
	<div class="container">
		<div class="row">
			<div class="heading-wrapper">
				<h2><?php the_field('heading_wrapper_head')?></h2>
				<p><?php the_field('heading_wrapper_p')?></p>
			</div>
			<div class="gallery-wrapper">
				<div class="row no-gutters">
					<?php while (have_rows('gallery_wrapper')){
						the_row();
					 ?>
				     <div class="col-md-4 col-sm-6">
						<a href="#">		
							<img src="<?php the_sub_field('gallery_wrapper_bg_image')?>" alt="no-image">
							<div class="gallery-text">
								<h2><?php the_sub_field('gallery_wrapper_head')?></h2>
								<p><?php the_sub_field('gallery_wrapper_p')?></p>
							</div>
						</a>
					</div>
				<?php } ?>
			   </div>
			</div>
		</div>
	</div>
</div>