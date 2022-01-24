<style>
#modal-popup{
  display: none;
}
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(window).on('load', function()
{
// setTimeout(function(){ $('#clickNow').trigger('click'); }, 10000);
setTimeout(function(){ 
  document.getElementById('modal-popup').style.display="block";
},10000);


});
</script>
<style>
@media only screen and (max-device-width: 768px){
img.img-fluid.z-depth-1-half.rounded-circle {
    max-width: 81px;
}}
 @media only screen and (max-device-width: 768px){
  .btn-pad{
      padding: 10px;
    }
    /* img.img-fluid.z-depth-1-half.rounded-circle { */
    /* max-width: 125px; */
/* } */
.all-padding-60 {
    padding: 30px;
}
    

 }
  
 .mt-10px{
      margin-top:20px;
    }
    
    .rounded-circle {
    border-radius: 50%;
}
.btn-inf {
    color: #fff;
    background-color: green;}
.size-font{
  color: #0d0d0d;
   
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    line-height: 30px;
}
.size-font1{
  
    font-size: 18px;
    
}
@media only screen and (min-device-width: 320px) and (max-device-width: 426px) {
            .mob {
              font-size: 8px;
            }}

            @media only screen and (min-device-width: 427px) and (max-device-width: 768px) {
            .mob {
              font-size: 12px;
            }
            .hid  {
                display: none;
                clear: both;
            }}
            @media only screen and (min-device-width: 769px) and (max-device-width: 1024px) {
            .mob {
              font-size: 11px;
            }
            .fob{
              font-size: 11px;
            }
            }  
            .right-bottom {
              width: 500px;
              position: fixed;
              right: 0;
              background: #2b2988;
              z-index: 9999;
              padding: 20px;
              bottom: 0;
              box-shadow: 0 0 5px rgb(0 0 0 / 25%);
              border-radius: 5px 0 0 0;
    /* display: none; */
}          
/* .size-text{
  font-size: 19px;
  
} */
.right-bottom h6 {
    color: #fff;
    margin-bottom: 15px;
    font-weight: 600;
    font-size: 20px;
    margin-top: 0;
}
.right-bottom .btn-orange {
    width: 100%;
    padding: 8px 25px;
    font-size: 11px;
}
.btn-orange {
    background: #feb60c;
    background: linear-gradient(
-90deg
,#feb60c 0,#fb820e 30%,#f73011 100%);
    color: #fff;
    padding: 10px 25px;
    font-size: 13px;
    transition: all .9s ease-in-out;
    border-radius: 7px;
    text-transform: uppercase;
    display: inline-block;
    font-weight: 600;
    border: none;
    text-align: center;
}
.btn-orange:hover {
    color: #fff;
    background: #feb60c;
    background: linear-gradient(
90deg
,#feb60c 0,#fb820e 30%,#f73011 100%);
    transition: all .9s ease-in-out;
}
.right-bottom .close {
    color: #fff;
    top: -5px;
    opacity: 1;
    padding: 0 10px 0 0;
    text-shadow: none;
}
</style>

 <!--== Modal Popup Style 01 Start ==-->
 <!-- <section class="right-bottom " style="display:none" >
    <div class="container">
    	<div class="row">
        	
        </div>
        <div class="row mt-50">
          
            <div class="tr-modal-popup">
              <a href="#modal-popup" data-effect="mfp-zoom-in" style="display:none" class="btn btn-lg btn-dark-outline btn-circle" id="clickNow">Inquriy Submmet</a>
            </div>
          
        </div>
    </div>
  </section> -->

  <!-- Modal Popup Message Box -->
<!-- <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-sm-6 col-xs-11 ">
  <span class="text-uppercase font-22px font-600 mb-20 display-block dark-color text-center">Empowering Businesses for Assured Success with 10+ Years of Proven Expertise</span>
  <div class="row ">
    <div class="col-sm-4 size-text ">
       <img src="{{asset('images/logo-photo.jpg')}}" alt="Michal Szymanski - founder of Material Design for Bootstrap" class="img-fluid z-depth-1-half rounded-circle "> -->
    <!-- <h3 style="font-size: 19px;" class="text-center "><a href="tel:+1 (347) 973 9732">+1 (347) 973 9732</a></h3>
    <h3 style="font-size: 15px;" class="text-center "><a href="mailto:info@digiprima.com">info@digiprima.com</a></h3>
    </div>
    <div class="col-sm-8 size-font">
    <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-checkmark-circled"></span> IT Strategy And Consulting</span></br> -->

    <!-- <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-android-done-all size-font"></span> Software for all businesses</span></br> -->

    <!-- <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-checkmark-circled"></span> Dedicated Software Development Team</span></br> -->

    <!-- <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-android-done-all size-font"></span> Application Development</span></br> -->

    <!-- <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-checkmark-circled"></span> Complete Projects faster in less investment</span></br>

    <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-checkmark-circled"></span> Accelerate Growth and Innovation</span></br>

    <span class="icon-box mb-20">
    <span aria-hidden="true" class="ion-checkmark-circled"></span> 100% Satisfaction Guaranteed</span>
    </div>
  
 
  <div class="col-xl-12 text-center ">
  <div class=" mt-10px  row">
  <div class="col-md-1 col-xs-6 mt-10px">
  <a href="https://api.whatsapp.com/send/?phone=919755570042&text=I%27m+interested+in+online+exam+software.%0Aplease+contact+me&app_absent=0" class="btn btn-color btn-pad  fixed-margin-bottom" target="_blank" > <span class="icon-box "><span aria-hidden="true" class="ion-social-whatsapp-outline fob font-18px"></span></span></a>
  </div>
 
  <div class="col-md-1 col-xs-6 mt-10px ">
  <a class="btn-pad btn btn-color  fixed-margin-bottom" href="skype:shubhras21?chat" target="_blank"> <span class="icon-box "><span aria-hidden="true" class="ion-social-skype-outline fob font-18px"></span></span>
 </a> -->
 <!--&nbsp;&nbsp;&nbsp;&nbsp;Connect with Skype&nbsp;&nbsp;&nbsp;&nbsp; Connect with Whatsapp -->
  <!-- </div>
  <div class="col-md-10 col-xs-12 mt-10px text-center">
  <a class="btn-pad btn btn-color"   href="https://calendly.com/shubhra-s/30min" target="_blank"><span class="font-18px mob">Schedule a Call for Free Consultation</span></a>
  </div>
  </div>
   </div></div>
</div> --> 

<div class="right-bottom" id="modal-popup">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/clutch-logo.webp')}}" alt="Digiprima">
            </div>
            <div class="col-md-8">
                <div class="">
                    <a href="javascript:void(0)" class="close" data-dismiss="right-bottom" onclick="hide()" aria-label="close">×</a>
                </div>
                <h6>Accelerate Your Analytics Success With Our Free Discovery Workshop</h6>
                <a href="{{asset('https://calendly.com/shubhra-s/30min?month=2022-01')}}" target="__blank" class="btn-orange">BOOK A SESSION</a>
            </div>
        </div>
    </div>
  <script>
    function hide(){
      document.getElementById('modal-popup').style.display="none";
    }
    </script>
  <!--== Modal Popup Style 01 End ==-->

