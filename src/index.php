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

<section class="headline-subheadline full-width text-center padding-fat">
    <div class="container" style="background-color:#f5f5f5;">
        <h1>Lorem <a href="#">ipsum dolor</a> sit amet consectetur</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
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
<hr>
<hr>
<section class="text-columns full-width padding-normal">
    <div class="container" style="background-color:#f5f5f5;">
        <div class="container-inner">
            <div class="column-width-33">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <hr>               
            </div> 
            <div class="column-width-33">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <hr>
            </div>  
            <div class="column-width-33">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur <a href=#>adipiscing elit.</a></p>
                <hr>
            </div>  
            <div class="column-width-33">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <hr>
            </div>              
        </div>
    </div>

</section>


<?php get_footer(); ?>
