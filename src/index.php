<?php get_header(); ?>

<!-- 
    Element name: Headline & subheadline
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
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
            padding:  padding-fat, padding-normal
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

<?php get_footer(); ?>
