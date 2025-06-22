@extends('pages.layout.app')
@section('content')

     <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>About Caregivers</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row about-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="about-image">
                            <img src="img2/5.jpeg" alt="about image" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                        </div>
                    </div>

                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>Our Story</h2>
                            <strong>Every child deserves a chance to dream.</strong>
                            <p>
                                Caregivers was founded in 2018 with a simple yet powerful vision: to ensure that every child, regardless of their circumstances, has access to quality education, healthcare, and the opportunity to build a brighter future.
                                <br><br>
                                What began as a small initiative to help children in underserved communities has grown into a comprehensive organization that has touched the lives of thousands of children across 15 communities. We believe that education is the most powerful tool for breaking the cycle of poverty and creating lasting change.
                            </p>
                            <strong>Today, we continue to be driven by the belief that every child's potential is limitless.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <section class="about-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Our Mission & Vision</h2>
                    <span class="heading-border"></span>
                    <p>Guided by compassion, driven by purpose</p>
                </div>
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h3><i class="ti-heart" style="color: #e74c3c; margin-right: 10px;"></i>Our Mission</h3>
                            <p>To provide vulnerable children with access to quality education, healthcare, nutrition, and emotional support. We work to break down barriers that prevent children from reaching their full potential, ensuring that every child has the tools they need to succeed in life.</p>
                            
                            <h3><i class="ti-star" style="color: #f39c12; margin-right: 10px;"></i>Our Vision</h3>
                            <p>We envision a world where every child has access to quality education, healthcare, and the opportunity to reach their full potential. A world where no child is left behind because of circumstances beyond their control.</p>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h3><i class="ti-target" style="color: #3498db; margin-right: 10px;"></i>Our Values</h3>
                            <ul style="list-style: none; padding-left: 0;">
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i><strong>Compassion:</strong> We approach every child with love, understanding, and empathy</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i><strong>Excellence:</strong> We strive for the highest quality in everything we do</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i><strong>Integrity:</strong> We are transparent, honest, and accountable in all our actions</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i><strong>Innovation:</strong> We continuously seek new ways to better serve children</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i><strong>Community:</strong> We believe in the power of collaboration and partnership</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Mission & Vision Section -->

        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>What We Do</h2>
                    <span class="heading-border"></span>
                    <p>Comprehensive support for children's development and well-being</p>
                </div>
                <div class="row">
                    <div class="col-md-4 xs-padding">
                        <div class="about-content text-center">
                            <i class="ti-book" style="font-size: 48px; color: #3498db; margin-bottom: 20px;"></i>
                            <h3>Education Programs</h3>
                            <p>We build and support schools, provide educational materials, and ensure children have access to quality learning environments. Our programs include literacy initiatives, STEM education, and life skills training.</p>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="about-content text-center">
                            <i class="ti-heart" style="font-size: 48px; color: #e74c3c; margin-bottom: 20px;"></i>
                            <h3>Healthcare Services</h3>
                            <p>We provide basic healthcare services, medical check-ups, and health education to children and their families. This includes vaccinations, dental care, and nutrition programs.</p>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="about-content text-center">
                            <i class="ti-home" style="font-size: 48px; color: #f39c12; margin-bottom: 20px;"></i>
                            <h3>Community Support</h3>
                            <p>We work with families and communities to create sustainable support systems. This includes parent education, community development, and emergency assistance programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /What We Do Section -->

        <section class="about-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Our Impact</h2>
                    <span class="heading-border"></span>
                    <p>Real change, measurable results</p>
                </div>
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <img src="img2/6.jpeg" alt="impact image" style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; margin-bottom: 20px;">
                            <h3>Since 2018, We've Achieved:</h3>
                            <ul style="list-style: none; padding-left: 0;">
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Built 8 schools serving over 2,000 children</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Provided education to 5,000+ children</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Ensured clean water access for 3,000 families</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Delivered healthcare services to 4,000+ children</li>
                                <li><i class="ti-check" style="color: #27ae60; margin-right: 10px;"></i>Supported 15 communities across multiple regions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h3>Success Stories</h3>
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                                <p><em>"Maria was 8 years old when we first met her. She couldn't read or write. Today, she's in high school and dreams of becoming a teacher. Her story is why we do what we do."</em></p>
                                <strong>- Sarah Johnson, Founder</strong>
                            </div>
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px;">
                                <p><em>"The school Caregivers built in our village has changed everything. Our children now have hope for a better future."</em></p>
                                <strong>- Village Elder, Rural Community</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Impact Section -->

        <section class="team-section bg-grey bd-bottom circle shape padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Our Leadership Team</h2>
                    <span class="heading-border"></span>
                    <p>Dedicated professionals committed to children's futures</p>
                </div>
                <div class="row">
                    <div class="col-md-4 xs-padding">
                        <div class="team-content text-center">
                            <img src="img2/ceo2.jpeg" alt="CEO" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-bottom: 20px;">
                            <h3>Sarah Johnson</h3>
                            <span style="color: #3498db; font-weight: bold;">Founder & CEO</span>
                            <p>Sarah founded Caregivers with a vision to ensure every child has access to education and opportunity. With over 15 years of experience in child development and education, she leads our organization with passion and dedication.</p>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="team-content text-center">
                            <img src="img2/2.jpeg" alt="Program Director" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-bottom: 20px;">
                            <h3>Dr. Michael Chen</h3>
                            <span style="color: #3498db; font-weight: bold;">Program Director</span>
                            <p>Dr. Chen oversees all educational programs and ensures we deliver the highest quality learning experiences. His expertise in curriculum development has helped thousands of children succeed academically.</p>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="team-content text-center">
                            <img src="img2/3.jpeg" alt="Health Coordinator" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-bottom: 20px;">
                            <h3>Dr. Elena Rodriguez</h3>
                            <span style="color: #3498db; font-weight: bold;">Health Coordinator</span>
                            <p>Dr. Rodriguez leads our healthcare initiatives, ensuring children receive proper medical care and nutrition. Her background in pediatric medicine has been invaluable to our mission.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->

        <section class="team-section bd-bottom padding">
            <div class="container">
                <div class="team-wrapper row">
                    <div class="col-lg-8 offset-lg-2 sm-padding">
                        <div class="team-content">
                            <h2>Join Our Mission</h2>
                            <h3>Volunteer with Caregivers</h3>
                            <p>
                                Our volunteers are the heart of everything we do. By joining our community, you become part of a compassionate force committed to transforming children's lives through education, care, and support.
                            </p>
                            <strong>Why Volunteer With Us?</strong>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i>Make a direct impact on children's lives</li>
                                <li><i class="fa fa-check"></i>Gain valuable experience in child development and education</li>
                                <li><i class="fa fa-check"></i>Join a supportive community of like-minded individuals</li>
                                <li><i class="fa fa-check"></i>Flexible volunteering opportunities to fit your schedule</li>
                                <li><i class="fa fa-check"></i>Receive training and support for all volunteer roles</li>
                            </ul>
                            <p><strong>Ready to make a difference? Join our volunteer team today.</strong></p>
                            <a href="{{ route('contact') }}" class="default-btn">Become a Volunteer</a>
                            <a href="{{ route('donate') }}" class="default-btn" style="margin-left: 10px;">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Volunteer Section -->

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

@endsection
