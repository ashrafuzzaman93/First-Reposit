<?php get_header(); ?>
	<!-- Main -->
	<div id="main">

		<!-- Post -->
			<section class="post">
				<?php  
					if ( have_posts() ) : 
						while ( have_posts() ) :
							the_post();
				?>
				<header class="major">
					<span class="date"><?php echo get_the_date('M d, Y') ?></span>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="image main">
					<?php  
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( '', ['alt'	=> get_the_title()] );
						} else {
							echo '<img src="'. get_theme_file_uri() .'/images/pic02.jpg" alt="'. get_the_title() .'" />';
						}
					?>
				</div>
				<?php the_content(); ?>

				<?php  
						endwhile;
					endif;
				?>
			</section>

	</div>
<?php get_footer(); ?>