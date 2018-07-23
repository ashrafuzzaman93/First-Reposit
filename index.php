<?php get_header(); ?>
				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
						<?php
							$query	= new WP_Query(array(
								'post_type'			=> 'post',
								'posts_per_page'	=> 1,
							));

							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
									get_template_part('template-parts/posts/post', 'big');
								endwhile;
							endif;
						?>

						<!-- Posts -->
							<section class="posts">

							<?php
								if ( have_posts() ) :
									while ( have_posts() ) : the_post();

										get_template_part('template-parts/posts/post', 'small');

									endwhile;
							?>
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<?php 
										the_posts_pagination( array(
											'screen_reader_text'	=> ' ',
											'prev_text'	=> 'Prev',
										) ); 
									?>
									<!-- <a href="#" class="previous">Prev</a>
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a> -->
								</div>
							</footer>
							<?php else: ?>
								<h1><?php _e('Nothing Post Found!!', 'massively'); ?></h1>
							<?php endif; ?>

					</div>

<?php get_footer(); ?>