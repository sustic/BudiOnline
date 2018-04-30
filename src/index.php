<?php get_header(); ?>

<!-- 
    Element name: Heading with tabs
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            text:     text-left, text-center, text-right
            padding:  padding-fat, padding-normal, padding-small, padding-tiny
            background-color
            columns: column-width-10
                     column-width-20
                     column-width-25
                     column-width-30
                     column-width-33
                     column-width-40
                     column-width-50
                     column-width-60
                     column-width-100
        HTML:
            h1, h2, h3, strong, b, i, a
        a:
            target="_blank" ***** To open link on a new tab *****
-->
<section class="heading-with-tabs full-width padding-normal">
    <div class="container" style="background-color:#ef4f52;">
        <div class="container-inner">
            <div class="icon-holder column-width-50">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/domain-registration.png" alt="Domain registration">
            </div>
            <div class="content-holder column-width-50">
                <h1 style="color:white">Domain Reselling</h1>
                <p style="color:white">All the tools you need to sell domains including advanced domain suggestions and a fully featured self service management portal for customers.</p>
            </div>
        </div>
	</div>
	<div class="heading-tab-container">
		<div class="container-inner">
			<nav>
				<ul>
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="Hosting">Hosting</a></li>
					<li><a class="active" style="background-color:#ef4f52;" href="#" title="Domain">Domain</a></li>
					<li><a href="#" title="VPS">VPS</a></li>
					<li><a href="#" title="Dedicated">Dedicated</a></li>
                    <li><a href="#" title="Support">Support</a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>

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
    <div class="container" style="background-color:white; border-bottom: 1px solid #ccc;">
        <div class="container-inner">
            <h1>Lorem <a href="#">ipsum dolor</a> sit amet consectetur</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quam tenetur iure velit nemo culpa ipsa natus suscipit fuga totam, neque sequi praesentium excepturi.</p>
        </div>
    </div>
</section>


<!--
    Element name: Price table
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            state:    active, color, button color
-->
<section class="price-table full-width padding-fat">
    <div class="container" style="background-color:white; border-bottom: 1px solid #ccc">
        <div class="container-inner">

            <div class="price-box active">
                <div class="price-header" style="background-color: #ef4f52">
                    <h3>Entry 5GB</h3>
                    <p>za Svakog, a Najbolji za Školu...</p>
                </div>
                <div class="price-holder">
                    <p>
                        <span>123kn</span>
                        <br>
                        godišnje, PDV uključen
                    </p>
                </div>
                <div class="price-package" style="background-color: #f5f5f5">
                    <ul>
                        <li><strong>1</strong> Domena na serveru</li>
                        <li><strong>5</strong> GB RAID Diska Prostora</li>
                        <li><strong>25600</strong> MB Prometa/mj.</li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                    </ul>
                </div>
                <div class="price-description">
                    <ul>
                        <li>HP Xeon Hardware</li>
                        <li>cPanel Powered</li>
                        <li>99.0% Uptime Garancija</li>
                        <li>50 Email, 3 MySQL Baza i FTP 3 Parkirane domene</li>
                    </ul>
                </div>
                <div class="price-cta-holder">
                    <a href="#" title="" tagret="_blank" style="background-color: #ef4f52">Naruči</a>
                </div>
            </div>


            <div class="price-box">
                <div class="price-header" style="background-color: #3ca77f">
                    <h3>Entry 5GB</h3>
                    <p>za Svakog, a Najbolji za Školu...</p>
                </div>
                <div class="price-holder">
                    <p>
                        <span>123kn</span>
                        <br>
                        godišnje, PDV uključen
                    </p>
                </div>
                <div class="price-package" style="background-color: #f5f5f5">
                    <ul>
                        <li><strong>1</strong> Domena na serveru</li>
                        <li><strong>5</strong> GB RAID Diska Prostora</li>
                        <li><strong>25600</strong> MB Prometa/mj.</li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                    </ul>
                </div>
                <div class="price-description">
                    <ul>
                        <li>HP Xeon Hardware</li>
                        <li>cPanel Powered</li>
                        <li>99.0% Uptime Garancija</li>
                        <li>50 Email, 3 MySQL Baza i FTP 3 Parkirane domene</li>
                    </ul>
                </div>
                <div class="price-cta-holder">
                    <a href="#" title="" tagret="_blank" style="background-color: #3ca77f">Naruči</a>
                </div>
            </div>


            <div class="price-box">
                <div class="price-header" style="background-color: #4292a9">
                    <h3>Entry 5GB</h3>
                    <p>za Svakog, a Najbolji za Školu...</p>
                </div>
                <div class="price-holder">
                    <p>
                        <span>123kn</span>
                        <br>
                        godišnje, PDV uključen
                    </p>
                </div>
                <div class="price-package" style="background-color: #f5f5f5">
                    <ul>
                        <li><strong>1</strong> Domena na serveru</li>
                        <li><strong>5</strong> GB RAID Diska Prostora</li>
                        <li><strong>25600</strong> MB Prometa/mj.</li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                    </ul>
                </div>
                <div class="price-description">
                    <ul>
                        <li>HP Xeon Hardware</li>
                        <li>cPanel Powered</li>
                        <li>99.0% Uptime Garancija</li>
                        <li>50 Email, 3 MySQL Baza i FTP 3 Parkirane domene</li>
                    </ul>
                </div>
                <div class="price-cta-holder">
                    <a href="#" title="" tagret="_blank" style="background-color: #4292a9">Naruči</a>
                </div>
            </div>


            <div class="price-box">
                <div class="price-header" style="background-color: #923c8b">
                    <h3>Entry 5GB</h3>
                    <p>za Svakog, a Najbolji za Školu...</p>
                </div>
                <div class="price-holder">
                    <p>
                        <span>123kn</span>
                        <br>
                        godišnje, PDV uključen
                    </p>
                </div>
                <div class="price-package" style="background-color: #f5f5f5">
                    <ul>
                        <li><strong>1</strong> Domena na serveru</li>
                        <li><strong>5</strong> GB RAID Diska Prostora</li>
                        <li><strong>25600</strong> MB Prometa/mj.</li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                        <li><strong>X</strong></li>
                    </ul>
                </div>
                <div class="price-description">
                    <ul>
                        <li>HP Xeon Hardware</li>
                        <li>cPanel Powered</li>
                        <li>99.0% Uptime Garancija</li>
                        <li>50 Email, 3 MySQL Baza i FTP 3 Parkirane domene</li>
                    </ul>
                </div>
                <div class="price-cta-holder">
                    <a href="#" title="" tagret="_blank" style="background-color: #923c8b">Naruči</a>
                </div>
            </div>

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
            <div class="column-width-100 text-center">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, eaque veritatis natus nobis architecto, quibusdam atque quos perferendis, rerum provident iure! Blanditiis quibusdam iste facilis quo itaque asperiores nihil quaerat.</p>
            </div> 
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
    Element name: Google Map
    Awailable options:
        CSS:
            width:    full-width, narrow-width
            height:   any number of pixels

        !!!WARNING!!! This element has to be MAX ONE PER PAGE
-->
<section class="map full-width">
    <div class="container">
        <div class="container-inner">
            <div id="map" style="height:400px;"></div>
        </div>
    </div>
</section>

<!--
    Element name: Domain search
    Awailable options:
        CSS:
            width:    full-width, narrow-width
-->
<section class="domain-search full-width padding-normal">
    <div class="container" style="background-color: #0084af;">
        <div class="container-inner">
            <div class="domain-search-sub-element form-holder" style="color: #003756">
                <p style="color:white;"><b><span>Tražite domenu?</span><br>
                Provjerite dali je slobodna :-)</b></p>
                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
            </div>
            <div class="domain-search-sub-element image-holder">
                <img src="<?php echo get_template_directory_uri();?>/img/icons/domain-registration.png" alt="Domain registration">
            </div>
        </div>
    </div>
</section>




<!--
    Element name: Table
    Awailable options:
        CSS:
            width:    full-width, narrow-width
-->
<section class="table full-width padding-normal">
    <div class="container">
        <div class="container-inner">
            <table>
                <thead>
                    <tr>
                        <th class="text-left"><span class="table-title">Shared web hosting paketi</span></th>
                        <th>1 god.</th>
                        <th>2 god.<span class="discount-label">ušteda 10%</span></th>
                        <th>3 god.<span class="discount-label">ušteda 15%</span></th>
                        <th>4 god.<span class="discount-label">ušteda 20%</span></th>
                        <th>5 god.<span class="discount-label">ušteda 25%</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left"><div class="ribbon green" style="margin-left:-12px">Akcija</div> Sprint Classic</td>
                        <td>450,00 Kn</td>
                        <td>Promo</div>810,00 Kn</td>
                        <td><span class="cross">1.147,50 Kn</span> 599,00 Kn</td>
                        <td>1.440,00 Kn</td>
                        <td>1.687,50 Kn</td>
                    </tr>
                    <tr>
                        <td class="text-left"><div class="ribbon red" style="margin-left:-12px">Proba</div>Sprint Extended</td>
                        <td>575,00 Kn</td>
                        <td>1.035,00 Kn</td>
                        <td>1.466,25 Kn</td>
                        <td>1.840,00 Kn</td>
                        <td>2.156,25 Kn</td>
                    </tr>
                    <tr>
                        <td class="text-left"><div class="ribbon orange" style="margin-left:-12px">Uskoro</div>Sprint Advanced</td>
                        <td>700,00 Kn</td>
                        <td>1.180,00 Kn</td>
                        <td>1.770,00 Kn</td>
                        <td>2.240,00 Kn</td>
                        <td>2.625,00 Kn</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>



<!--
    Element name: Reference
    Awailable options:
        CSS:
            width:    full-width, narrow-width
-->
<section class="reference full-width padding-normal">
    <div class="container">
        <div class="container-inner">
            <div>
                <img src="http://localhost/budionline/wp-content/uploads/2018/04/whmcs-v751-release.png" alt="Lol">
                <h1>Only 4 months to go until SSL is required</h1>
                <p>Google's new age of Secure Internet is set to take another giant leap forward this coming July with the launch of Chrome 68. For the past several years, Google has been increasingly advocating...</p>
                <p><a href="http://google.com">Read more</a></p>
                <p><b><i>By Someone</i></b></p>
            </div>

            <div>
                <img src="http://localhost/budionline/wp-content/uploads/2018/04/whmcs-v751-release.png" alt="Lol">
                <h1>Only 4 months to go until SSL is required</h1>
                <p>Google's new this coming July with the launch of Chrome 68. For the past several years, Google has been increasingly advocating...</p>
                <p><a href="http://google.com">Read more</a></p>
                <p><b><i>By Someone</i></b></p>
            </div>

            <div>
                <img src="http://localhost/budionline/wp-content/uploads/2018/04/whmcs-v751-release.png" alt="Lol">
                <h1>Only 4 months to go until SSL is required</h1>
                <p>Google's new age of Secure Internet is set to take another giant leap forward this coming July with the launch of Chrome 68. For the past several years, Google has been increasingly advocating...</p>
                <p><a href="http://google.com">Read more</a></p>
                <p><b><i>By Someone</i></b></p>
            </div>

        </div>
    </div>
</section>



<?php get_footer(); ?>
