@extends('pages.layout.app')
@section('content')

     <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>About Us</h2>
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
                            <img src="img/about.jpg" alt="about image">
                        </div>
                    </div>

                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>About Us</h2>
                            <strong>Caring for the forgotten. Serving with purpose.</strong>
                            <p>
                                At {{ env('APP_NAME') }}, we believe that every life matters—regardless of age, background, or circumstance. We are a non-profit organization driven by love, rooted in compassion, and committed to restoring dignity to the most vulnerable members of our society.
                                <br>
                                What started as a small act of kindness has grown into a community of change-makers, working to provide food, shelter, healthcare, clean water, and emotional support to those who need it most. From rural outreach to elderly care and children’s development, our mission is simple
                            </p>
                            <strong>be the hope where it’s needed most.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <section class="team-section bg-grey bd-bottom circle shape padding">
            <div class="container">
                <div class="team-wrapper row">
                    <div class="col-lg-8 offset-lg-2 sm-padding">
                        <div class="team-content">
                            <h2>Become a Volunteer</h2>
                            <h3>Lend your heart. Share your time. Change a life.</h3>
                            <p>
                                At {{ env('APP_NAME') }}, our volunteers are the soul of everything we do. By joining our community, you become part of a compassionate force committed to restoring dignity, joy, and opportunity to the lives of the most vulnerable.
                            </p>
                            <strong>Why Volunteer With Us?</strong>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i>We welcome everyone with warmth and respect</li>
                                <li><i class="fa fa-check"></i>Free training provided—no experience needed</li>
                                <li><i class="fa fa-check"></i>Make a real difference in the lives of children and families</li>
                                <li><i class="fa fa-check"></i>No quotas, no pressure—just genuine impact</li>
                                <li><i class="fa fa-check"></i>It’s completely free to join—your time is the only thing we ask for</li>
                            </ul>
                            <p><strong>Be a light in someone’s world. Volunteer with us today.</strong></p>
                            <a href="{{ route('contact') }}" class="default-btn">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->

       <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">11669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->


@endsection
