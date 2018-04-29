<?php get_header(); ?>
	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

	<?php

	// check if the flexible content field has rows of data
	if( have_rows('elements') ):

		// loop through the rows of data
		while ( have_rows('elements') ) : the_row();

			if( get_row_layout() == 'free_code_element' ):
	?>

				<div data-aos="fade-up">
					<?php the_sub_field('code_element');?>
				</div>

	<?php
			elseif( get_row_layout() == 'domain_search_element' ): 
	?>

				<section class="domain-search full-width padding-normal" data-aos="fade-up">
					<div class="container" <?php if ( get_sub_field('element_inline_css_style') ) : ?> style="<?php echo get_sub_field('element_inline_css_style'); ?>"<?php endif; ?> >
						<div class="container-inner">
							<div class="domain-search-sub-element form-holder">
								<?php if ( get_sub_field('text') ) : ?>
									<?php the_sub_field('text'); ?>
								<?php endif; ?>
								<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
							</div>
							<div class="domain-search-sub-element image-holder">
                                <?php 
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
							</div>
						</div>
					</div>
				</section>

    <?php
			elseif( get_row_layout() == 'sidebar_element' ): 
	?>
                <section class="sidebar full-width padding-normal" data-aos="fade-up">
                    <div class="container">
                        <div class="container-inner">
                            <div class="main-content">
                                <?php the_sub_field('main_content'); ?>
                            </div>
                            <aside class="sidebar-content">
                                <?php the_sub_field('sidebar_content'); ?>
                            </aside>
                        </div>
                    </div>
                </section>
		<?php
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
