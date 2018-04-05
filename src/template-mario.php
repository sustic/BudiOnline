<?php /* Template Name: Template Mario */ get_header(); ?>

<!-- 
    Element name: Feature with icon
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal
            background-color
            column: column-width-25 -> 25% width
                    column-width-33 -> 33.33% width
                    column-width-50 -> 50% width
                    column-width-100 -> 100% width
            color
        HTML:
            5, h5, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->

<section class="icons full-width padding-normal text-center">
    <div class="container" style="background-color:#f5f5f5;">
        <h1 style="color:#31628a">More domain automation features</h1>
        <p style="color:#000;">Everything you need to become a professional domain registrar.</p>        
        <div class="container-inner">
            <div class="column-width-33">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/005-worldwide.png" alt="">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, eaque veritatis natus nobis architecto, quibusdam atque quos perferendis, rerum provident iure! Blanditiis quibusdam iste facilis quo itaque asperiores nihil quaerat.</p>
            </div> 
            <div class="column-width-33">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/009-browser-2.png" alt="">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, et commodi dicta, asperiores quae cum quidem voluptatem quibusdam beatae officia, quia repellendus maiores. Quasi aliquid dolores, esse doloribus odio vitae.</p>
            </div>
            <div class="column-width-33">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/012-shield-1.png" alt="">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, et commodi dicta, asperiores quae cum quidem voluptatem quibusdam beatae officia, quia repellendus maiores. Quasi aliquid dolores, esse doloribus odio vitae.</p>
            </div>
            <div class="column-width-33">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/013-package.png" alt="">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, et commodi dicta, asperiores quae cum quidem voluptatem quibusdam beatae officia, quia repellendus maiores. Quasi aliquid dolores, esse doloribus odio vitae.</p>
            </div>
            <div class="column-width-33">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/015-list.png" alt="">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, et commodi dicta, asperiores quae cum quidem voluptatem quibusdam beatae officia, quia repellendus maiores. Quasi aliquid dolores, esse doloribus odio vitae.</p>
            </div>
            <div class="column-width-33">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/015-technology-3.png" alt="">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, et commodi dicta, asperiores quae cum quidem voluptatem quibusdam beatae officia, quia repellendus maiores. Quasi aliquid dolores, esse doloribus odio vitae.</p>
            </div>
        </div>
    </div>
</section>

<!-- 
    Element name: Feature Text Slider
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal
            background-color
            
        HTML:
            blackquote, h1, h2, h3, h4, h5, p, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->

<section class="slider full-width padding-normal">
    <div class="container" style="background-color:#ccc">
        <div class="main-slider text-center">
            <div>
                <blackquote>
                "Lorem ipsum dolor sit amet <a href="#">consectetur</a> adipisicing elit. Reprehenderit unde quas quae animi. Eos ratione recusandae necessitatibus ipsum fugit maiores, porro excepturi dolore repellat, eum accusantium quisquam qui voluptates dolorem?"
                </blackquote>
                <h1><a href="#">Some Title</a></h1>
                <p>Some text</p>
            </div>
            <div>
                <h1>Some Title</h1>
                <p>Some text</p>
                <blackquote>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
                </blackquote>
                
            </div>
            <div>
                <blackquote>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
                </blackquote>
                <h1>Some Title</h1>
                <p>Some text</p>
            </div>
        </div>
    </div>

</section>



<?php get_footer(); ?>