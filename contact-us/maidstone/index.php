<?php
global $page_title, $page_link;
$page_title = "S & B Developments Kent - Maidstone Branch";
$page_link = basename(__DIR__);
include_once('../../includes/header.php');
?>
    <section class="banner-container content-container container-map-contact">
        <div id="map-canvas"></div>
        <div class="contact-form-container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-uppercase">Contact Us</h1>
                    <form class="form-horizontal contact" role="form" id="contact_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control required" id="name" name="name">
                                <span class="error">Name is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control required" id="email" name="email">
                                <span class="error">Email is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Phone:</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control required" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="enquiry">Enquiry:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control required" rows="6" id="enquiry" name="enquiry"></textarea>
                                <span class="error">Message is required</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 pull-right">
                                <input type="submit" class="btn-custom pull-right" value="Submit">
                                <input type="hidden" name="subject" value="Spirtfire Networking - Contact Form">
                                <span class="success">Message Sent!</span>
                                <span
                                    class="error failed">Message failed to send. Contact the system administrator.</span>
                                <span class="error validation">Validation error. Please check your entries.</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="content-container container--title">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Maidstone</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="tel:01622-682-555"><h1>Telephone: 01622 682 555</h1></a>
                </div>
            </div>
            <div class="col-sm-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4992.586057082266!2d0.525962!3d51.268925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0ffd09a1a088078!2sS%26B+Car+and+Van+Hire+-+Maidstone!5e0!3m2!1sen!2sus!4v1475366108344"
                    width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Address</h4>
                        <ul class="list-unstyled">
                            <li>S&B Car and Van Hire Maidstone</li>
                            <li>32-34 Upper Stone Street</li>
                            <li>Maidstone</li>
                            <li>Kent</li>
                            <li>ME15 6HA</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Opening Times</h4>
                        <ul class="list-unstyled">
                            <li>Monday 8am - 5pm</li>
                            <li>Tuesday 8am - 5pm</li>
                            <li>Wednesday 8am - 5pm</li>
                            <li>Thursday 8am - 5pm</li>
                            <li>Friday 8am - 5pm</li>
                            <li>Saturday 8am - 1pm</li>
                            <li>Sunday 8am - 11am</li>
                        </ul>
                    </div>
                </div>
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
        <br />
    </section>

<?php
include_once('../../includes/footer.php');
?>