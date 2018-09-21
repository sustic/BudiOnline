<?php get_header(); 
// Include library
require "twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
?>
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
			elseif( get_row_layout() == 'no_sidebar_element' ): 
	    ?>
            <section class="sidebar full-width padding-normal" data-aos="fade-up">
                <div class="container">
                    <div class="container-inner">
                        <div class="main-content no-sidebar">
                            <?php the_sub_field('main_content'); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
			elseif( get_row_layout() == 'scroll_to_top' ): 
	    ?>
            <a href="#top" class="scroll-top-link"><i class="fas fa-angle-up"></i></a>
        
        <?php
            elseif( get_row_layout() == 'google_map' ):
            $mapElementWidth = get_sub_field('element_width');
        ?> 
            <?php 
                if ($mapElementWidth == 1):
            ?>
            <section class="map full-width" data-aos="fade-up">
            <?php 
                else:
            ?>
            <section class="map narrow-width" data-aos="fade-up">
            <?php 
                endif;
            ?>
                <div class="container">
                    <div class="container-inner">
                        <div id="map" style="height:400px;"></div>
                    </div>
                </div>
            </section>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5YnjVd7Vxo3x5xXrohsmC4nR5t5sbFOE&callback=initMap">
            </script>

        <?php
			elseif( get_row_layout() == 'twitter-element' ): 
        ?>

            <?php
                $kva =  get_sub_field('consumer_key_api_key');
                $kvo =  get_sub_field('consumer_secret_api_secret');
                $kve =  get_sub_field('access_token');
                $kvu =  get_sub_field('access_token_secret');

                $connection = new TwitterOAuth($kva ,$kvo, $kve, $kvu);
                $statuses = $connection->get("statuses/user_timeline", ["count" => get_sub_field('number_of_tweets'), "exclude_replies" => false]);
                //print_r($statuses);    
            ?>
            <section class="slider twitter-slide full-width padding-normal <?php echo get_sub_field('custom_css_class'); ?>" data-aos="fade-up">
                <div class="container">
                    <div class="main-slider twitter-slider-js text-center">
                        <?php
                        foreach ($statuses as $key => $tweet) {
                            $now = time(); // or your date as well
                            $your_date = strtotime($tweet->created_at);
                            $datediff = $now - $your_date;
                            $date = round($datediff / (60 * 60 * 24));
                            $dateString = "";
                            switch ($date) {
                                case "0":
                                    $dateString = "Objavljeno danas.";
                                    break;
                                default:
                                    $dateString = "Objavljeno: " . date("d.m.Y.", strtotime($tweet->created_at));
                            }
                            //$date=date("d.m.Y.", strtotime($tweet->created_at));
                        ?>
                            <div>
                                <p class="twitter-message">"<?php echo($tweet->text); ?>"</p>
                                <p class="twitter-handle"><a href="https://twitter.com/<?php echo($tweet->user->screen_name); ?>" target="_blank" ><i class="fab fa-twitter"></i>@<?php echo($tweet->user->screen_name); ?></a></p>
                                <p class="twitter-date"><?php echo($dateString); ?></p>
                            </div>
                        <?php
                        }
                        ?>
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
