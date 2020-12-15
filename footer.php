<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part('footer-widget'); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?> mt-auto small" role="contentinfo">
		<div class="container pt-5 pb-5">
      <div class="row justify-content-between">
				<div class="col-md-5 text-center">
					<img class="mb-3" src="<?php echo get_template_directory_uri() . '/inc/assets/images/NEH-Preferred-Seal.png'; ?>" alt="National Endowment for the Humanities Logo" id="neh-logo">
					<p class="font-italic text-left">Teaching Business and Labor History to Art and Design Students has been made possible in part by a major grant from the National Endowment for the Humanities: Humanities Connections Implementation Grants.</p>
					<p  class="text-left">NEH Policy Statement: Any views, findings, conclusions, or recommendations expressed in this Web resource, do not necessarily represent those of the National Endowment for the Humanities</p>
				</div>
				<div class="col-md-5 text-center">
					<img class="my-3" src="<?php echo get_template_directory_uri() . '/inc/assets/images/wordmark-black-1-line.png'; ?>" alt="FIT SUNY Logo" id="fit-suny-logo">
					<p>
						&copy;<?php echo date("Y"); ?> Fashion Institute of Technology
						<br>
						All rights reserved.
					</p>
					<p class="text-left">The views, opinions, and conclusions expressed in this page are those of the author or organization and not necessarily those of the Fashion Institute of Technology or its officers and trustees. The author or organization is solely responsible for its content.</p>
				</div>
      </div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
