@extends('layouts.master')

@section('content')

    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                       <!-- SECTION TITLE -->
                       <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2>Achievements</h2>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                       <!-- NEWS THUMB -->
                       <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('1st_news_details') }}">
                                 <img src="{{ asset('images/a.jpeg') }}" class="img-responsive" alt="">
                            </a>
                            <div class="news-info">
                                 <span>March 08, 2018</span>
                                 <h5><a href="{{ route('1st_news_details') }}">Review Annual Medical Research...</a></h5>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                       <!-- NEWS THUMB -->
                       <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <a href="{{ route('1st_news_details') }}">
                                 <img src="{{ asset('images/a.jpeg') }}" class="img-responsive" alt="">
                            </a>
                            <div class="news-info">
                                 <span>February 20, 2018</span>
                                 <h5><a href="{{ route('1st_news_details') }}">Review Annual Medical Research</a></h5>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                       <!-- NEWS THUMB -->
                       <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                            <a href="{{ route('1st_news_details') }}">
                                 <img src="{{ asset('images/a.jpeg') }}" class="img-responsive" alt="">
                            </a>
                            <div class="news-info">
                                 <span>January 27, 2018</span>
                                 <h5><a href="{{ route('1st_news_details') }}">Review Annual Medical Research</a></h5>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <a href="{{ route('1st_news_details') }}">
                              <img src="{{ asset('images/a.jpeg') }}" class="img-responsive" alt="">
                         </a>
                         <div class="news-info">
                              <span>January 27, 2018</span>
                              <h5><a href="{{ route('1st_news_details') }}">Review Annual Medical Research</a></h5>
                         </div>
                    </div>
               </div>

             </div>
        </div>
   </section>

@endsection
     