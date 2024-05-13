<?php
/**
 * The front page template file.
 *
 * The front-page.php template file is used to render your site’s front page,
 * whether the front page displays the blog posts index (mentioned above) or a static page.
 * The front page template takes precedence over the blog posts index (home.php) template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package OnePress
 */

get_header();

$layout = onepress_get_layout();

    /**
     * @since 2.0.0
     * @see onepress_display_page_title
     */
    do_action( 'onepress_page_before_content' );

	$shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );

    ?>
	<div id="content" class="site-content">
        
        
			<div id="primary" class="content-area">
				<main id="main" class="site-main w-full" role="main">

					
					<!-- Start introduction -->
					<div class="container mx-auto">
									<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
										<div class="mx-auto max-w-screen-md">
											<h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Lorem ipsum dolor sit amet <span class="text-secondary text-blue-900">Consectetur Adipiscing </span> elit aliquet malesuada leo
												with <span class="text-primary">Pretium Nisi</span>.</h1>
											<p class="text-gray-600 text-xl font-medium mb-10">Mauris luctus tincidunt nulla ac fermentum. Phasellus dolor erat, vestibulum ac erat ac, iaculis interdum felis.</p>
											<a href="<?php echo $shop_page_url; ?>"
												class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">Shop Now</a>
										</div>
									</div>


						
					<div class="container mx-auto my-8">

						<?php echo do_shortcode('[product_page id="22"]'); ?>

						<?php if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) :
								the_post();
								?>

								<?php //get_template_part( 'template-parts/content', get_post_format() ); ?>

							<?php endwhile; ?>

						<?php endif; ?>

					</div>


				</main>
			</div>

            

		
	</div>

<?php get_footer(); ?>
