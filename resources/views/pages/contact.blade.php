@extends('pages.layout.app')
@section('content')

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Contact Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="contact-section padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Get in Touch</h2>
                <span class="heading-border"></span>
                <p>We'd love to hear from you. Whether you want to volunteer, donate, or just learn more about our work with children, we're here to help.</p>
            </div>
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p>Ready to make a difference in children's lives? We're here to answer your questions and help you get involved in our mission to provide education, healthcare, and hope to children in need.</p>
                        <ul>
                            <!-- <li><i class="ti-location-pin"></i> Place du Palais,<br>
                                Monaco-Ville 98015,<br>
                                Monaco
                            </li> -->
                            <li><i class="ti-email"></i> <a
                                    href="mailto:info@care-givers.org"><span>info@care-givers.org</span></a>
                            </li>
                            <li><i class="ti-time"></i> Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 10:00 AM - 4:00 PM
                            </li>
                        </ul>
                        
                        <h3 style="margin-top: 30px;">Ways to Get Involved</h3>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Volunteer your time and skills</li>
                            <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Make a donation to support our projects</li>
                            <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Sponsor a child's education</li>
                            <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Organize a fundraising event</li>
                            <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Spread awareness about our mission</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Send us a Message</h3>
                        <p>Have a question or want to get involved? Fill out the form below and we'll get back to you as soon as possible.</p>
                        <form id="contact-form" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Your Email"
                                           required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"
                                           required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <select id="inquiry_type" name="inquiry_type" class="form-control" required>
                                        <option value="">Select Inquiry Type</option>
                                        <option value="volunteer">Volunteer Opportunities</option>
                                        <option value="donation">Donation Information</option>
                                        <option value="sponsorship">Child Sponsorship</option>
                                        <option value="partnership">Partnership Opportunities</option>
                                        <option value="general">General Inquiry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5"
                                              class="form-control message" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Frequently Asked Questions</h2>
                <span class="heading-border"></span>
                <p>Common questions about getting involved with Caregivers</p>
            </div>
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="about-content">
                        <h3><i class="ti-help" style="color: #3498db; margin-right: 10px;"></i>How can I volunteer?</h3>
                        <p>We have various volunteer opportunities including teaching, mentoring, administrative support, and community outreach. Contact us to learn about current openings and requirements.</p>
                        
                        <h3><i class="ti-help" style="color: #3498db; margin-right: 10px;"></i>Where does my donation go?</h3>
                        <p>Your donations directly support our programs: 85% goes to program services (education, healthcare, community support), 10% to administrative costs, and 5% to fundraising efforts.</p>
                        
                        <h3><i class="ti-help" style="color: #3498db; margin-right: 10px;"></i>Can I sponsor a specific child?</h3>
                        <p>Yes! Our child sponsorship program allows you to support a specific child's education for a year. You'll receive updates about their progress and can even correspond with them.</p>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="about-content">
                        <h3><i class="ti-help" style="color: #3498db; margin-right: 10px;"></i>How do I organize a fundraiser?</h3>
                        <p>We provide support and materials for community fundraisers. Contact us to discuss your ideas and we'll help you get started with planning and promotion.</p>
                        
                        <h3><i class="ti-help" style="color: #3498db; margin-right: 10px;"></i>Are my donations tax-deductible?</h3>
                        <p>Yes, Caregivers is a registered non-profit organization and all donations are tax-deductible. You'll receive a receipt for your records.</p>
                        
                        <h3><i class="ti-help" style="color: #3498db; margin-right: 10px;"></i>How can my organization partner with you?</h3>
                        <p>We welcome partnerships with businesses, schools, and other organizations. Contact us to discuss potential collaboration opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /FAQ Section -->

@endsection
