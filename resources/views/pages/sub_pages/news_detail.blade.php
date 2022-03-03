@extends('layouts.master')

@section('content')
    <!-- NEWS DETAIL -->
    <section id="news-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="{{ asset('images/news-image1a.jpeg') }}" class="img-responsive" alt="">
                        </div>
                        <h3>A trip to Kaduna</h3>
                        <p>Aenean molestie porttitor lorem sed semper. Aliquam semper iaculis libero, eu finibus ex euismod
                            at. In molestie justo ut egestas porttitor. Phasellus interdum erat eu lectus condimentum
                            euismod. Sed pellentesque fringilla diam vitae congue. Ut rutrum diam nisi, in maximus felis
                            vulputate vitae.</p>
                        <blockquote>Vestibulum gravida rutrum est non volutpat. Morbi imperdiet odio ut tempor vestibulum.
                            Mauris tincidunt vehicula nibh, sodales vehicula erat imperdiet ut.</blockquote>
                        <p>Maecenas eu lorem gravida nisi aliquam porta. Etiam eu tellus enim. Vivamus ligula ex, iaculis a
                            sodales et, placerat eget neque. In porttitor tortor in purus commodo lobortis. Nullam ornare
                            quam ac turpis luctus, commodo facilisis nisi venenatis. Cras a posuere risus.</p>

                        <ul>
                            <li>Phasellus posuere nisi eleifend, vestibulum ipsum eleifend</li>
                            <li>Nulla sapien neque, posuere vitae porta eu</li>
                            <li>Fusce quis enim vel libero pulvinar gravida sed eu justo</li>
                        </ul>

                        <p>Nunc eget ex sed nisl rhoncus lacinia. Vestibulum porta lectus at est placerat, nec commodo purus
                            dignissim. Suspendisse ac quam in metus laoreet auctor ac quis enim.</p>
                        <div class="news-social-share">
                            <h4>Share this article</h4>
                            <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
