<?php
global $page_title, $page_link;
$page_title = "S & B Developments Kent, Maidstone - Contact us";
$page_link = basename(__DIR__);
include_once('../includes/header.php');
?>
    <section class="banner-container content-container container-map-contact">
        <div id="map-canvas"></div>
        <div class="contact-form-container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-uppercase">Contact Us</h1>
                    <form class="form-horizontal" enctype="multipart/form-data">
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
                                            <textarea name="message" id="message" class="required form-control"></textarea>
                                            <span class="error">Enquiry is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 pull-right">
                                    <button class="btn text-uppercase send_message" id="send_message">Submit</button><br />
                                    <span id="mail_success" class="success">Message Sent!</span>
                                    <span id="mail_fail" class="error">Message failed to send. Contact the system administrator.</span>
                                    <span id="validation"
                                          class="error">Validation error. Please check your entries.</span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="subject" value="S&B Developments - Contact Us"/>
                    </form>
                    <!--                    <form class="form-horizontal contact" role="form" id="contact_form" enctype="multipart/form-data">-->
                    <!--                        <div class="form-group">-->
                    <!--                            <label class="control-label col-sm-2" for="name">Name:</label>-->
                    <!--                            <div class="col-sm-10">-->
                    <!--                                <input type="text" class="form-control required" id="name" name="name">-->
                    <!--                                <span class="error">Name is required</span>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!---->
                    <!--                        <div class="form-group">-->
                    <!--                            <label class="control-label col-sm-2" for="email">Email:</label>-->
                    <!--                            <div class="col-sm-10">-->
                    <!--                                <input type="email" class="form-control required" id="email" name="email">-->
                    <!--                                <span class="error">Email is required</span>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!---->
                    <!--                        <div class="form-group">-->
                    <!--                            <label class="control-label col-sm-2" for="phone">Phone:</label>-->
                    <!--                            <div class="col-sm-10">-->
                    <!--                                <input type="tel" class="form-control required" id="phone" name="phone">-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!---->
                    <!--                        <div class="form-group">-->
                    <!--                            <label class="control-label col-sm-2" for="enquiry">Enquiry:</label>-->
                    <!--                            <div class="col-sm-10">-->
                    <!--                                <textarea class="form-control required" rows="6" id="enquiry" name="enquiry"></textarea>-->
                    <!--                                <span class="error">Message is required</span>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="form-group">-->
                    <!--                            <div class="col-md-10 pull-right">-->
                    <!--                                <input type="submit" class="btn-custom pull-right" value="Submit">-->
                    <!--                                <input type="hidden" name="subject" value="Spirtfire Networking - Contact Form">-->
                    <!--                                <span class="success">Message Sent!</span>-->
                    <!--                                <span-->
                    <!--                                    class="error failed">Message failed to send. Contact the system administrator.</span>-->
                    <!--                                <span class="error validation">Validation error. Please check your entries.</span>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </form>-->
                </div>
            </div>
        </div>
    </section>

    <section class="content-container container--title">
        <div class="container">
            <div class="col-12 text-center">
                <img src="/images/contact-us-icon.png" alt="S&B Developments - Icon"
                     class="img-responsive content-image center-block"/>
                <h1>Contact Us</h1>
                <p><a href="/contact-us/">Contact S&B Developments</a> today to get your free no obligation quotation
                    for the work you require. We have multiple <a href="/contact-us/">branches</a> you could also pop
                    into for a conversation also.</p>
                <p>We look forward to speaking to you soon.</p>
                <br />
                <strong>When calling please quote developments to be put through to the right department.</strong>
            </div>
        </div>

    </section>

    <section class="content-container">
        <div class="container area-blocks">
            <div class="row">
                <div class="col-sm-4">
                    <div class="text-overlay-wrapper">
                        <img src="/images/Maidstone_Town_Center.jpg" alt="S&B Developments - Maidstone Branch"
                             class="img-responsive respond"/>
                        <div class="text-overlay text-overlay_contact"><a href="/contact-us/maidstone/"
                                                                          title="S&B Developments Maidstone Branch"><h3>
                                    Maidstone</h3></a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-overlay-wrapper">
                        <img src="/images/Rochester_Cathedral_from_Castle.JPG" alt="S&B Developments - Rochester Branch"
                             class="img-responsive respond"/>
                        <div class="text-overlay text-overlay_contact"><a href="/contact-us/rochester/"
                                                                          title="S&B Developments Rochester Branch"><h3>
                                    Rochester</h3></a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-overlay-wrapper">
                        <img src="/images/Sittingbourne_Town_Center.jpg" alt="S&B Developments - Sittingbourne Branch"
                             class="img-responsive respond"/>
                        <div class="text-overlay text-overlay_contact"><a href="/contact-us/sittingbourne/"
                                                                          title="S&B Developments Sittingbourne Branch">
                                <h3>Sittingbourne</h3></a></div>
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
include_once('../includes/footer.php');
?>