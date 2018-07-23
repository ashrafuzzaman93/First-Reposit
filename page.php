<?php get_header(); ?>
	<!-- Main -->
	<div id="main">
		<!-- Featured Post -->
		<?php

			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			endif;
		?>
	</div>

<?php get_footer(); ?>