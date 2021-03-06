<?php
/**
 * The template for displaying search results pages.
 *
 * @package winespace
 */
?>

	<?php  
	
		$post_type = get_query_var( 'post_type', '' );
		if($post_type != 'domaine') {
			wp_redirect( home_url(), 301 );
			exit;
		}
		
		else {
		
			if ( isset( $post_type ) && locate_template( 'search-' . $post_type . '.php' ) ) {
			  get_template_part( 'search', $post_type );
			  exit;
			} 
			
			else {
		
	?>
	
			<?php get_header(); ?>
		
				<section id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
			
					<?php if ( have_posts() ) : ?>
			
						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'winespace' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->
						
						<?php get_template_part( 'loop' ); ?>
			
					<?php else : ?>
			
						<?php get_template_part( 'content', 'none' ); ?>
			
					<?php endif; ?>
			
					</main><!-- #main -->
				</section><!-- #primary -->
			
			<?php do_action( 'winespace_sidebar' ); ?>
			<?php get_footer(); ?>

	<?php } ?>	
			
<?php } ?>