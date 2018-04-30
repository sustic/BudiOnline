<?php /* Template Name: Template Mario */ get_header(); ?>

<!-- 
    Element name: Feature with icon
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal, padding-small, padding-tiny
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
        <div class="icons-headline-holder">
            <h1 style="color:#31628a">More domain automation features</h1>
            <p style="color:#000;">Everything you need to become a professional domain registrar.</p> 
        </div>               
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
    Element name: Feature zig-zag   
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal
            background-color
            row-center or row-top, img-text or text-img 
        HTML:
            h1,h2,h3,h4 strong, b, i, a
            
        HTML:
            blockquote, h1, h2, h3, h4, h5, p, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->

<section class="zig-zag full-width padding-normal">
    <div class="container" style="background-color:lightgrey;">
        <div class="row-center img-text">
            <div class="column-img">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/085-newspaper.png" alt="">
            </div>
            <div class="column-text">
                <h1>Some heading</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat magnam voluptatum hic dolore similique optio quo maxime exercitationem harum corrupti, ad pariatur quos nisi enim, ipsum sapiente id iste praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat magnam voluptatum hic dolore similique optio quo maxime exercitationem harum corrupti, ad pariatur quos nisi enim, ipsum sapiente id iste praesentium.</p>
            </div>   
        </div>
        <div class="row-top text-img">
            <div class="column-img">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/082-internet.png" alt="">
            </div>
            <div class="column-text">
                <h2>Some heading</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ex quis, sequi placeat beatae quisquam repellendus, enim ullam delectus iure suscipit</p>
            </div>   
        </div>
        <div class="row-top img-text">
            <div class="column-img">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/083-database.png" alt="">
            </div>
            <div class="column-text">
                <h3><a href="#">Some heading</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing <a href="#">elit</a>. Impedit ex quis, sequi placeat beatae quisquam repellendus, enim ullam delectus iure suscipit</p>
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
            blockquote, h1, h2, h3, h4, h5, p, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->

<section class="slider full-width padding-normal">
    <div class="container" style="background-color:#ccc">
        <div class="main-slider main-slider-js text-center">
            <div>
                <blockquote>
                "Lorem ipsum dolor sit amet <a href="#">consectetur</a> adipisicing elit. Reprehenderit unde quas quae animi. Eos ratione recusandae necessitatibus ipsum fugit maiores.
                </blockquote>
                <h5><a href="#">Some Title</a></h5>
                <p>Some text</p>
            </div>
            <div>
                <h5>Some Title</h5>
                <p>Some text</p>
                <blockquote>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
                </blockquote>
                
            </div>
            <div>
                <blockquote>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit." 
                </blockquote>
                <h5>Some Title</h5>
                <p>Some text</p>
            </div>
        </div>
    </div>
</section>

<!-- 
    Element name: Feature Starter Plan
    Awailable options:
        CSS:
            width:    full-width, narrow-width            
            padding:  padding-fat, padding-normal, padding-small
            price font-size: h1, h2, h3, h4
            background-color
            
        HTML:
            h1, h2, h3, h4,  strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->
<section class="starter full-width padding-small">
    <div class="container" style="background-color:#fefefe">
        <div class="container-inner">
            <span class="pull-right price h4"><strong>$99.99/mo</strong></span>
            <h4>Starter</h4>            
            <span>
                Our Starter license offers a cheaper way to get started.<br />
                Includes everything in Plus, along with a powered by branding link.
                <a href="#" class="pull-right">Purchase Plan</a>
            </span>
        </div>
    </div>
</section>

<!-- 
    Element Name: Feature Get Started
        
        CSS: 
            width: full-width, narrow-width
            padding: padding-fat, padding-normal, padding-small, padding-tiny   
            text-aligment: text-left, text-center, text-right
            background color
        HTML:
            h1, h2, h3, h4, p, strong, b, i, a

        a:
            target="_blank" ***** To open link on a new tab *****

-->

<section class="get-started fulls-width padding-small">
    <div class="container" style="background-color:#F6F6F6">
        <div class="container-inner text-left">
            <div class="column-left">
                <div class="column-left--left">
                    <i class="far fa-arrow-alt-circle-right"></i>
                </div>
                <div class="column-left--right">
                    <h4>Ready to <strong>get started?</strong></h4>
                    <p>We're so confident you'll love our product, if you don't, we'll give you your money back!</p>
                </div>
            </div>
            <div class="column-right">
                <a href="#">Try it Now</a>
            </div>
        </div>
    </div>
</section>

<!-- 
    Element Name: Feature Domain Slider
        
        CSS: 
            width: full-width, narrow-width
            padding: padding-fat, padding-normal, padding-small, padding-tiny   
            text-aligment: text-left, text-center, text-right
            background color
        HTML:
            p  
-->

<section class="section-domain-slider full-width padding-normal">
    <div class="container" style="background-color:#e9e9e9">
        <div class="domain-slider">                  
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.com</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>
            </div>            
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.net</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>
            </div> 
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.com.hr</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>
            </div>
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.eu</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>
            </div> 
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.org</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>
            </div> 
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.hr</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>
            </div>     
            <div class="column text-center">
                <div class="domain-item">
                    <p class="domain-name">.hr</p>
                    <p class="domain-price">kn 99.00/god</p>
                </div>            
            </div>               
        </div>
    </div>
</section>

<!-- 
    Element Name: Feature Trusted
        
        CSS: 
            width: full-width, narrow-width
            padding: padding-fat, padding-normal, padding-small, padding-tiny               
            background-color
            text-aligment:  text-center, text-left, text-right
            hidden
        HTML: img, p, br
              
-->

<section class="trusted full-width padding-small">
    <div class="container" style="background-color: white">
        <div class="container-inner">
            <div class="column-left">
                <p>Trusted by over 12,345 customers <br class="hidden" />
                in over 123 countries.</p>
            </div>
            <div class="column-right">
                <ul>
                    <li class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/enom.png" alt="">
                    </li>
                    <li class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cpanel.png" alt="">
                    </li>
                    <li class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/resellerclub.png" alt="">
                    </li>
                    <li class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/paypal.png" alt="">
                    </li>
                    <li class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plesk.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 
    Element Name: Feature CTA
        
        CSS: 
            width: full-width, narrow-width
            padding: padding-fat, padding-normal, padding-small, padding-tiny               
            background-color
        HTML: h1, h2, h3, h4, a 
              
-->

<section class="section-cta full-width padding-normal">
    <div class="container" style="background-color: #555E68">
        <div class="container-inner">
            <h4>Have any questions?</h4>
            <a href="#">Contact our Sales Team</a>
        </div>
    </div>
</section>

<!-- 
    Element Name: Feature Services
        
        CSS: 
            width: full-width, narrow-width
            padding: padding-fat, padding-normal, padding-small, padding-tiny   
            border:  border-top, border-bottom           
            background-color
            column-left, colum-right
            row-inner - column-width-50
        HTML: h1, h2, h3, h4, p a 
              
-->

<section class="services full-width padding-normal">
    <div class="container border-top" style="background-color: #fff">
        <div class="container-inner">
            <div class="column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/gear-spanner-2.png" alt="">
            </div>
            <div class="column-right">
                <h3>Installation & Configuration - 12.34<span style="color: grey">kn</span></h3>
                <p>Have an expert from our team install and setup WHMCS for you. We'll fully install, configure and setup WHMCS ready for you to begin using. The service includes all of the following:</p>
                <div class="row-inner">
                    <div class="column-width-50">
                        <ul>
                            <li><i class="fas fa-check"></i>Installation of Core Software</li>
                            <li><i class="fas fa-check"></i>Cron Task Automation Setup</li>
                            <li><i class="fas fa-check"></i>Initial System Configuration</li>
                            <li><i class="fas fa-check"></i>Setup of 1 Hosting Server/Reseller Account</li>
                        </ul>
                    </div>
                    <div class="column-width-50">
                        <ul>
                            <li><i class="fas fa-check"></i>Configuration of up to 6 Products/Services</li>
                            <li><i class="fas fa-check"></i>Setup of Domain Registrar & TLD Pricing</li>
                            <li><i class="fas fa-check"></i>Setup and Configuration of Payment Gateways</li>
                            <li><i class="fas fa-check"></i>Setup of Support Departments & Email Piping</li>
                        </ul>
                    </div>
                </div>
                <a href="#">Get Instalation & Configuration for 123.45kn</a>
                <a href="#">SInstallation Only 56.56kn</a>
                <a href="#">Configuration Only 70.00kn</a>
            </div>
        </div>    
    </div>
</section>

<?php get_footer(); ?>
