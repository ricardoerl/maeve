<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Maeve
 */

get_header(); ?>
		<?php
		if ( have_posts() ) : ?>

			<h1><?php the_archive_title(); ?></h1>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<?php
get_footer();
