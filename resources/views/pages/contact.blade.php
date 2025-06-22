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
        <div id="google_map"></div><!-- /#google_map -->
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor, the abused and the helpless.</p>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference.</p>
                        <ul>
                            <li><i class="ti-location-pin"></i> 24 Crescent House,<br>
                                Bishopsgate Street,<br>
                                Birmingham, B15 1LJ,<br>
                                United Kingdom
                            </li>
                            <li><i class="ti-email"></i> <a
                                    href="mailto:info@royalcarecome.org"><span>info@royalcarecome.org</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Drop us a line</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <form action="https://html.dynamiclayers.net/dl/charitify/contact.php" method="post"
                              id="ajax_form" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                           required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5"
                                              class="form-control message" placeholder="Message" required></textarea>
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

    <section class="widget-section padding">
        <div class="container">
            <div class="widget-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <img src="img/logo-light.png" alt="logo">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor</p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Recent Campaigns</h3>
                        <ul class="widget-link">
                            <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                            <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a>
                            </li>
                            <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                            <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Charitify Location</h3>
                        <ul class="address">
                            <li><i class="ti-email"></i> <a
                                    href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection"
                                    class="__cf_email__" data-cfemail="672e090108273e08121523080a060e094904080a">[email&#160;protected]</a>
                            </li>
                            <li><i class="ti-mobile"></i> +(333) 052 39876</li>
                            <li><i class="ti-world"></i> Www.YourWebsite.com</li>
                            <li><i class="ti-location-pin"></i> 60 Grand Avenue. Central New Road 0708, USA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./Widget Section -->

@endsection
