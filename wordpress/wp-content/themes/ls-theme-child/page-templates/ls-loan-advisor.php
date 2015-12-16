<?php
/**
 * Template Name: Layout: LS Loan Advisor
 *
 * @package Listify
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<!-- <div <?php echo apply_filters( 'listify_cover', 'page-cover entry-cover', array( 'size' => 'full' ) ); ?>>
			<h1 class="page-title cover-wrapper"><?php the_title(); ?></h1>
		</div> -->

		<?php do_action( 'listify_page_before' ); ?>
		<!-- Start Top Image with text -->
		<aside id="listify_widget_feature_callout-2" class="listify_widget_feature_callout ls-pages loan-advisor">
			<div class="feature-callout image-pull ls-page-wrap">
				<div class="col-xs-12 col-sm-5  feature-callout-image-pull" style="background-image:url('<?php the_field('ls-image-top'); ?>'); ?>; background-position: center center"></div>
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-sm-offset-6">
						<div class="callout-feature-content" style="color:#717A8F">
							<h1><?php the_field('ls-title-top'); ?></h1>
							<?php the_field('ls-desc-top'); ?>
						</div>
					</div>
				</div>
			</div>
		</aside>
		<!-- End Top Image with text -->

		<div id="primary" class="container ls-contents loan-advisor">
			<div class="content-area">

				<main id="main" class="site-main" role="main">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
					</article>



					<?//php comments_template(); ?>

				</main>

			</div>
		</div>

		<!-- Start Bottom Image with text -->
		<aside class="listify_widget_feature_callout ls-pages">
			<div class="feature-callout image-pull ls-page-wrap">

				<div class="container">
					<div class="col-xs-12 col-sm-6 ">
						<div class="callout-feature-content ls-cont-bot">
							<?php the_field('ls-desc-bot'); ?>
						</div>
					</div>
				</div>

				<div style="background-image:url('<?php the_field('ls-image-bot'); ?>'); ?>; background-position: center top" class="col-xs-12 col-sm-5 col-sm-offset-7 feature-callout-image-pull"></div>

				</div>
		</aside>
		<!-- End Bottom Image with text -->

	<?php endwhile; ?>

<?php get_footer(); ?>
