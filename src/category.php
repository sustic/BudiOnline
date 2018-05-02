<?php get_header(); ?>

    <section class="headline-subheadline full-width text-left padding-small">
        <div class="container" style="background-color:white;">
            <div class="container-inner">
                <h1><?php single_cat_title(); ?></h1>
            </div>
        </div>
    </section>

    <?php get_template_part( 'loop' ); ?>
    <?php get_template_part( 'pagination' ); ?>

<?php get_footer(); ?>
