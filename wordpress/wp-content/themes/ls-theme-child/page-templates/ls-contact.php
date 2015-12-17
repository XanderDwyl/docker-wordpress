<?php
/**
 * Template Name: Layout: LS Contact
 *
 * @package Listify
 */

get_header(); ?>

<div class="main-container">
      <section src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1962.6098453297718!2d123.90907918532582!3d10.324295757382986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99917f05d760d%3A0xb1f318aef8b60cfb!2sCrown+7%2C+Pope+John+Paul+II+Ave%2C+Cebu+City%2C+Cebu!5e0!3m2!1sen!2sph!4v1433414800706" class="map-overlay">
        <div class="map-holder">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1962.6098453297718!2d123.90907918532582!3d10.324295757382986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99917f05d760d%3A0xb1f318aef8b60cfb!2sCrown+7%2C+Pope+John+Paul+II+Ave%2C+Cebu+City%2C+Cebu!5e0!3m2!1sen!2sph!4v1433414800706"></iframe>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
              <div class="details-holder">
                <div class="align-vertical"><img alt="Logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-light.png">
                  <p class="lead">hello@loansolutions.ph<br>(+6332) 231-0463</p>
                  <p>8th Flr, Crown 7 Building, Juan Luna Ave.,<br>Mabolo Cebu City, 6000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section style="display:none" class="pure-text-contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center"><i style="margin-bottom: 25px;" class="icon icon-map icon-jumbo"></i>
              <h2>We are here to answer your questions as best as we can.We give assistance in matters concerning the website and its services. We are also willing to hear your thoughts, feedback, suggestions etc. Please, contact  us via email or you can visit us on our main office.</h2>
            </div>
          </div>
        </div>
      </section>
    </div>

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="primary" class="container">
			<div class="content-area" style="margin:0; padding:0">

				<main id="main" class="site-main" role="main">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
					</article>



					<?//php comments_template(); ?>

				</main>

			</div>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>
