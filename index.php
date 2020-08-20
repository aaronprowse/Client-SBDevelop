<?php
global $page_title, $page_link;
$page_title = "S & B Developments Kent - Home";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>

    <section class="banner-container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="true">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/Slider1.jpg" alt="S&B Developments - Slider 1" class="respond img-responsive">
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
                    <img src="images/Slider1.jpg" alt="S&B Developments - Slider 1" class="respond img-responsive">
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
                <img src="images/homepage-icon.png" alt="S&B Developments - Icon"
                     class="img-responsive content-image center-block"/>
                <h1>Welcome to S&amp;B Developments</h1>
                <p>S&B Developments is an established business offering an affordable and experienced service in all areas of the <a href="/services/roofing/">construction</a> industry, working in multiple locations throughout <a href="/coverage">Kent</a>. No job is too small, S&B Developments work with <a href="/services/commercial-domestic" title="Residential">residential</a> and <a href="/services/commercial-domestic" title="Commercial">commercial</> customers to develop an outstanding level of work.</p>
                <p>If you are looking for experience and expertise, then S&B Developments operates as a sister company to the well established <a href="http://www.sbcarandvanhire.co.uk/">S&B Car & Van Hire in Kent</a> that has been running for over 30 years in kent. With the skills and knowledge to complete any project, you can view our portfolio, which demonstrates our high quality of work and craftsmanship.</p>
                <p>S&B Developments is a local business in <a href="/coverage">Kent</a> with offices in <a href="/contact-us/maidstone/">Maidstone</a>, <a href="/contact-us/rochester/">Rochester</a>, <a href="/contact-us/sittingbourne/">Sittingbourne</a>. If you need to fit a <a href="/services/kitchens">new kitchen</a> or <a href="/services/project-management">project management</a>, then S&B Developments are your only choice. Plus all of our work comes backed by a full guarantee and we are covered with liability insurance to cover any damages that can occur for up to £10 Million.</p>
                <p>We work to very high standards with highly qualified professionals, so if you choose us for your next big project you will not be disappointed.</p>
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

    <section class="container-fluid container--title">
        <div class="row">
            <div class="col-md-12">
                <img src="images/quote-icon.png" alt="Quote Icon" class="img-responsive img-center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>WHAT OUR CUSTOMERS SAY</h2>
            </div>
        </div>
    </section>
    <section class="container-fluid container--title testimonials">
        <div class="row text-center">
            <div id="testimonials" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <p>S&B Developments were a pleasure to do business with.<br> They are professional and easy to
                            work with, my new place is perfect</p>
                        <p>Susan, Brighton</p>
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
include_once('includes/footer.php');
?>