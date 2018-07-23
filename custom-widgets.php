<?php
	
	function massively_register_widgets() {
		register_widget('massively_address');
	}
	add_action( 'widgets_init', 'massively_register_widgets' );

	class massively_address extends WP_Widget {
		public function __construct() {
			$des = array(
				'description'	=> __( 'Input your address.', 'massively' )
			);
			parent::__construct( 'hello', 'Massively Addess Widget', $des );
		}


		public function widget( $args, $instance ) {
	?>
		<section class="split contact">
			<section class="alt">
				<h3>Address</h3>
				<p style="line-height: 20px;"><?php echo !empty($instance['addr']) ? $instance['addr'] : ''; ?></p>
			</section>
			<section>
				<h3>Phone</h3>
				<p><a href="<?php echo !empty($instance['phn']) ? 'tel:'.$instance['phn'] : '#'; ?>"><?php echo !empty($instance['phn']) ? $instance['phn'] : ''; ?></a></p>
			</section>
			<section>
				<h3>Email</h3>
				<p><a href="<?php echo !empty($instance['mail']) ? 'mailto:'.$instance['mail'] : '#'; ?>"><?php echo !empty($instance['mail']) ? $instance['mail'] : ''; ?></a></p>
			</section>
			<section>
				<h3>Social</h3>
				<ul class="icons alt">
					<?php if ( !empty( get_theme_mod('massively_fb_text') ) ) : ?>
						<li><a href="http://<?php echo get_theme_mod('massively_fb_text'); ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_twitter_text') ) ) : ?>
						<li><a href="http://<?php echo get_theme_mod('massively_twitter_text'); ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_ins_text') ) ) : ?>
						<li><a href="http://<?php echo get_theme_mod('massively_ins_text'); ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<?php endif; ?>

					<?php if ( !empty( get_theme_mod('massively_git_text') ) ) : ?>
						<li><a href="http://<?php echo get_theme_mod('massively_git_text'); ?>" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					<?php endif; ?>
				</ul>
			</section>
		</section>

	<?php
		}

		public function form( $instance ) {
	?>
	
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
			<input type="text" name="<?php echo $this->get_field_name('title') ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo !empty($instance['title']) ? $instance['title'] : '' ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('addr') ?>">Address</label>
			<!-- <input type="text" name="" id="" value="" class="widefat"> -->
			<textarea name="<?php echo $this->get_field_name('addr'); ?>" id="<?php echo $this->get_field_id('addr'); ?>" rows="3" class="widefat"><?php echo !empty($instance['addr']) ? $instance['addr'] : '' ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('phn'); ?>">Phone: </label>
			<input type="text" name="<?php echo $this->get_field_name('phn'); ?>" id="<?php echo $this->get_field_id('phn'); ?>" value="<?php echo !empty($instance['phn']) ? $instance['phn'] : ''; ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('mail'); ?>">Email: </label>
			<input type="text" name="<?php echo $this->get_field_name('mail'); ?>" id="<?php echo $this->get_field_id('mail'); ?>" value="<?php echo !empty($instance['mail']) ? $instance['mail'] : ''; ?>" class="widefat">
		</p>
		
	<?php
		}
	} 
	?>