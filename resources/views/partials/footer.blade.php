<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
         <div class="row">

              <div class="col-md-4 col-sm-4">
                   <div class="footer-thumb"> 
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                        <p>For further information about the project. Kindly reach out to the following contacts: </p>

                        <div class="contact-info">
                             <p><i class="fa fa-phone"></i> +2348023151587</p>
                             <p><i class="fa fa-envelope-o"></i> <a href="mailto:lawal_lasisi1@yahoo.com">lawal_lasisi1@yahoo.com</a></p>
                        </div>
                   </div>
              </div>

              <div class="col-md-4 col-sm-4"> 
                   <div class="footer-thumb"> 
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Quick links</h4>
                        
                         <div class="footer-link">
                              <span><a href="{{ route('index') }}#home">Home</a></span><br>
                              <span><a href="{{ route('index') }}#about">About Us</a></span><br>
                              <span><a href="{{ route('index') }}#team">Teams</a></span><br>
                              <span><a href="{{ route('achievements') }}">Achievements</a></span><br>                        
                         </div>
                    
                   </div>
              </div>

              <div class="col-md-4 col-sm-4"> 
                   <div class="footer-thumb">
                        <div class="opening-hours">
                             <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                             <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                             <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                             <p>Sunday <span>Closed</span></p>
                        </div> 

                        <ul class="social-icon">
                             <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                             <li><a href="#" class="fa fa-twitter"></a></li>
                             <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                   </div>
              </div>

              <div class="col-md-12 col-sm-12 border-top">
                   <div class="col-md-4 col-sm-6">
                        <div class="copyright-text"> 
                             <p>Copyright &copy; 2022 | Satellite for Digital Health </p>
                        </div>
                   </div>
                   <div class="col-md-8 col-sm-6 text-align-right">
                        <div class="angle-up-btn"> 
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                        </div>
                   </div>   
              </div>
              
         </div>
    </div>
</footer>


@include('roots._javascript')