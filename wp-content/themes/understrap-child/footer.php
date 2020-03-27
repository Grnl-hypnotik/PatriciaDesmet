<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper wrapper-footer d-flex align-items-center" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<footer class="site-footer row" id="colophon">

			<article class="col-6 col-md-2 offset-md-1">

				<h3 class="font-weight-bold text__color--tertiary">Menu</h3>

				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-footer',
						'container_class' => 'menu-footer',
						'menu_class' => 'nav flex-column' ) );
				?>

			</article>

			<article class="col-6 col-md-2">

				<h3 class="font-weight-bold text__color--tertiary">Contactez moi</h3>

				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-contact',
						'container_class' => 'menu-contact',
						'menu_class' => 'nav flex-column' ) );
				?>

			</article>

		</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

