			<!-- Footer -->
			<footer id="footer">
				<?php dynamic_sidebar('footer_sidebar'); ?>
			</footer>

			<!-- Copyright -->
			<div id="copyright">
				<ul>
					<?php 
						$def = 'Copyright &copy; '. get_the_date('Y') . ' ' . get_bloginfo('name') . '. All Rights Reserved.';
						echo get_theme_mod( 'footer_text_option', $def ); 
					?>
				</ul>
			</div>
		</div>
	<?php wp_footer(); ?>
	</body>
</html>