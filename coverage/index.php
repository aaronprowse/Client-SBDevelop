<?php
global $page_title, $page_link;
$page_title = "S & B Developments Kent - Coverage";
$page_link = basename(__DIR__);
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
?>
<section class="banner-container content-container container-map-contact">
    <div id="map-canvas"></div>
</section>

    <section class="content-container container--title">
        <div class="container">
            <div class="col-12 text-center">
                <img src="/images/contact-us-icon.png" alt="S&B Developments - Icon"
                     class="img-responsive content-image center-block"/>
                <h1>Coverage</h1>
                <p>S&B Developments covers the whole of <a href="/coverage">Kent</a> including areas around the M25. Please give us a call today to get in <a href="/contact-us">contact with your local branch</a> to arrange a visit to your home or site to allow us to provide you with an accurate quote for the works you require.</p>
            </div>
        </div>

    </section>

    <section class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-overlay-wrapper text-overlay-100 text-overlay-wrapper--wide">
                        <img src="/images/S&B-Coverage.jpg"
                             alt="S&B Developments - Services Background" class="img-responsive respond desaturate"/>
                        <div class="services-overlay_all">
                            <div class="visible-xs">
                                <h1>Full List Of Coverage</h1>
                            </div>
                            <?php require_once("coverage-list.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-container">
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="text-overlay-wrapper">
                        <img src="../images/S&B-Developments-Portfolio.jpg" alt="S&B Developments - Portfolio"
                             class="img-responsive respond"/>
                        <!--                        <div class="text-overlay"><a href="/portfolio/"><h3>Portfolio</h3></a></div>-->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-overlay-wrapper">
                        <img src="../images/S&B-Building-Services.jpg" alt="S&B Developments - Building Services"
                             class="img-responsive respond"/>
                        <div class="text-overlay"><a href="/services/"><h3>Building Services</h3></a></div>
                        <div class="services-overlay hidden-xs white">
                            <ul class="pull-left list-unstyled">
                                <li><a href="/services/roofing/">Roofing</a></li>
                                <li><a href="/services/construction/">Construction</a></li>
                                <li><a href="/services/ground-works/">Ground Works</a></li>
                                <li><a href="/services/design-build/">Design & Build</a></li>
                                <li><a href="/services/commercial-domestic/">Commercial</a></li>
                                <li><a href="/services/commercial-domestic/">Domestic</a></li>
                                <li><a href="/services/windows/">Windows</a></li>
                                <li><a href="/services/electrical/">Electrical</a></li>
                            </ul>

                            <ul class="pull-right list-unstyled">
                                <li><a href="/services/tiling/">Tiling</a></li>
                                <li><a href="/services/kitchens/">Kitchens</a></li>
                                <li><a href="/services/bathrooms/">Bathrooms</a></li>
                                <li><a href="/services/design-build/">Design & Planning</a></li>
                                <li><a href="/services/project-management/">Project Management</a></li>
                                <li><a href="/services/interior-decorating/">Interior Decorating</a></li>
                                <li><a href="/services/exterior-decorating/">Exterior Decorating</a></li>
                                <li><a href="/services/carpentry-joinery/">Carpentry</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </section>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>