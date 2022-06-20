@extends('layouts.master')

@section('title', 'Welcome to S4DH Platform')

@section('content')
    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make lives' happier and healthy</h3>
                                <h2 style="color: white;">Telemedicine - Connecting Doctors</h2>
                                <a href="#appointment" class="section-btn btn btn-default smoothScroll">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>We look forward to the convergence of technology, medicine, and human progress</h3>
                                <h1>New Lifestyle</h1>
                                <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-third">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Full wing transformation in the healthcare sector is our primary objective</h3>
                                <h1>Your Health Benefits</h1>
                                <a href="{{ route('achievements') }}"
                                    class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-7 col-sm-7">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">About S4DH</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p class="text-justify">
                                Nigeria's health service struggles with insufficient infrastructure and inadequate
                                specialist skills, among many other things. This compromise has led affluent patients
                                traveling outside the country and costing the Nigerian economy approximately $1.3 billion
                                annually.
                            </p>
                            <p class="text-justify">
                                This project and case study aims to examine the application and resilience of communications
                                satellite technology in providing telemedicine services and digital health insurance
                                inclusion, to improve access to high quality healthcare advice and services.
                            </p>
                            <p class="text-justify">Using this technology, a survey, and action research would be used to
                                assess the feasibility of implementing a satellite communication network and software
                                applications for telemedicine in rural areas.
                                <a href="{{ route('about_us') }}">
                                    <button type="button" class="btn btn-primary btn-sm">Read More...</button>
                                </a>
                            </p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                            <img src="{{ asset('images/author-image.jpg') }}" class="img-responsive" alt="">
                            <figcaption>
                                <h3>Dr Lasisi Salami LAWAL (C.Eng)</h3>
                                <p>Principal Investigator</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5">
                    <div class="about-info">
                        <div class="wow fadeInUp text-center" data-wow-delay="0.8s" style="margin-top: 80px;">
                            {{-- <video width="520" height="300" controls>
                                <source src="https://drive.google.com/file/d/1KDujIhL-urKBkJlC0YURfcKmln7lI6vA/preview" type="video/mp4" />
                            </video> --}}
                            <iframe src="https://drive.google.com/file/d/1KDujIhL-urKBkJlC0YURfcKmln7lI6vA/preview"
                                width="520" height="300" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1">

        <div class="container">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Meet the Team</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-xs-4">
                                    <a href="#1">
                                        <img src="{{ asset('images/teams/lasisi_salami.jpg') }}" class="img-responsive">
                                    </a>
                                    <div class="overlay">
                                        <b>Lasisi Salami LAWAL [Ph.D]</b><br>
                                        <span style="font-size: 16px;">Principal Investigator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/musa_aibinu.jpg') }}" class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Abiodun M. AIBINU</b><br>
                                        <span style="font-size: 16px;">Co-Investigator</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/ubong_udoyen.jpg') }}" class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Ubong Udoyen [Ph.D]</b><br>
                                        <span style="font-size: 16px;">Co-Investigator</span>
                                    </div>
                                </div>
                            </div>
                            <!-- add  more items here -->
                            <!-- Example item start:  -->

                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/steve_adeshina.jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Steve A. Adeshina</b><br>
                                        <span style="font-size: 16px;">Co-Supervisor: Supervision</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/chatwin_chris.jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Chatwin R. Chris </b><br>
                                        <span style="font-size: 16px;">Advisor and Supervisorn</span>
                                    </div>
                                </div>

                            </div>


                            <div class="item">

                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/gail_davey.jpg') }}" class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Gail J. G. DAVEY</b><br>
                                        <span style="font-size: 16px;">Advisor and Co-Supervisor</span>
                                    </div>
                                </div>

                            </div>

                            <div class="item">

                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/abdullahi_bala.jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Abdullahi Bala</b><br>
                                        <span style="font-size: 16px;">Supervisor: Advisory & Supervision </span>
                                    </div>
                                </div>

                            </div>

                            <div class="item">

                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/abimbola_alale.jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Abimbola Alale [Ph.D]</b><br>
                                        <span style="font-size: 16px;">Supervisor: Advisory & Supervision</span>
                                    </div>
                                </div>

                            </div>

                            <div class="item">

                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/sambo_(NHIS).jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Mohammed N. Sambo</b><br>
                                        <span style="font-size: 16px;">Supervisor: Advisory & Supervision</span>
                                    </div>
                                </div>

                            </div>

                            <div class="item">

                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/pantami.jpg') }}" class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Prof. Isa Ali Ibrahim (Pantami)</b>
                                        <span style="font-size: 16px;">Supervisor: Advisory & Supervision</span>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img
                                            src="{{ asset('images/teams/omotayo_oshiga.jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Omotayo O. Oshiga [Ph.D]</b><br>
                                        <span style="font-size: 16px;">Co-Investigator</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="{{ asset('images/teams/).jpg') }}"
                                            class="img-responsive"></a>
                                    <div class="overlay">
                                        <b>Abdulrahaman Jaafar [Ph.D]</b><br>
                                        <span style="font-size: 16px;">Co-Investigator</span>
                                    </div>
                                </div>
                            </div>
                            <!--  Example item end -->
                        </div>
                        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i
                                class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i
                                class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="{{ asset('images/contact_us_4x.png') }}" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->

                    @if (session()->has('message'))
                        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                            <div class="alert alert-success" role="alert">
                                <strong>Success</strong> {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif

                    <form id="appointment-form" role="form" method="post" action="{{ route('contact-us') }}">
                        @csrf

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    value="{{ old('name') }}">
                                <div>
                                    <span class="">{{ $errors->first('name') }}</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                    value="{{ old('email') }}">
                                <div>
                                    <span class="">{{ $errors->first('email') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    value="{{ old('phone') }}">
                                <div>
                                    <span class="">{{ $errors->first('phone') }}</span>
                                </div>

                                <label for="Message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message">{{ old('message') }}</textarea>
                                <div>
                                    <span class="">{{ $errors->first('message') }}</span>
                                </div>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
                                    Request</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
