<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<div class="jumbotron" id="home-jumbotron">
				<h1 class="font-italic mb-4" id="home-title">Teaching Business and Labor History to Art and Design Students</h1>
				<p class="lead mb-0">Welcome to the project site for <em>Teaching Business and Labor History to Art and Design Students</em>, an NEH-funded project to create curriculum for art and design students in order to educate them on the history of working as an artist or designer. On this site, you can find information on the development of this project, as well as a collection of resources, curricular materials and academic studies developed for this project.</p>
			</div>

      <?php if ($featured_posts = get_posts(array('category_name' => 'Featured'))): ?>
        <div class="card-columns" id="featured-posts">
        <?php foreach ( $featured_posts as $post ) : setup_postdata( $post ); ?>
          <a href="<?php the_permalink(); ?>" class="card text-white">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('large', array('class' => 'card-img')); ?>

              <div class="card-img-overlay d-flex justify-content-center align-items-end rounded">
                <h2 class="text-center mb-0"><?php the_title(); ?></h2>
              </div>
            <?php else: ?>

            <?php endif; ?>
          </a>

        <?php endforeach; ?>
        </div>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>

      <?php endif; ?>



    </main><!-- #main -->
  </section><!-- #primary -->

<?php
get_footer();
