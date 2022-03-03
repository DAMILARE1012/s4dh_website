@extends('layouts.master')

@section('content')
    <!-- ABOUT US DETAILS -->
           <!-- ABOUT -->
<!-- ABOUT -->
<section id="about">
     <div class="container">
         <div class="row">

             <div class="col-md-7 col-sm-7">
                 <div class="about-info">
                     <h2 class="wow fadeInUp" data-wow-delay="0.6s">About S4DH</h2>
                     <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <p class="text-justify">
                              Nigeria's health service struggles with insufficient infrastructure and inadequate specialist skills, among many other things. This compromise has led affluent patients traveling outside the country and costing the Nigerian economy approximately $1.3 billion annually.
                           </p>
                           <p class="text-justify">
                              This project and case study aims to examine the application and resilience of communications satellite technology in providing telemedicine services and digital health insurance inclusion, to improve access to high quality healthcare advice and services.
                           </p>
                           <p class="text-justify">Using this technology, a survey, and action research would be used to assess the feasibility of implementing a satellite communication network and software applications for telemedicine in rural areas.  
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
                     <div class="wow fadeInUp text-center" data-wow-delay="0.8s">
                         <img src="{{ asset('images/about-lasisi.jpg') }}" alt="">
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>
           
   <section id="vision" style="padding-top: 40px;">
     <div class="container">
          <div class="text-center">
          <h2 class="wow fadeInUp" data-wow-delay="0.6s">Aim and Objectives</h2>
          </div>
          <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <img src="{{ asset('images/aims_objective.jpg') }}" alt="">
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p class="text-justify">
                                   The initiative aims to build a global research community of think tanks and academia around research and knowledge sharing to accelerate digital resiliency and digital inclusion during the COVID-19 recovery globally. The following objectives are the project deliverables. 
                                <ul class="text-justify">
                                     <li>Examine the application and resilience of communications satellite technology in providing telemedicine services including digital health insurance inclusion to improve access to high quality healthcare advice and services.</li>
                                     <li>Utilize technology, and early methods approach comprising: case studies, a survey and action research to determine the potential for implementing a satellite communication network for telemedicine in rural areas.</li>
                                     <li>Create a mobile emergency response facility that can be quickly deployed to a disaster location or internally displaced persons (IDP) camps</li>
                                     <li>Extend emergency healthcare service delivery in an attempt to enhace the nation's disaster response preparedness and effectiveness utilizing communication satellite technology and software applications.</li>
                                </ul>
                              </p>
                         </div>
                    </div>
               </div>
               
          </div>
     </div>
</section>

<section id="industrial_partners" data-stellar-background-ratio="1" style="padding-top: 40px;">
     <div class="container">
          <div class="text-center">
               <h2 class="wow fadeInUp" data-wow-delay="0.6s">Collaborators and Support Partners</h2>
               </div>
          <div class="row">
               <div class="column">
                 <div class="card">
                   <img src="{{ asset('images/partners/futminna_logo.png') }}" alt="FUT Minna" style="width:100%">
                 </div>
               </div>

               <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/nile_university.jpg') }}" alt="Nile University" style="width:100%">
                    </div>
               </div>

               <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/university_sussex.jpg') }}" alt="Sussex University" style="width:100%">
                    </div>
               </div>
             
               <div class="column">
                 <div class="card">
                   <img src="{{ asset('images/partners/one2one.jpg') }}" alt="One to One Healthcare" style="width:100%">
                 </div>
               </div>
             
               <div class="column">
                 <div class="card">
                   <img src="{{ asset('images/partners/ministry_com.jpg') }}" alt="Ministry Communication" style="width:100%">
                 </div>
               </div>

               <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/bringhton.jpg') }}" alt="Ministry Communication" style="width:100%">
                    </div>
               </div>

               <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/nhis.jpg') }}" alt="Ministry Communication" style="width:100%">
                    </div>
               </div>

               <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/nihr.jpg') }}" alt="Ministry Communication" style="width:100%">
                    </div>
               </div>

               <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/nigComSat.jpg') }}" alt="Ministry Communication" style="width:100%">
                    </div>
               </div>

               {{-- <div class="column">
                    <div class="card">
                      <img src="{{ asset('images/partners/ministry_com.jpg') }}" alt="Ministry Communication" style="width:100%">
                    </div>
               </div> --}}
          </div>
     </div>
     
        
</section>
  
       <!-- TEAM -->
       {{-- <section id="team" data-stellar-background-ratio="1">
            <div class="container">
                 <div class="row">
  
                      <div class="col-md-6 col-sm-6">
                           <div class="about-info">
                                <h2 class="wow fadeInUp" data-wow-delay="0.1s">Meet the Team</h2>
                           </div>
                      </div>
  
                      <div class="clearfix"></div>
  
                      <div class="col-md-4 col-sm-6">
                           <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{ asset('images/teams/lasisi_salami.jpg') }}" class="img-responsive" alt="">
  
                                     <div class="team-info">
                                          <h3>Dr. Lasisi S. LAWAL </h3>
                                          <p>Principal Investigator</p>
                                          <div class="team-contact-info">
                                               <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                               <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                                          </div>
                                          <ul class="social-icon">
                                               <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                               <li><a href="#" class="fa fa-envelope-o"></a></li>
                                          </ul>
                                     </div>
  
                           </div>
                      </div>
  
                      <div class="col-md-4 col-sm-6">
                           <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                <img src="{{ asset('images/teams/abiodun_musa.jpg') }}" class="img-responsive" alt="">
  
                                     <div class="team-info">
                                          <h3>Prof. Abiodun M. AIBINU</h3>
                                          <p>Co - Investigator</p>
                                          <div class="team-contact-info">
                                               <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                               <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
                                          </div>
                                          <ul class="social-icon">
                                               <li><a href="#" class="fa fa-facebook-square"></a></li>
                                               <li><a href="#" class="fa fa-envelope-o"></a></li>
                                               <li><a href="#" class="fa fa-flickr"></a></li>
                                          </ul>
                                     </div>
  
                           </div>
                      </div>
  
                      <div class="col-md-4 col-sm-6">
                           <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                                <img src="{{ asset('images/teams/omotayo_oshiga.jpg') }}" class="img-responsive" alt="">
  
                                     <div class="team-info">
                                          <h3>Dr. Omotayo O. Oshiga</h3>
                                          <p>Co-Investigator</p>
                                          <div class="team-contact-info">
                                               <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                               <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                                          </div>
                                          <ul class="social-icon">
                                               <li><a href="#" class="fa fa-twitter"></a></li>
                                               <li><a href="#" class="fa fa-envelope-o"></a></li>
                                          </ul>
                                     </div>
  
                           </div>
                      </div>
                      
                 </div>
            </div>
       </section> --}}
  
  
@endsection
     