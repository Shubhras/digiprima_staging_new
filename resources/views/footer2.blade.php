@include('pop_up')
<!--== Footer Start ==-->
  <footer class="footer dark-block">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="widget widget-text">
              <div class="logo logo-footer">
                <a href="{{asset('/')}}"> <img class="logo logo-display" src="{{asset('/images/logo-digi.png')}}" alt=""></a> 
              </div>
              <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="widget widget-links">
              <h5 class="widget-title">Useful Links</h5>
              <ul>
                <li><a href="{{asset('/') }}">Home</a></li>
                <li><a href="{{asset('/about-us') }}">About Us</a></li>
                <li><a href="{{asset('/specialties') }}">Our Services</a></li>
                <li><a href="{{asset('/blog-list') }}">Blog</a></li>
                <li><a href="{{asset('/portfolio')}}">Portfolio</a></li>
                <li><a href="{{asset('/case-study')}}">Case Study</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-links">
              <h5 class="widget-title">Contact Us</h5>
              <div class="widget-links">
                  <ul>
                    <li>47 W 13th St,</li>
                    <li>NY 10011, New York, USA</li></br>
                    <!-- <li>110-Gurudev plaza, Indore, India</li> -->
                    <li>info@digiprima.com</li>
                    <li>+1 (347) 973 9732</li>
                    <!-- <li>+91 97555 70042</li>
                    <li>+971 55 3570329</li> -->
                  </ul>
              </div>
            </div>
          </div>
           <div class="col-sm-6 col-md-3">
            <div class="widget widget-text">
              <h5 class="widget-title">Popular Tags</h5>
              <div class="popular-tags"> 
                 
                <a href="{{asset('/angular-js-developers') }}">AngularJS</a> 
                <a href="{{asset('/react-js-developer') }}">ReactJS</a>
                <a href="{{asset('/node-js-development') }}">NodeJS</a>
                <a href="{{asset('/flutter-app-development-company') }}">Flutter</a>
                <a href="{{asset('/mean-stack-development-services') }}">Mean Stack</a> 
                <a href="{{asset('/ios-app-development') }}">iOS</a> 
                <a href="{{asset('/android-app-development') }}">Android</a> 
                
                
                <a href="{{asset('/microsoft-dot-net-developer') }}">.NET</a>
               
                <a href="{{asset('/python-developer') }}">Python</a>
                
               
                <a href="{{asset('/php-developer-india') }}">PHP</a>
                <a href="{{asset('/ecommerce-software-development-services')}}">E-commerce</a>
                <a href="{{asset('/java-development')}}">JAVA</a>
                <a href="{{asset('/wordpress-development-services') }}">Wordpress</a>
                <a href="{{asset('/magento-development-services') }}">Magento </a>
                <a href="{{asset('/laravel-development-company') }}">Laravel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="copy-right  text-left">© 2021 <i class=""></i> DigiPrima. All rights reserved</div>
          </div>
          <div class="col-md-6 col-xs-12">
            <ul class="social-media">
              <li><a href="https://www.facebook.com/DigiprimaTech" target="_blank" title="DigiPrima Facebook Oficial Account" class="icofont icofont-social-facebook"></a></li>
              <li><a href="https://twitter.com/digiprimatech" target="_blank" title="DigiPrima twitter Oficial Account" class="icofont icofont-social-twitter"></a></li>
              <li><a href="https://api.whatsapp.com/send/?phone=919755570042&text=I%27m+interested+in+your+Services.%0Aplease+contact+me&app_absent=0" target="_blank" title="DigiPrima whatsapp Account"  class="icofont icofont-social-whatsapp"></a></li>
              <li><a href="https://www.instagram.com/digiprima/" target="_blank" title="DigiPrima instagram Oficial Account" class="icofont icofont-social-instagram"></a></li>
              <li><a href="https://www.linkedin.com/company/digiprima-technologies/" target="_blank" title="DigiPrima linkedin Oficial Account" class="icofont icofont-social-linkedin"></a></li>
              <li><a href="https://www.youtube.com/channel/UCyK3Cqt8uTDs3DEzN-h-ueA?sub_confirmation=1~" target="_blank" title="DigiPrima youtube Oficial Account" class="icofont icofont-social-youtube"></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--== Footer End ==-->
   <!--== Go to Top  
  <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
   Go to Top End ==-->

</div>
<!--== Wrapper End ==-->

<!-- Modal -->
        <!-- The Modal -->
      <div class="modal fade" id="myModalqq" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <img src="{{asset('/images/logo-digi.png')}}" class="simg" alt="digiprima-logo" width="90" title="digiprima-logo">
              <button type="button" id="contact_form_modal_dismiss" class="close sclose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <div class="query_form popup_form">
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h3 class="mb-30 text-center">We can help you transform your business?</h3>
                    <div class="mt-10">
                      <form method="post"  action="{{url('/popup-submit-contact')}}" name="suscribe">
                         <input type='hidden' name='_token' value='{{ csrf_token() }}' />
                        <input type="text" name="first_name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="" class="single-input" id="f_name_popup">
                    <div class="mt-10">
                    <input type="email" name="EMAIL" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Your Email '" required="" class="single-input" id="email_popup">
                    </div>
                    <div class="mt-10">
                    <input type="text" name="PhoneNumber" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input" id="c_number_popup"  onkeypress="return isNumber(event)" maxlength="10">
                    </div>
                    <input type="hidden" name="from_contact_page" value="no">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <div class="input-group-icon mt-10">
                    </div>
                    <div class="mt-10">
                    <div class="message_box">
                    <textarea placeholder="Message..." name="message"  class="sblack" id="message"></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Leci8oUAAAAAHVJrO5mNNO676gmZNSuh7Sg-Rcj"></div>
                      <br/>
                    </div>

                    <div class="form_submit_block text-center">
                    <button type="submit" class="genric-btn warning radius header-contact-btn" onclick="contact_validation_popup()" id="submit_button">Let's talk</button>
                  
                     
                    </div>
                    </form>
                  </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class=" popup_footer">
              <div class="row" style="margin-left: 0;">
                <div class="col-md-8">
                  <div class="call">
                      <a href="tel:+919755570042">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                          width="18" height="18"
                          viewBox="0 0 192 192"
                          style=" fill:#000000;">
                          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,192v-192h192v192z" fill="none"></path>
                            <g fill="#fff">
                              <path d="M160.184,123.904c-5.04,-0.12 -11.384,-0.416 -15.392,-1.12c-4.336,-0.768 -9.552,-2.256 -13.224,-3.4c-2.88,-0.896 -6.016,-0.104 -8.152,2.024l-17.736,17.632c-12.256,-6.456 -22.072,-13.976 -30.384,-22.336c-8.36,-8.312 -15.88,-18.128 -22.336,-30.384l17.632,-17.744c2.128,-2.136 2.92,-5.272 2.024,-8.152c-1.136,-3.664 -2.632,-8.88 -3.392,-13.216c-0.712,-4.008 -1,-10.352 -1.128,-15.392c-0.104,-4.36 -3.656,-7.816 -8.016,-7.816h-28.08c-3.504,0 -8,2.624 -8,8c0,36.312 14.72,70.992 39.728,96.272c25.28,25.008 59.96,39.728 96.272,39.728c5.376,0 8,-4.496 8,-8v-28.08c0,-4.36 -3.456,-7.912 -7.816,-8.016z"></path>
                            </g>
                          </g>
                        </svg>
                      </a>
                    <span>+91 975 557 0042 &nbsp;  | &nbsp; </span>
                    <span> +1 (347) 973 9732</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="call">
                      <a href="skype:shubhras21?call">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                          width="18" height="18"
                          viewBox="0 0 210 210"
                          style=" fill:#000000;">
                          <g transform="">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                              <path d="M0,210v-210h210v210z" fill=""></path>
                              <g id="original-icon" fill="#fff">
                                <g id="surface1">
                                  <path d="M202.64874,126.92759c1.51442,-6.72025 2.27163,-13.69291 2.27163,-20.85487c0,-53.57272 -44.23378,-97.01773 -98.81611,-97.01773c-5.74219,0 -11.38972,0.50481 -16.91106,1.41977c-8.83413,-5.45823 -19.27735,-8.61328 -30.47777,-8.61328c-31.64513,0 -57.29567,25.17728 -57.29567,56.25451c0,10.38011 2.83955,20.09765 7.88762,28.45853c-1.32512,6.3101 -2.01923,12.84105 -2.01923,19.4982c0,53.60426 44.23377,97.04928 98.81611,97.04928c6.18389,0 12.24159,-0.56791 18.10997,-1.64063c8.04537,4.25931 17.28966,6.6887 27.10187,6.6887c31.64513,0 57.29567,-25.17729 57.29567,-56.25451c-0.03155,-8.99188 -2.14543,-17.47897 -5.96304,-24.98798zM156.77434,152.45192c-4.54327,6.34164 -11.29507,11.38972 -20.06611,14.95493c-8.64483,3.53365 -19.05649,5.33203 -30.85637,5.33203c-14.19772,0 -26.1238,-2.42939 -35.39964,-7.28816c-6.6256,-3.50211 -12.11538,-8.29778 -16.24849,-14.16616c-4.22777,-5.93149 -6.34165,-11.83143 -6.34165,-17.54207c0,-3.53365 1.38822,-6.62561 4.10157,-9.14964c2.71334,-2.52404 6.18389,-3.7545 10.31701,-3.7545c3.40745,0 6.3101,0.97806 8.70793,2.93419c2.27163,1.89303 4.22776,4.70102 5.80529,8.32933c1.73527,3.94381 3.65986,7.25661 5.67909,9.8753c1.92458,2.52404 4.73257,4.63792 8.26622,6.27855c3.59676,1.67217 8.42398,2.52404 14.35547,2.52404c8.17158,0 14.86028,-1.70373 19.90836,-5.07963c4.92187,-3.28125 7.31971,-7.25661 7.31971,-12.11538c0,-3.84916 -1.26202,-6.84646 -3.81761,-9.21274c-2.68179,-2.46094 -6.24699,-4.38552 -10.53786,-5.71064c-4.51172,-1.35666 -10.63251,-2.83954 -18.14153,-4.41707c-10.2539,-2.14543 -18.96184,-4.70102 -25.90294,-7.60366c-7.09886,-2.93419 -12.8095,-7.06731 -16.97416,-12.17848c-4.25931,-5.20584 -6.37319,-11.76834 -6.37319,-19.46665c0,-7.31971 2.24009,-13.94531 6.72025,-19.62439c4.38552,-5.64754 10.85337,-10.06461 19.18269,-13.09345c8.17158,-2.96574 17.95222,-4.48016 28.96335,-4.48016c8.83413,0 16.59555,1.00962 23.0634,2.99729c6.53095,1.98768 12.02074,4.66947 16.34315,7.98228c4.35396,3.34435 7.57212,6.90955 9.59135,10.60096c2.05078,3.7545 3.09194,7.47746 3.09194,11.07421c0,3.47056 -1.35666,6.59406 -4.03846,9.3705c-2.71334,2.74489 -6.15234,4.13311 -10.15925,4.13311c-3.65986,0 -6.53095,-0.85186 -8.51863,-2.58714c-1.86147,-1.60908 -3.78606,-4.10157 -5.89993,-7.69832c-2.46094,-4.60637 -5.45824,-8.23467 -8.86569,-10.79027c-3.3128,-2.46093 -8.89723,-3.72295 -16.5009,-3.72295c-7.09886,0 -12.84105,1.38822 -17.13191,4.13312c-4.13312,2.65024 -6.1208,5.71063 -6.1208,9.30739c0,2.20854 0.63101,4.07002 1.95613,5.64754c1.41977,1.67217 3.40745,3.15505 5.89994,4.38552c2.61868,1.29357 5.26892,2.30318 7.95072,3.02885c2.74489,0.75721 7.35126,1.86148 13.6929,3.3128c7.98227,1.67217 15.33354,3.53365 21.83293,5.58443c6.5625,2.08234 12.27313,4.60637 16.91106,7.57212c4.73258,3.02885 8.48708,6.90956 11.13732,11.54748c2.6818,4.66947 4.00691,10.41165 4.00691,17.10036c0.03155,8.01383 -2.30318,15.30199 -6.90956,21.67518z"></path>
                                </g>
                              </g>
                              <path d="" fill="none"></path>
                              <path d="" fill="none"></path>
                              <path d="M105,210c-57.9899,0 -105,-47.0101 -105,-105v0c0,-57.9899 47.0101,-105 105,-105v0c57.9899,0 105,47.0101 105,105v0c0,57.9899 -47.0101,105 -105,105z" fill="none"></path>
                              <path d="M105,205.8c-55.6703,0 -100.8,-45.1297 -100.8,-100.8v0c0,-55.6703 45.1297,-100.8 100.8,-100.8h0c55.6703,0 100.8,45.1297 100.8,100.8v0c0,55.6703 -45.1297,100.8 -100.8,100.8z" fill="none"></path>
                              <path d="M0,210v-210h210v210z" fill="none"></path>
                              <path d="M4.2,205.8v-201.6h201.6v201.6z" fill="none"></path>
                            </g>
                          </g>
                        </svg>
                      </a>
                    <span>shubhras21</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cf113a3267b2e5785305208/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->

<!--== Javascript Plugins ==-->
<script src="{{asset ('/assets/js/jquery.min.js') }}"></script>
<script src="{{asset ('/assets/js/smoothscroll.js') }}"></script>
<script src="{{asset ('/assets/js/plugins.js') }}"></script>
<script src="{{asset ('/assets/js/master.js') }}"></script>

<!-- Revolution js Files -->
<script type="text/javascript" src="{{asset ('/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/js/revolution.extension.video.min.js') }}"></script>
<!--== Javascript Plugins End ==-->

</body>

<!-- Mirrored from www.incognitothemes.com/torneo/home-design-lab.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 05:38:25 GMT -->
</html>
