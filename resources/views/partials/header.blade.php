     <!-- HEADER -->
     <header>
         <div class="container">
             <div class="row">

                 <div class="col-md-4 col-sm-5">
                     <p>Welcome to the Satellite for Digital Health Platform</p>
                 </div>

                 <div class="col-md-8 col-sm-7 text-align-right">
                     <span class="phone-icon"><i class="fa fa-phone"></i>+2348023151587</span>
                     <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 4:00 PM (Mon-Fri)</span>
                     <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                             href="mailto:lawal_lasisi1@yahoo.com">lawal_lasisi1@yahoo.com</a></span>
                 </div>

             </div>
         </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
         <div class="container">

             <div class="navbar-header">
                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon icon-bar"></span>
                     <span class="icon icon-bar"></span>
                     <span class="icon icon-bar"></span>
                 </button>

                 <!-- lOGO TEXT HERE -->
                 <a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('images/s4dh.png') }}"
                         alt=""></a>
             </div>

             <!-- MENU LINKS -->
             <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                     <li><a href="{{ route('index') }}" class="smoothScroll">Home</a></li>
                     <li><a href="{{ route('about_us') }}" class="smoothScroll">About Us</a></li>
                     <li><a href="{{ route('index') }}#team" class="smoothScroll">The Team</a></li>
                     <li><a href="{{ route('achievements') }}" class="smoothScroll">Achievements</a></li>
                     {{-- <li><a href="{{ route('gallery') }}" class="smoothScroll">Gallery</a></li> --}}
                     <li class="appointment-btn"><a href="{{ route('index') }}#appointment">Contact Us</a></li>
                 </ul>
             </div>

         </div>
     </section>
