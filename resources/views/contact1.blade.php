 <!-- Recaptcha CSS -->

 <style>
   .g-recaptcha {
     width: 304px;
     height: 91px;
   }

   iframe,
   embed,
   object {
     max-width: 100%;
   }


   .g-recaptcha-response {

     width: 250px;
     height: 40px;
     border: 1px solid rgb(193, 193, 193);
     margin: 10px 25px;
     padding: 0px;
     resize: none;
     /* display: none; */

   }

   .rc-anchor-light.rc-anchor-normal {
     border: 1px solid #d3d3d3;
     margin-left: 1px;
   }

   .rc-anchor-light {
     background: #f9f9f9;
     color: #000;
   }

   /* .rc-anchor-normal {
              height: 74px;
              width: 300px;
            } */

   .rc-anchor {
     border-radius: 3px;
     box-shadow: 0 0 4px 1px rgb(0 0 0 / 8%);
     -webkit-box-shadow: 0 0 4px 1px rgb(0 0 0 / 8%);
     -moz-box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.08);
   }

   .rc-anchor-normal {
     height: 74px;
     width: 300px;
     margin-left: 1px;
   }

   .section-heading {
     text-align: center;
     margin: auto;
     float: none;
     padding-bottom: 0px;
   }
   .ma-tb{
    margin-top: 70px;
    margin-bottom: 45px;
    
   }
   .st-new{
    margin-left: 350px!important;
    background-color: white!important; 
    width:45%!important;
    border-radius: 10px!important;

   }

   /* .btn btn-outline btn-md btn-square btn-animate{
    
    margin-top: -50px;
    float: right;
    top: -10px;
    left: -20px;

  } */

   /* user agent stylesheet div {
              display: block;
            } */
 </style>
 <!-- recptcha -->
 <?php

  $title = 'Software development companies in USA ';
  $description = 'Digiprima is among the best companies provides website, Desktop & Mobile Application Development services end to end solution for Education, Manufacturing & fintech industry.';
  $keyword = 'Software development companies, software for small manufacturing companies, healthcare software,  fintech development company, mobile apps development, Logistics software, Ecommerce development , Blockchain, IoT solution , IT company India, USA, UK, UEA ';
  $imagetag_url = 'images/page/digiprima-sofrware-development-company.png';
  $meta_tag = '';

  ?>
 @include('head')

 <section class="" style="background-color:#2d6c9a;">
   <div class="container">

     <div class="row ">

       <div class="col-md-3">
         <img src="{{asset('images/ch.png')}}" style="padding-top: 70px;">

         <img src="{{asset('images/five_star.png')}}" alt="Five Star" style="margin-top:-60px;">


       </div>
       <div class="col-md-6 mt-70 ma-tb st-new">



         <div class="row">
           <div class="col-sm-8 section-heading">
             <h3 class="roboto-font font-700">Free Consultation</h3>
             <hr class="center_line default-bg">
             <h4 class="roboto-font font-300" style="margin-left: -8px;">Technology-driven Transformation With Real Business Growth.</h4>
           </div>
         </div>
         <style>
           h4 {
             margin-bottom: -30px;
           }
         </style>
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
                     <input type="tel" name="number" class="md-input-new" id="number" placeholder="Phone Number">
                     <div class="help-block with-errors"></div>


                     <link rel="stylesheet" href="/build/css/intlTelInput.css">
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                     <script src="/build/js/intlTelInput.js"></script>

                     <script>
                       // Vanilla Javascript

                       var input = document.querySelector("#number");
                       window.intlTelInput(input, ({

                       }));

                       // const numberInput = window.intlTelInput("#number", {
                       //   preferredCountries: ["in", "co", "us", "de"],
                       //   utilsScript:
                       //     "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                       // });

                       $(document).ready(function() {
                         $('.iti__flag-container').click(function() {
                           var countryCode = $('.iti__selected-flag').attr('title');
                           var countryCode = countryCode.replace(/[^0-9]/g, '')
                           $('#number').val("");
                           $('#number').val("+" + countryCode + " " + $('#number').val());
                         });
                       });
                     </script>


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
                     <textarea name="message" class="md-input-new" rows="4" placeholder="Message" required data-error="Please, Leave us a message"></textarea>
                     <div class="help-block with-errors"></div>
                   </div>
                 </div>
                 <!-- <div class="g-recaptcha" data-sitekey="6LcEdBQeAAAAAMOIebvuIxYGGzeDoaWlZUsNPcMe"></div> -->
                 <!-- <div style="width: 304px; height: 78px;"></div> -->
                 <div id="mail-status"></div>
                 <!-- <div class="rc-anchor-normal" style="height: 74px; width: 300px; margin-left: 2px;"> -->
               </div>
               <!-- <button type="Submit" id="send-message" style="clear: both;">Send
                      Message</button> -->
               <div id="loader-icon" style="display:none;"><img src="captcha/img/loader.gif" /></div>

               <div class="g-recaptcha" data-sitekey="6LcEdBQeAAAAAMOIebvuIxYGGzeDoaWlZUsNPcMe">
                 <!-- <div style="width: 304px; height: 78px;"><div> -->
                 <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcEdBQeAAAAAMOIebvuIxYGGzeDoaWlZUsNPcMe&amp;co=aHR0cDovL2xvY2FsaG9zdDo4MDAw&amp;hl=en&amp;v=TDBxTlSsKAUm3tSIa0fwIqNu&amp;size=normal&amp;cb=6j718avu6mm2" width="304" height="78" role="presentation" name="a-e0nv35jqjamp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
               </div>
               <!-- <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"></textarea> -->
           </div>
           <iframe style="display: none;"></iframe>
         </div>

         <?php
          if ($_POST) {
            require('constant.php');
            if (isset($_POST['g-recaptcha-response'])) {

              require('captcha/component/recaptcha/src/autoload.php');

              $recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);

              $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

              if (!$resp->isSuccess()) {
                $output = json_encode(array('type' => 'error', 'text' => '<b>Captcha</b> Validation Required!'));
                die($output);
              }
            }
          }

          ?>




         <!-- end -->

         <div class="col-md-12 col-sm-12">
           <div class="text-left">
             <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate" style="margin-top: -75px; margin-left: 242px; float: right; left: 6px;"><span>Submit <i class="ion-android-arrow-forward"></i></span></button>
           </div>
         </div>
       </div>
       </form>
     </div>
   </div>
   </div>
   </div>

 </section>


 <!--== Contact Hero Start ==-->

 <!-- <section class="pt-0 pb-0">
    <div class="parallax-overlay z-index-0"></div>
    <div class="container relative lg-screen">
      <div class="simple-content-slider text-center">
        <div class="simple-content-slider-text">
          <div class="simple-content-text-inner">
            <div class="row">
              <div class="col-md-12 centerize-col social-icons-style-12">
                <div class="white-color text-center">
                  <img src="images/clutch-logo.webp" style="float: left;margin-top: -215px;padding: 170px;padding-top: 120px;">">

                
                  <h1 class="white-color font-700 text-uppercase font-100px line-height-90 line-height-90 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60">Let's Talk</h1>
                  <span class="font-20px font-300">"Your Trusted Partners for Software Development  and  Enterprise Solutions"</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     -->
 <!-- <div class="simple-slider slick lg-screen absolute z-index-minus2 top-0 width-100-percent">
      <div class="slide lg-screen">
        <div class="slide-img" style="background:url(assets/images/slides/home-bg-31.jpg) center center / cover scroll no-repeat;" alt="outsource node js development company" title="outsource node js development company"></div> -->
 <!-- </div>
      <div class="slide lg-screen">
        <div class="slide-img" style="background-color:#223168 center center / cover scroll no-repeat;" alt="outsource node js development company" title="outsource node js development company"></div>
      </div>
    </div>
    
  </section> -->





 <!-- <div class="comm-banner">
        <img src="images/clutch-image.jpg" alt="Discovery workshop">
        <div class="comm-banner-caption">
            <div class="container">
            <div class="col-md-5" style="float: right;"> -->

 <!-- <h1>Discovery workshop: Accelerate your analytics success.</h1> -->
 <!-- <h2>Entail into a series of interactive sessions with our experts from varied fields like - techno
                    functional consultant, solutions architects, business analysts and analytics industry leaders.</h2> -->
 <!-- <a href="javascript:void(0)" class="btn-orange com-btn">BOOK A FREE SESSION</a> -->
 <!-- <ul class="breadcrumb">
                    <li><a href="https://www.polestarllp.com/">Home</a></li>
                    <li>Discovery workshop</li>
                </ul> -->
 <!-- <section class="white-bg">
    <div class="container">
      <div class="row">
          <div class="col-sm-8 section-heading">
              <h1 class="roboto-font font-700">Start a Project</h1>
              <hr class="center_line default-bg">
              <h3 class="roboto-font font-300" style="margin-left: -173px;">Tell us your target. We'll grow your business.</h3>
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
  </div>
            </div>
        </div>
    </div>
<style>
    .comm-banner {
    clear: both;
    position: relative;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.comm-banner img {
    width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
    border-style: none;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    
}
.comm-banner-caption {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    display: flex;
    align-items: center;
}
.comm-banner-caption h1 {
    color: #fff;
    font-size: 45px;
    font-weight: 700;
    margin: 0;
    text-transform: inherit;
    width: 40%;
} -->
 <!-- .comm-banner-caption h2 {
    margin: 40px 0;
    font-weight: 500;
    font-size: 22px;
    line-height: 1.3;
    color: #fff;
    text-transform: inherit;
    width: 60%;
} 
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem; 
    font-weight: 500; 
    line-height: 1.2;
}
</style> -->

 <!-- Contact form start -->
 <!-- <style>
  .comm-banner-caption h1 {
    color: #201e1e;
    font-size: 45px;
    font-weight: 700;
    margin: 0;
    text-transform: inherit;
    width: 40%;
}
hr {
    border: 0;
    height: 1px;
    width: 100%;
    margin: 20px;
}
section {
    padding-top: 10px;
    padding-bottom: 23px;
    position: relative;
    z-index: 10;
    overflow: hidden;
}
</style> -->
 <!-- <section class="white-bg">
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
  </section> -->

 <!-- Contact form end -->
 <!-- contact form css start-->
 <!-- <style>
.section-heading {
    text-align: center;
    margin: auto;
    float: right;
    padding-bottom: 20px;
}
</style> -->
 <!-- contact form css end -->
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
                      +971 55 3570329</p> -->
                 </p>
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
 <!-- <section class="white-bg">
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
  </section> -->
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
           <li><a class="in" href="https://www.youtube.com/channel/UCyK3Cqt8uTDs3DEzN-h-ueA?sub_confirmation=1~" target="_blank" title="DigiPrima youtube Oficial Account"><i class="icofont icofont-social-youtube"></i><span></span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
 <!--== Social Icons End ==-->