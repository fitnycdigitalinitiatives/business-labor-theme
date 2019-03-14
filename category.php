<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<section id="primary" class="content-area col-12">
		<main id="main" class="site-main" role="main">


			<header class="page-header">
				<h1>
					<?php single_cat_title(); ?>
				</h1>
			</header><!-- .page-header -->

			<div class="card-columns pt-4" id="post-cards">

				<?php /* Start the Loop */ while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="card text-white">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('large', array('class' => 'card-img')); ?>

              <div class="card-img-overlay d-flex justify-content-center align-items-end rounded">
                <h2 class="text-center mb-0"><?php the_title(); ?></h2>
              </div>
            <?php else: ?>

            <?php endif; ?>
          </a>
				<?php endwhile; ?>

			</div>

			<?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php else : ?>

	<section id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php endif; ?>


<?php
get_footer();
