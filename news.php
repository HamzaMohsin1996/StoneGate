<?php
//Template Name:News-template
get_header();

?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'banner' );


		endwhile; // End of the loop.
		?>


<!-- using WP_Query function for display posts of specific category -->
	<section class="section-padding blog-wrapper text-description right-collage mb-0">
		<?php

		$news_posts = new WP_Query( 'cat=6&posts_per_page=1' );

		// OR we can use
		// $news_posts = new WP_Query( array('cat' => '4', 'posts_per_page ' => '2') );
		// store the value of array in a variable
		// $info = array('cat' => '4', 'posts_per_page ' => '2')
		// $news_posts = new WP_Query( $info );


		while ( $news_posts->have_posts() ) :
			$news_posts->the_post(); ?>
       <div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3><small>Latest Article</small></h3>
					<h3><?php the_title()?></h3>
					<div class="post-content"><?php the_excerpt(); ?></div>
					<div class="pt-3 next-prev-articles">
					<a href="<?php the_permalink()?>">More Information</a>
				</div>
				</div>
				<div class="col-md-6 post-thumbnail">
					<div class="pr-0 text-description-banner ml-auto "><?php the_post_thumbnail(); ?></div>
				</div>
			</div>
			<br>
		</div>

			
			

			<?php // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
	</section>
	<!-- specific category ends here -->
	<div class="section-padding text-center blog-articles">
			<div class="container">
				<div class="row">					
				   <div class="col-md-6 col-lg-4 col-12">
							<div class="card">
								<a href="<?php the_permalink();  ?>" >
									<?php the_post_thumbnail(); ?>
									
								</a>
								<h4><?php the_title(); ?></h4>
									<?php the_excerpt(); ?>
							</div>
						</div>	
				</div>
				<div class="custom-pagination text-center">					
					<div class="wp-pagenavi" role="navigation">
<span aria-current="page" class="current">1</span><a class="page larger" title="Page 2" href="http://stonegatereno.com/news/page/2/">2</a><a class="nextpostslink" rel="next" href="http://stonegatereno.com/news/page/2/">»</a>
</div>				</div>
			</div>
		</div>

<!-- <div class="section-padding blog-wrapper text-description right-collage mb-0">
			<div class="container">
				<h3><small>Latest Article</small></h3>
				<div class="row mt-3">
					<div class="col">
						<h2></h2>
						<p></p>
						<div class="pt-3 next-prev-articles">
							<a href="http://stonegatereno.com/reno-just-got-ranked-the-no-2-best-city-to-buy-a-family-home-howd-that-happen/">More Information
							<img loading="lazy" src="http://stonegatereno.com/wp-content/themes/stonegate/assets/images/arrow-right-pink.png" alt="" data-lazy-src="http://stonegatereno.com/wp-content/themes/stonegate/assets/images/arrow-right-pink.png" class="lazyloaded" data-was-processed="true"><noscript><img src="http://stonegatereno.com/wp-content/themes/stonegate/assets/images/arrow-right-pink.png" alt=""></noscript></a>
						</div>
					</div>
					<div class="col pr-0 text-description-banner ml-auto">
						<img loading="lazy" src="http://stonegatereno.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-10-at-1.38.48-PM.png" alt="" data-lazy-src="http://stonegatereno.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-10-at-1.38.48-PM.png" class="lazyloaded" data-was-processed="true"><noscript><img src="http://stonegatereno.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-10-at-1.38.48-PM.png" alt=""></noscript>
					</div>
				</div>

			</div>
		</div>
		
			</div>
		</div> -->


<?php get_footer()?>