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
			elseif( get_row_layout() == 'twitter-element' ): 
        ?>

            <?php
                $kva = 'AaYeyNSqdEU6pDg1HZFoMfaPu';
                $kvo = 'eV9G9wnf5DBZN3Dm1YCMFPdJWN4ZE2DOPtHhJJCQrqamrCCiV4';
                $kve = '1359116856-TxSXQLfvmHuHbzWEK1W0uxRB461U5KW9UaToXdn';
                $kvu = 'UzqhelWXirIJmz191GL3tqX12wEB5DW0nImsB4qKw7qco';

                $connection = new TwitterOAuth($kva ,$kvo, $kve, $kvu);
                $statuses = $connection->get("statuses/user_timeline", ["count" => get_sub_field('number_of_tweets'), "exclude_replies" => true]);
                //print_r($statuses);    
            ?>
            <section class="slider twitter-slide full-width padding-normal" data-aos="fade-up">
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
