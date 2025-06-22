@extends('pages.layout.app')
@section('content')

    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img style="height: 120px" src="img2/banner-1.jpg" alt="" title="#slider-caption-1"/>
                <img src="img2/2.jpeg" alt="" title="#slider-caption-2"/>
                <img src="img2/3.jpeg" alt="" title="#slider-caption-3"/>
            </div><!-- /#main-slider -->

            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation leFadeInRight sequence">Every Child Deserves a Bright Future</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Your donation can change a child's life forever.
                                    <br> Let's build a world where every child has access to education, healthcare, and hope.</p>
                                <a href="{{ route('contact') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Get
                                    Involved</a>
                                <a href="{{ route('donate') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate
                                    Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-1 -->
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                    Hope Lives in Every Child's Smile</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">
                                    Join Caregivers in providing education, healthcare, and support to children in need.
                                    Together, we can give every child the opportunity to dream, learn, and grow.
                                </p>
                                <a href="{{ route('contact') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Volunteer
                                    With Us</a>
                                <a href="{{ route('donate') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate
                                    Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-2 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Your Love Can Change a Child's World</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">
                                    Whether it's a book, a meal, or a chance to learn—you can transform a child's future today. <br>
                                    Caregivers is where compassion becomes action for children.
                                </p>
                                <a href="{{ route('contact') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Make
                                    a Difference</a>
                                <a href="{{ route('donate') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate
                                    Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-3 -->
        </div>
    </section><!-- /#slider-Section -->

    <section class="promo-section bd-bottom">
        <div class="promo-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="img/icon-1.png" alt="prmo icon">
                            <h3>Make a Donation</h3>
                            <p>Every gift—big or small—goes directly to supporting children with education, healthcare, and essential needs.</p>
                            <a href="{{ route('donate') }}">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="img/icon-2.png" alt="prmo icon">
                            <h3>Child Sponsorship</h3>
                            <p>Sponsor a child's education and watch them grow into confident, educated individuals with bright futures.</p>
                            <a href="{{ route('contact') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="img/icon-3.png" alt="prmo icon">
                            <h3>Become a Volunteer</h3>
                            <p>Share your time and skills to mentor, teach, or support children in their journey to a better life.</p>
                            <a href="{{ route('contact') }}">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->

    <!-- About Us Section -->
    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>About Caregivers</h2>
                <span class="heading-border"></span>
                <p>Dedicated to nurturing the potential of every child, one smile at a time.</p>
            </div>
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="about-content">
                        <img src="img2/5.jpeg" alt="about-thumb" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="about-content">
                        <h3>Our Mission</h3>
                        <p>At Caregivers, we believe every child deserves the opportunity to learn, grow, and dream. Our mission is to provide vulnerable children with access to quality education, healthcare, nutrition, and emotional support.</p>
                        
                        <h3>What We Do</h3>
                        <p>We work tirelessly to:</p>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><i class="ti-check" style="color: #28a745; margin-right: 10px;"></i>Build and support schools in underserved communities</li>
                            <li><i class="ti-check" style="color: #28a745; margin-right: 10px;"></i>Provide nutritious meals and clean water to children</li>
                            <li><i class="ti-check" style="color: #28a745; margin-right: 10px;"></i>Offer healthcare services and medical check-ups</li>
                            <li><i class="ti-check" style="color: #28a745; margin-right: 10px;"></i>Create safe spaces for children to learn and play</li>
                            <li><i class="ti-check" style="color: #28a745; margin-right: 10px;"></i>Support families with resources and education</li>
                        </ul>
                        
                        <p>Since our founding, we've helped thousands of children break the cycle of poverty through education and care. Your support makes this possible.</p>
                        
                        <a href="{{ route('about') }}" class="default-btn">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Us Section -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Our Current Projects</h2>
                <span class="heading-border"></span>
                <p>Every project is an opportunity to change a child's life. <br>
                    Your donation brings us closer to our goals and closer to helping more children.
                </p>
            </div><!-- /Section Heading -->
            <div class="causes-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img height="270" src="img2/1.jpeg" alt="causes">
                            <a href="{{ route('donate') }}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        </div>
                        <div class="causes-details">
                            <h3>Education for Every Child</h3>
                            <p>Help us provide school supplies, uniforms, and educational materials to children who can't afford them.
                                <br>
                                Every child deserves the tools to learn and succeed.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $25,000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $15,000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-1 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img height="270" src="img2/4.jpeg" alt="causes">
                            <a href="{{ route('donate') }}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        </div>
                        <div class="causes-details">
                            <h3>Building Hope: New School Construction</h3>
                            <p>Children in rural areas walk miles to reach the nearest school. <br>
                                Support the construction of a new school that will serve 200+ children with modern facilities and dedicated teachers.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $50,000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $20,000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-2 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img height="270" src="img2/7.webp" alt="causes">
                            <a href="{{ route('donate') }}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        </div>
                        <div class="causes-details">
                            <h3>Healthy Kids, Bright Futures</h3>
                            <p>Provide children with access to clean water, nutritious meals, and basic healthcare.
                                <br>
                                Healthy children can focus on learning and building their dreams.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $30,000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $12,000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-3 -->
            </div>
        </div>
    </section><!-- /Causes Section -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="img2/ceo2.jpeg" alt="profile">
                        <h3>Sarah Johnson <span>Founder & CEO, Caregivers</span></h3>
                        <p>
                            Every child I've met has taught me that hope is the most powerful force in the world. At Caregivers, we don't just provide resources—we nurture dreams and build futures. Your support makes this mission possible.
                        </p>
                        <img src="img/sign.png" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="img2/6.jpeg" alt="about-thumb">
                            <h3>Our Impact</h3>
                            <p>
                                Since 2018, Caregivers has transformed the lives of over 5,000 children across 15 communities. We've built 8 schools, provided education to 2,500 children, and ensured access to clean water for 3,000 families.
                                <br>
                                But our work is far from done. Every day, more children need our help to break free from poverty and build better futures.
                            </p>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="img2/2.jpeg" alt="about-thumb">
                            <h3>Our Vision</h3>
                            <p>We envision a world where every child has access to quality education, healthcare, and the opportunity to reach their full potential. A world where no child is left behind because of circumstances beyond their control.
                                <br>
                                Together, we can make this vision a reality—one child, one community at a time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">125,000</h3>
                        <h4 class="text-white">Dollars Raised</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">500</h3>
                        <h4 class="text-white">Children Helped</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50</h3>
                        <h4 class="text-white">Dedicated Volunteers</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">8</h3>
                        <h4 class="text-white">Schools Built</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->

    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Stories of Hope</h2>
                <span class="heading-border"></span>
                <p>See how your compassion is transforming children's lives around the world.</p>
            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <p>"Thanks to Caregivers, my daughter Maria can now read and write. She dreams of becoming a teacher to help other children like her. This organization doesn't just give education—they give hope."</p>
                    <div class="testi-footer">
                        <img src="img/team-1.jpg" alt="profile">
                        <h4>Carmen Rodriguez<span>Parent, Mexico</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>"Volunteering with Caregivers has been the most rewarding experience of my life. Seeing children's faces light up when they learn something new—that's what makes it all worthwhile."</p>
                    <div class="testi-footer">
                        <img src="img/team-2.jpg" alt="profile">
                        <h4>David Chen <span>Volunteer, Canada</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>"I'm proud to support Caregivers because they don't just talk about helping children—they actually do it. Every dollar goes directly to making a difference in children's lives."</p>
                    <div class="testi-footer">
                        <img src="img/team-3.jpg" alt="profile">
                        <h4>Emma Thompson <span>Donor, UK</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Testimonial Section -->

@endsection
