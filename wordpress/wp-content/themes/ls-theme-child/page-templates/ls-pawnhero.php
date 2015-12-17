<?php
/**
 * Template Name: Layout: LS Pawnhero
 *
 * @package Listify
 */

get_header(); ?>


  <section class="video-inline pawnhero">
      <div class="container">
        <div class="row">
          <div style="margin-bottom: 50px;" class="col-md- text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/bestloansolutionsph.svg" alt="LoanSolutions.ph" style="width: 250px; margin-bottom: 30px;"/><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pawnhero-logo.png" alt="LoanSolutions.ph" style="width: 150px; margin-left: 25px; margin-bottom: 30px;"/></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h1 class="space-bottom-medium">Get a Loan without minimum income, co-borrower, or document requirements</h1>
            <p class="lead space-bottom-medium">Use your Luxury Watches, Jewelry, Designer Handbags, Cameras, Apple Products and other Gadgets to get the money you need fast. No hassle and low interest rates guaranteed.</p><a href="http://pawnhero.ph/?partner=ls&amp;utm_source=LoanSolutions&amp;utm_medium=LoanSolutions&amp;utm_campaign=LoanSolutions" class="btn btn-danger btn-lg js-link-pawnhero">Get your free estimate now &raquo;</a>
          </div>
          <div class="col-md-6 col-sm-12">
            <iframe width="560" height="360" src="https://www.youtube.com/embed/vcUVZ8joAP8?rel=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="timeline-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-head">What is PawnHero and how can it help me?</h2>
            <p class="lead">PawnHero.ph is an online pawnshop where anyone can submit a pawn request anytime, anywhere. Unlike brick-and-mortar pawnshops, PawnHero offers lower interest rates — up to half of what traditional pawnshops in the Philippines offer! It also guarantees zero service charge and no hidden costs or penalty fees for late payment or loan renewals.</p>
            <p class="lead">Pawnhero.ph is the first online pawnshop in Southeast Asia. It launched first in the Philippines to offer lower interest rates in the country and a higher appraisal for a wider variety of items than currently accepted by traditional pawnshops; such as musical instruments, jewelry, gadgets, luxury goods, equipment and more.</p>
          </div>
        </div>
        <div style="margin-top: 50px;" class="row">
          <div class="col-md-4">
            <div class="feature feature-icon-large text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/how_hero_works-1.jpg" alt=""/>
              <h5>Get a free estimate</h5>
              <p>Take photos and describe your item(s) to get a fair estimate. Accept to schedule a free and fully insured pick-up.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature feature-icon-large text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/how_hero_works-2.jpg" alt=""/>
              <h5>Get cash</h5>
              <p>We'll deposit your cash the same day we receive and assess your item(s) to your PawnHero Card or bank account.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature feature-icon-large text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/how_hero_works-3.jpg" alt=""/>
              <h5>Get your item(s) back</h5>
              <p>When you repay your loan, we'd ship back your item(s), again fully insured and free of shipping cost!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pure-text-centered" style="background-color:#f5fcf9">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Items that we accept</h2>
            <p class="lead" style="font-size:16px; line-height:30px">At PawnHero.ph, we accept a wide variety of personal items such as jewelry, precious metals, gemstones, luxury items, etc. Unlike brick-and-mortar pawnshops we also accept personal valuables like gadgets, musical instruments, and more. Use your personal items as collateral for a loan now.<br/>For a full list of items we accept, see below.</p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pawn-items.jpg" alt="Items that we accept" style="width: 900px;"/>
          </div>
        </div>
      </div>
    </section>
    <section class="pure-text-centered">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
            <h2>Let’s start with pictures of your item</h2>
            <p class="lead" style="font-size:16px; line-height:30px">Take up to 5 pictures from different angles, using your camera OR browse your files.</p><a href="http://pawnhero.ph/?partner=ls&amp;utm_source=LoanSolutions&amp;utm_medium=LoanSolutions&amp;utm_campaign=LoanSolutions" class="js-link-pawnhero"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pawnhero-browse-item.jpg" alt=""/></a>
          </div>
        </div>
      </div>
    </section>


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
<script src="https://www.youtube.com/iframe_api"></script>