@extends('pages.layout.app')
@section('content')

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Our Projects</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Current Projects</h2>
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
                            <a href="{{ route('donate') }}" class="read-more">Donate Now</a>
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
                            <a href="{{ route('donate') }}" class="read-more">Donate Now</a>
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
                            <a href="{{ route('donate') }}" class="read-more">Donate Now</a>
                        </div>
                    </div>
                </div><!-- /Causes-3 -->
            </div>
        </div>
    </section><!-- /Causes Section -->

    <section class="causes-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Upcoming Projects</h2>
                <span class="heading-border"></span>
                <p>New initiatives to expand our impact and reach more children in need.</p>
            </div><!-- /Section Heading -->
             <div class="causes-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img height="270" src="img2/2.jpeg" alt="causes">
                            <a href="{{ route('donate') }}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        </div>
                        <div class="causes-details">
                            <h3>Digital Learning Centers</h3>
                            <p>Bring technology education to underserved communities. We're setting up computer labs and digital literacy programs.
                                <br>
                                Preparing children for the digital future.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $40,000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5,000</p>
                            </div>
                            <a href="{{ route('donate') }}" class="read-more">Donate Now</a>
                        </div>
                    </div>
                </div><!-- /Causes-4 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img height="270" src="img2/3.jpeg" alt="causes">
                            <a href="{{ route('donate') }}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        </div>
                        <div class="causes-details">
                            <h3>Child Sponsorship Program</h3>
                            <p>Sponsor a child's education for a year. Your monthly donation provides school fees, uniforms, books, and meals.
                                <br>
                                Build a lasting relationship with a child in need.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $60,000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $8,000</p>
                            </div>
                            <a href="{{ route('donate') }}" class="read-more">Donate Now</a>
                        </div>
                    </div>
                </div><!-- /Causes-5 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img height="270" src="img2/5.jpeg" alt="causes">
                            <a href="{{ route('donate') }}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        </div>
                        <div class="causes-details">
                            <h3>Emergency Relief Fund</h3>
                            <p>Help children affected by natural disasters, conflicts, and emergencies. Provide immediate aid and long-term recovery support.
                                <br>
                                Be there when children need us most.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $100,000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $15,000</p>
                            </div>
                            <a href="{{ route('donate') }}" class="read-more">Donate Now</a>
                        </div>
                    </div>
                </div><!-- /Causes-6 -->
            </div>
        </div>
    </section><!-- /Upcoming Projects Section -->

    <section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <h4>Featured Campaign</h4>
                        <h2>Building Dreams: New School Construction</h2>
                        <p>
                            Every child deserves the chance to learn in a safe, supportive environment. With your help,
                            we're building a school that will serve as a beacon of hope for 200+ children—providing education, meals, and a space to grow.
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">40%</span></div>
                        </div>
                        <div class="donation-box">
                            <h3><i class="ti-bar-chart"></i>Goal: $50,000</h3>
                            <h3><i class="ti-thumb-up"></i>Raised: $20,000</h3>
                        </div>
                        <a href="{{ route('donate') }}" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="img2/6.jpeg" alt="school construction" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Featured Campaigns Section -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>How Your Donation Helps</h2>
                <span class="heading-border"></span>
                <p>Every dollar makes a real difference in a child's life</p>
            </div>
            <div class="row">
                <div class="col-md-3 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-book" style="font-size: 48px; color: #3498db; margin-bottom: 20px;"></i>
                        <h3>$25</h3>
                        <p>Provides school supplies for one child for a year</p>
                    </div>
                </div>
                <div class="col-md-3 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-heart" style="font-size: 48px; color: #e74c3c; margin-bottom: 20px;"></i>
                        <h3>$50</h3>
                        <p>Provides healthcare check-up for 5 children</p>
                    </div>
                </div>
                <div class="col-md-3 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-home" style="font-size: 48px; color: #f39c12; margin-bottom: 20px;"></i>
                        <h3>$100</h3>
                        <p>Builds a clean water system for a family</p>
                    </div>
                </div>
                <div class="col-md-3 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-star" style="font-size: 48px; color: #27ae60; margin-bottom: 20px;"></i>
                        <h3>$500</h3>
                        <p>Sponsors a child's education for one year</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Donation Impact Section -->

    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Stories of Impact</h2>
                <span class="heading-border"></span>
                <p>See how your donations are transforming children's lives around the world.</p>
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

    <section class="about-section padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Get Involved</h2>
                <span class="heading-border"></span>
                <p>There are many ways you can help make a difference in children's lives</p>
            </div>
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-heart" style="font-size: 48px; color: #e74c3c; margin-bottom: 20px;"></i>
                        <h3>Make a Donation</h3>
                        <p>Every gift, no matter the size, makes a real difference. Your donation provides education, healthcare, and hope to children in need.</p>
                        <a href="{{ route('donate') }}" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-user" style="font-size: 48px; color: #3498db; margin-bottom: 20px;"></i>
                        <h3>Become a Volunteer</h3>
                        <p>Share your time and skills to help children learn and grow. We have opportunities for teaching, mentoring, and community support.</p>
                        <a href="{{ route('contact') }}" class="default-btn">Join Us</a>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="about-content text-center">
                        <i class="ti-share" style="font-size: 48px; color: #f39c12; margin-bottom: 20px;"></i>
                        <h3>Spread the Word</h3>
                        <p>Help us reach more people by sharing our mission with your friends, family, and social networks. Awareness is the first step to change.</p>
                        <a href="{{ route('contact') }}" class="default-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Get Involved Section -->

@endsection
