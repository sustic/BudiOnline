<?php get_header(); ?>

<!-- 
    Element name: Headline & subheadline
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     padding-fat, padding-normal, padding-small, padding-tiny
            padding:  padding-fat, padding-normal
            background-color
        HTML:
            h1, h2, h3, h4, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->

<section class="headline-subheadline full-width text-center padding-normal">
    <div class="container" style="background-color:#fefefe;">
        <div class="container-inner">
            <h1>Lorem <a href="#">ipsum dolor</a> sit amet consectetur</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
        </div>
    </div>
</section>

<!-- 
    Element name: Text Columns
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal, padding-small, padding-tiny
            background-color
        HTML:
            h1, h2, h3, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->
<section class="text-columns full-width padding-normal">
    <div class="container" style="background-color:#f5f5f5;">
        <div class="container-inner">
            <div class="column-width-50">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, eaque veritatis natus nobis architecto, quibusdam atque quos perferendis, rerum provident iure! Blanditiis quibusdam iste facilis quo itaque asperiores nihil quaerat.</p>
            </div> 
            <div class="column-width-50 text-right">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, et commodi dicta, asperiores quae cum quidem voluptatem quibusdam beatae officia, quia repellendus maiores. Quasi aliquid dolores, esse doloribus odio vitae.</p>
            </div>
        </div>
    </div>
</section>



<!-- 
    Element name: Heading with tabs
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal, padding-small, padding-tiny
            background-color
        HTML:
            h1, h2, h3, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->
<section class="heading-with-tabs full-width padding-normal">
    <div class="container" style="background-color:#ef4f52;">
        <div class="container-inner">
            <div class="content-holder column-width-50">
                <h1 style="color:white">Domain Reselling</h1>
                <p style="color:white">All the tools you need to sell domains including advanced domain suggestions and a fully featured self service management portal for customers.</p>
            </div>
            <div class="icon-holder column-width-50">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/domain-registration.png" alt="Domain registration">
            </div>
        </div>
	</div>
	<div class="heading-tab-container">
		<div class="container-inner">
			<nav>
				<ul>
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="Hosting">Hosting</a></li>
					<li><a class="active" href="#" title="Domain">Domain</a></li>
					<li><a href="#" title="VPS">VPS</a></li>
					<li><a href="#" title="Dedicated">Dedicated</a></li>
					<li><a href="#" title="Support">Support</a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>


<?php get_footer(); ?>
