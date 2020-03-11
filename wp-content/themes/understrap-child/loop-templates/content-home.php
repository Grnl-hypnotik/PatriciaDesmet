<?php
/**
 * Partial template for content in customPage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title d-none">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<section class="vh-100">

			<article class="row">

				<?php
					$custom_query = new WP_Query(array(
						'post_type'=>'post',
						'category_name'=>'article_un'
					));
				?>

				<?php if ($custom_query->have_posts()) :
					while ($custom_query->have_posts()) :
					$custom_query->the_post();
				?>

				<section class="col-12">
					<article class="row">
						<div class="content"><?php echo get_the_content(); ?></div>
					</article>
				</section>

				<?php
					endwhile; endif;
					wp_reset_postdata();
				?>

			</article><!-- .article1 -->

		</section>

		<section class="vh-100 d-flex align-items-center">

			<article class="row">

				<?php
					$custom_query = new WP_Query(array(
						'post_type'=>'post',
						'category_name'=>'article_deux'
					));
				?>

				<?php if ($custom_query->have_posts()) :
					while ($custom_query->have_posts()) :
					$custom_query->the_post();
				?>

				<section class="col-12">
					<div class="block__text">
						<h2 class="font-weight-bold"><?php echo get_the_title($custom_query->post->ID); ?></h2>
						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					</div>
				</section>

				<?php
					endwhile; endif;
					wp_reset_postdata();
				?>

			</article><!-- .article2 -->

		</section>

		<section class="vh-100 d-flex align-items-center">

			<article class="row">

				<?php
					$custom_query = new WP_Query(array(
						'post_type'=>'post',
						'category_name'=>'article_trois'
					));
				?>

				<?php if ($custom_query->have_posts()) :
					while ($custom_query->have_posts()) :
					$custom_query->the_post();
				?>

					<article class="col-12">
						<div class="block__text">
							<h2 class="font-weight-bold"><?php echo get_the_title($custom_query->post->ID); ?></h2>
							<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
						</div>
					</article>

				<?php
					endwhile; endif;
					wp_reset_postdata();
				?>

			</article><!-- .article3 -->

		</section>

		<section class="vh-100 d-flex align-items-center">

			<article class="row">

				<section class="col-12">

					<?php
						$custom_query = new WP_Query(array(
							'post_type'=>'post',
							'category_name'=>'article_quatre'
						));
					?>

					<?php if ($custom_query->have_posts()) :
						while ($custom_query->have_posts()) :
						$custom_query->the_post();
					?>
					<div class="block__text">
						<h2 class="font-weight-bold"><?php echo get_the_title($custom_query->post->ID); ?></h2>
						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					</div>

					<?php
						endwhile; endif;
						wp_reset_postdata();
					?>

				</section><!-- .article4 -->

				<section class="col-12 my-3">

					<?php
						$custom_query = new WP_Query(array(
							'post_type'=>'post',
							'category_name'=>'article_cinq'
						));
					?>

					<?php if ($custom_query->have_posts()) :
						while ($custom_query->have_posts()) :
						$custom_query->the_post();
					?>
					<div class="block__text">
						<h2 class="font-weight-bold"><?php echo get_the_title($custom_query->post->ID); ?></h2>
						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					</div>

					<?php
						endwhile; endif;
						wp_reset_postdata();
					?>

				</section><!-- .article5 -->

				<section class="col-12">

					<?php
						$custom_query = new WP_Query(array(
							'post_type'=>'post',
							'category_name'=>'article_six'
						));
					?>

					<?php if ($custom_query->have_posts()) :
						while ($custom_query->have_posts()) :
						$custom_query->the_post();
					?>
					<div class="block__text">
						<h2 class="font-weight-bold"><?php echo get_the_title($custom_query->post->ID); ?></h2>
						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					</div>

					<?php
						endwhile; endif;
						wp_reset_postdata();
					?>

				</section><!-- .article6 -->

			</article>

		</section>


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
