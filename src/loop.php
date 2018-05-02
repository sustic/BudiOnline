<section class="reference full-width padding-tiny">
    <div class="container">
        <div class="container-inner">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( get_field('post_main_image') ) : $image = get_field('post_main_image'); ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </a>
                    <?php endif; ?>
                    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                    <p><?php echo get_field('post_short_text'); ?></p>
                    <p><b><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_field('post_button_text'); ?></a></b></p>
                    <p><i><?php echo get_field('post_author'); ?><br><span class="date"><time datetime="<?php the_time( 'd.m.Y.' ); ?>"><?php the_time( 'd.m.Y.' ); ?></time></span></i></p>
                </div>
            <?php endwhile; ?>

            <?php else : ?>

                <!-- article -->
                <div>
                    <h2>Objava nije pronađena</h2>
                </div>
                <!-- /article -->

            <?php endif; ?>
        </div>
    </div>
</section>
