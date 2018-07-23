<!-- Posts -->
<article <?php post_class(); ?>>
	<header>
		<span class="date"><?php echo get_the_date('M d, Y'); ?></span>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<a href="<?php the_permalink(); ?>" class="image fit">
		<?php  
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else {
				echo '<img src="'. get_theme_file_uri() .'/images/pic02.jpg" alt="'. get_the_title() .'" />';
			}
		?>
	</a>
	<p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
	<ul class="actions special">
		<li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
	</ul>
</article>