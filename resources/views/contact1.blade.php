<?php 

 $title ='Software development companies in USA ';
 $description= 'Digiprima is among the best companies provides website, Desktop & Mobile Application Development services end to end solution for Education, Manufacturing & fintech industry.';
 $keyword = 'Software development companies, software for small manufacturing companies, healthcare software,  fintech development company, mobile apps development, Logistics software, Ecommerce development , Blockchain, IoT solution , IT company India, USA, UK, UEA ';
 $imagetag_url= 'images/page/digiprima-sofrware-development-company.png';
 $meta_tag='';

?>
@include('head') 

  <!--== Contact Hero Start ==-->
  <section class="pt-0 pb-0">
    <div class="parallax-overlay z-index-0"></div>
    <div class="container relative lg-screen">
      <div class="simple-content-slider text-center">
        <div class="simple-content-slider-text">
          <div class="simple-content-text-inner">
            <div class="row">
              <div class="col-md-12 centerize-col social-icons-style-12">
                <div class="white-color text-center">
                  <h1 class="white-color font-700 text-uppercase font-100px line-height-90 line-height-90 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60">Let's Talk</h1>
                  <span class="font-20px font-300">"Your Trusted Partners for Software Development  and  Enterprise Solutions"</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="simple-slider slick lg-screen absolute z-index-minus2 top-0 width-100-percent">
      <div class="slide lg-screen">
        <div class="slide-img" style="background:url(assets/images/slides/home-bg-31.jpg) center center / cover scroll no-repeat;" alt="outsource node js development company" title="outsource node js development company"></div>
      </div>
      <div class="slide lg-screen">
        <div class="slide-img" style="background:url(assets/images/slides/home-bg-32.jpg) center center / cover scroll no-repeat;" alt="outsource node js development company" title="outsource node js development company"></div>
      </div>
    </div>
  </section>
 
  
  <!--== Contact Info Start ==-->
  <section class="">
    <div class="container">
        <div class="row mt-50 service-box-style-03">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="flipper">
              <div class="text-center mb-50 main-box">
                <div class="box-front height-300px white-bg">
                  <div class="content-wrap">
                    <i class="icon-map-pin font-40px default-color"></i>
                    <h4 class="font-600">Our Presence</h4>
                    <!-- <p class="font-400 mt-20">USA | UEA | INDIA </p> -->
                    <p class="font-400 mt-20">USA</p>
                  </div>
                </div>
                <div class="box-back height-300px dark-bg">
                  <div class="content-wrap white-color">
                    <i class="icon-map-pin font-40px white-color"></i>
                    <h4 class="font-600">Our Presence</h4>
                    <!-- <p class="font-400 mt-20 white-color"><a href="https://g.page/DigiprimaTech?share" target="_blank"> USA | UEA | INDIA </a></p> -->
                    <p class="font-400 mt-20 white-color"><a href="https://g.page/DigiprimaTech?share" target="_blank"> USA</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="flipper">
              <div class="text-center mb-50 main-box">
                <div class="box-front height-300px white-bg">
                  <div class="content-wrap">
                    <i class="icon-chat font-40px default-color"></i>
                    <h4 class="font-600">Call Us Now</h4>
                    <p class="font-400 mt-20">+1 (347) 973 9732<br>
                      <!-- +91 97555 70042<br>
                      +971 55 3570329</p> --></p>
                  </div>
                </div>
                <div class="box-back height-300px dark-bg">
                  <div class="content-wrap white-color">
                    <i class="icon-chat font-40px white-color"></i>
                    <h4 class="font-600 white-color">Call Us Now</h4>
                    <p class="white-color font-400 mt-20 "><a href="tel:+1 (347) 973 9732"> +1 (347) 973 9732</a><br>
                      <!-- <a href="tel:+91 97555 70042">+91 97555 70042</a><br>
                      <a href="tel:+971 55 3570329">+971 55 3570329</a> -->
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="flipper">
              <div class="text-center mb-50 main-box">
                <div class="box-front height-300px white-bg">
                  <div class="content-wrap">
                    <i class="icon-envelope font-40px default-color"></i>
                    <h4 class="font-600">Email Us</h4>
                    <p class="font-400 mt-20"><a href="mailto:info@digiprima.com">info@digiprima.com</a><br></p>
                  </div>
                </div>
                <div class="box-back height-300px dark-bg">
                  <div class="content-wrap white-color">
                    <i class="icon-envelope font-40px white-color"></i>
                    <h4 class="font-600">Email Us</h4>
                    <p class="font-400 mt-20 white-color"><a href="mailto:info@digiprima.com">info@digiprima.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

  </section>
  <!--== Contact Info End ==-->

  
  <!--== Contact Form Start ==-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
          <div class="col-sm-8 section-heading">
              <h1 class="roboto-font font-700">Start a Project</h1>
              <hr class="center_line default-bg">
              <h3 class="roboto-font font-300">Tell us your target. We'll grow your business.</h3>
          </div>
        </div>
        <div class="row mt-50">
            <div class="col-md-12">
              <form name="contact-form" id="contactform" action="{{url('/contact')}}" method="POST" class="contact-form-style-01">
                {{ csrf_field() }}

                
                <div class="row">
                  @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif
                @if(Session::has('loginerror'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('loginerror') }}</p>
                @endif
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" name="name" class="md-input-new" placeholder="Name *" required data-error="Your Name is Required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="md-input-new" placeholder="Email *" required data-error="Please Enter Valid Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="number">Number</label>
                      <input type="text" name="number" class="md-input-new" placeholder="Phone Number" >
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Subject</label>
                      <input type="text" name="subject" class="md-input-new" placeholder="Subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                 
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">Message</label>
                      <textarea name="message" class="md-input-new" rows="7" placeholder="Message" required data-error="Please, Leave us a message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
               
                  <div class="col-md-12 col-sm-12">
                    <div class="text-left mt-20">
                      <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin "><span>Send Message <i class="ion-android-arrow-forward"></i></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form End ==-->


  <!--== Social Icons Start ==-->
  <section class="dark-grey-bg mobile-hide">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-10 col-xs-10 centerize-col text-center social-icons-style-03">
              <ul class="xl-icon mb-0">
                <li><a class="fb" href="https://www.facebook.com/DigiprimaTech"><i class="icofont icofont-social-facebook"></i><span></span></a></li>
                <li><a class="tw" href="https://twitter.com/digiprimatech"><i class="icofont icofont-social-twitter"></i><span></span></a></li>
                <li><a class="be" href="#."><i class="icofont icofont-social-behance"></i><span></span></a></li>
                <li><a class="in" href="https://www.linkedin.com/company/digiprima-technologies/"><i class="icofont icofont-social-linkedin"></i><span></span></a></li>
                <li><a class="gplus" href="#."><i class="icofont icofont-social-google-plus"></i><span></span></a></li>
                <!-- <li><a class="be" href="#."><i class="icofont icofont-social-behance"></i><span></span></a></li> -->
                <!-- <li><a class="in" href="https://www.linkedin.com/company/digiprima-technologies/"><i class="icofont icofont-social-linkedin"></i><span></span></a></li> -->
                <!-- <li><a class="gplus" href="#."><i class="icofont icofont-social-google-plus"></i><span></span></a></li> -->
                 <li><a  class="in"  href="https://www.youtube.com/channel/UCyK3Cqt8uTDs3DEzN-h-ueA?sub_confirmation=1~" target="_blank" title="DigiPrima youtube Oficial Account" ><i class="icofont icofont-social-youtube"></i><span></span></a></li>
              </ul>
            </div>
        </div>
    </div>
  </section>
  <!--== Social Icons End ==-->
