<?php
/**
 * Class to create a Customizer control for displaying information
 */
class More_winegrower_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<p>
				<?php
					printf( __( 'There\'s a range of winegrower extensions available to put additional power in your hands. Check out the %swinegrower%s page in your dashboard for more information.', 'winegrower' ), '<a href="' . esc_url( admin_url() . 'themes.php?page=winegrower-welcome#add-ons' ) .'">', '</a>' );
				?>
			</p>

			<span class="customize-control-title"><?php _e( 'Enjoying winegrower?', 'winegrower' ); ?></span>
			<p>
				<?php
					printf( __( 'Why not leave us a review on %sWordPress.org%s?  We\'d really appreciate it!', 'winegrower' ), '<a href="https://wordpress.org/themes/winegrower">', '</a>' );
				?>
			</p>
		</label>
		<?php
	}
}