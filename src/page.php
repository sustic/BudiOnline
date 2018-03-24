<?php get_header(); ?>
	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

	<?php

	// check if the flexible content field has rows of data
	if( have_rows('elements') ):

		// loop through the rows of data
		while ( have_rows('elements') ) : the_row();

			if( get_row_layout() == 'free_code_element' ):

				the_sub_field('code_element');

			elseif( get_row_layout() == 'download' ): 

				$file = get_sub_field('file');

			endif;

		endwhile;

	else :

		// no layouts found

	endif;

	?>


	<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		<article>

			<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>
<?php get_footer(); ?>
