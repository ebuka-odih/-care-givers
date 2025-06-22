@extends('pages.layout.app')
@section('content')

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Our Causes</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Causes</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->
    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Causes</h2>
                <span class="heading-border"></span>
                <p>Together, we create hope. Your support brings real change to real lives. <br>
                    Every project below is an opportunity to make a lasting difference—today.
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
                            <h3>Empowering Young Minds This Summer</h3>
                            <p>Help us provide learning kits, meals, and mentorship to children in underserved
                                communities.
                                <br>
                                Let’s spark curiosity and build brighter futures—one child at a time.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $15000</p>
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
                            <h3>Help Us Build a School for Children in Need</h3>
                            <p>Thousands of children are eager to learn but have no classrooms. <br>
                                Support the construction of a safe, equipped school that opens doors to education and
                                opportunity.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $20000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
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
                            <h3>Clean Water Project for Rural Communities</h3>
                            <p>Access to clean water saves lives. We’re building sustainable water systems to serve
                                rural families in need.
                                <br>
                                Because every drop counts—and every life matters.
                            </p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $35000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $10000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-3 -->
            </div>
        </div>
    </section><!-- /Causes Section -->




    <section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <h4>Featured Campaigns</h4>
                        <h2>Help Us Build a School—One Brick, One Dream at a Time</h2>
                        <p>
                            Every child deserves the chance to learn in a safe, supportive environment. With your help,
                            we’re building a school that will serve as a beacon of hope for underserved
                            children—providing education, meals, and a space to grow.
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">85%</span></div>
                        </div>
                        <div class="donation-box">
                            <h3><i class="ti-bar-chart"></i>Goal: $350000</h3>
                            <h3><i class="ti-thumb-up"></i>Raised: $25000</h3>
                        </div>
                        <a href="{{ route('donate') }}" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="img/video.jpg" alt="video">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Featured Campaigns Section -->

    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>What People Say</h2>
                <span class="heading-border"></span>
                <p>See how your compassion is transforming lives around the world.</p>
            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <p>{{ env('APP_NAME') }} reminded me that even small acts of kindness can spark huge change. Their
                        work is honest, and their heart is real.</p>
                    <div class="testi-footer">
                        <img src="img/team-1.jpg" alt="profile">
                        <h4>Alejandro Ruiz<span>Spain</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>Volunteering with {{ env('APP_NAME') }} was one of the most meaningful experiences of my life. I
                        saw lives being touched—and mine was too.</p>
                    <div class="testi-footer">
                        <img src="img/team-2.jpg" alt="profile">
                        <h4>Mei-Ling Zhang <span>Taiwan</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>I’m proud to support a charity that doesn’t just talk about change—they live
                        it. {{ env('APP_NAME') }} is a beacon of hope.</p>
                    <div class="testi-footer">
                        <img src="img/team-3.jpg" alt="profile">
                        <h4>Amina El-Tayeb <span>Egypt</span></h4>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- Testimonial Section -->

@endsection
