<?php
global $page_title, $page_link;
$page_title = "S & B Developments Kent - Bespoke Woodwork";
$page_link = "services";
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
?>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Geolocation/1.0.50/jquery.geolocation.min.js"></script>
    <section class="banner-container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/S&B-Portfolio-Slider-3.jpg" alt="S&B Developments - Slider 1"
                         class="respond img-responsive">
                    <div class="carousel-caption">
                        <a href="#" class="instant-quote-button">Get An Instant Quote</a>
                        <form class="instant-quote" enctype="multipart/form-data">
                            <h2>Get an instant quote</h2>
                            <button class="btn text-uppercase send_message" id="send_message">Submit</button>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="name" id="name" class="form-control required">
                                                <span class="error">Name is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="email" id="email" class="form-control required">
                                                <span class="error">Email is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="phone">Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" id="phone" class="form-control required">
                                                <span class="error">Phone is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="message">Enquiry</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea name="message" id="message" class="required"></textarea>
                                                <span class="error">Enquiry is required</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span id="mail_success" class="success">Message Sent!</span>
                            <span id="mail_fail" class="error">Message failed to send. Contact the system administrator.</span>
                            <span id="validation" class="error">Validation error. Please check your entries.</span>
                            <input type="hidden" name="subject" value="S&B Developments - Instant Quote" />
                        </form>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/S&B-Portfolio-Slider-3.jpg" alt="S&B Developments - Slider 1"
                         class="respond img-responsive">
                    <div class="carousel-caption">
                        <a href="#" class="instant-quote-button">Get An Instant Quote</a>
                        <form class="instant-quote" enctype="multipart/form-data">
                            <h2>Get an instant quote</h2>
                            <button class="btn text-uppercase send_message" id="send_message">Submit</button>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="name" id="name" class="form-control required">
                                                <span class="error">Name is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="email" id="email" class="form-control required">
                                                <span class="error">Email is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="phone">Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" id="phone" class="form-control required">
                                                <span class="error">Phone is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="message">Enquiry</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea name="message" id="message" class="required"></textarea>
                                                <span class="error">Enquiry is required</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span id="mail_success" class="success">Message Sent!</span>
                            <span id="mail_fail" class="error">Message failed to send. Contact the system administrator.</span>
                            <span id="validation" class="error">Validation error. Please check your entries.</span>
                            <input type="hidden" name="subject" value="S&B Developments - Instant Quote" />
                        </form>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="content-container container--title">
        <div class="container">
            <div class="col-12 text-center">
                <img src="/images/homepage-icon.png" alt="S&B Developments - Icon"
                     class="img-responsive content-image center-block"/>
                <h1>Bespoke Woodwork</h1>
                <p>S&B Developments can undertake all carpentry and joinery work no matter the size of the job. Our carpenters have years of experience and work only with the highest quality materials leaving you with a beautiful build that is built to last. Our specialist team can fulfil a wide range of projects including doorframes and skirting, staircases, decking and much more. Please contact us for a quote.</p>
                <p>All our work is carried out by professional craftsman, who specialise in their area of work, which is completed to the highest standard.  All of our work comes backed by a full guarantee and we are covered with liability insurance to cover any damages that can occur for up to £10 Million.</p>
            </div>
        </div>

    </section>

<!--    <section class="content-container">-->
<!---->
<!--        <div class="row row--no_pad">-->
<!--            <div class="col-md-4">-->
<!--                <img src="/images/S&B-Single-Portfolio-Nav.jpg" class="img-responsive respond">-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <img src="/images/S&B-Single-Portfolio-Nav.jpg" class="img-responsive respond">-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <img src="/images/S&B-Single-Portfolio-Nav.jpg" class="img-responsive respond">-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <section class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-overlay-wrapper text-overlay-100">
                        <img src="/images/S&B-Developments-Services-Background.jpg"
                             alt="S&B Developments - Services Background" class="img-responsive respond"/>
                        <div class="services-overlay_all">
                            <div class="visible-xs">
                                <h1>Full List Of Services</h1>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="../roofing">Roofing</a></li>
                                        <li><a href="../construction">Construction</li>
                                        <li><a href="../ground-works">Ground Works</li>
                                        <li><a href="../electrical">Electrical</li>
                                        <li><a href="../commercial-domestic">Commercial</li>
                                        <li><a href="../commercial-domestic">Domestic</li>
                                        <li><a href="../windows">Windows</li>
                                        <li><a href="../design-build">Design & Build</li>
                                        <li><a href="../design-build">Design & Planning</li>
                                        <li><a href="../project-management">Project Management</li>
                                        <li><a href="../bathrooms">Bathrooms</li>
                                        <li><a href="../kitchens">Kitchens</li>
                                        <li><a href="../tiling">Tiling</li>

                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="../interior-decorating">Interior Decorating</li>
                                        <li><a href="../exterior-decorating">Exterior Decorating</li>
                                        <li><a href="../carpentry-joinery">Carpentry/Joinery</li>
                                        <li><a href="../stud-work">Stud Work</li>
                                        <li><a href="../doors">Doors</li>
                                        <li><a href="../flooring">Flooring</li>
                                        <li><a href="../kitchens">Kitchen Fitting</li>
                                        <li><a href="../bespoke-woodwork">Bespoke Woodwork</li>
                                        <li><a href="../plastering-rendering">Plastering/Rendering</li>
                                        <li><a href="../brick-work">Brick Work</li>
                                        <li><a href="../loft-conversions">Loft Conversions</li>
                                        <li><a href="../landscaping">Landscaping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-container content-container container-map-coverage">

        <div id="map-canvas"></div>
        <div class="coverage-caption">
            <a href="/coverage/">Coverage</a>
        </div>
    </section>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>