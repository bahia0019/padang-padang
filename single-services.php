<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Padang_Padang
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'slideshow' ); ?>

			<article>

				<header class="article-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>

				<?php if ( is_active_sidebar( 'services_sidebar' ) ) { ?>

					<section class="entry-content">
					
					<?php } else { ?>

					<section class="entry-content">

				<?php } ?>


						<section class="service-section" id="general-service">
								<?php fsc_figure( 'fsc_general_info_photo', 'medium_large', 'service-thumb', 'service-thumb-caption') ?> 
								<h2><?php the_field( 'fsc_general_info_title' ); ?></h2>
							<?php the_field( 'fsc_general_info_text' ); ?>
							<div class="clear"></div>
						</section>

						<?php get_template_part( 'template-parts/client-reviews' ); ?>

						<section class="service-section" id="areas-served">
								<?php fsc_figure( 'fsc_areas_served_photo', 'medium_large', 'service-thumb', 'service-thumb-caption') ?> 
								<h2 class="service-title"><?php the_field( 'fsc_areas_served_title' ); ?></h2>
							<?php the_field( 'fsc_areas_served_text' ); ?>
							<div class="clear"></div>
						</section>


						<section class="service-section" id="rates">
								<?php fsc_figure( 'fsc_rates_photo', 'medium_large', 'service-thumb', 'service-thumb-caption') ?> 
								<h2 class="service-title"><?php the_field( 'fsc_rates_title' ); ?></h2>
							<?php the_field( 'fsc_rates_text' ); ?>
							<div class="clear"></div>
						</section>

				</section>

				<footer class="article-footer">
				</footer>

			</article>

			<?php endwhile; ?>
			
			<?php get_template_part( 'template-parts/footer-cta' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
