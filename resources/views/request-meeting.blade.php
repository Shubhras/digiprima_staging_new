 <!-- <section class="white-bg">
    <div class="container">
      <div class="row">
          <div class="col-sm-12 main-heading">
              <h5 class="text-uppercase mt-0 font-30px">Get your business laser focused today.</h5>
          </div>
        </div>
        <div class="row request">
            <div class="col-lg-10 col-md-10 col-xs-12 centerize-col text-center main-heading">
              <h6 class="mb-30 font-28px roboto-font font-100 mt-0">Request a free meeting with a Professional or Certified Implementer to learn how your business can benefit from Digiprima.</h6>
              <form action="{{url('/request-meeting')}}" method="POST" class="contact-form-style-02">
              {{ csrf_field() }} -->
 <!--   <div class="row" >
                  @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>{{ Session::get('message') }} </strong> 
                </div>
               
                @endif
                @if(Session::has('loginerror'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('loginerror') }}</p>
                @endif
                </div> -->
 <!-- <div class="col-md-12 col-sm-12 " style="padding: 15px" >
                <div class="col-md-4 col-sm-4"><input type="text" name="name" placeholder="Name" class="form1request"></div>
                <div class="col-md-4 col-sm-4"><input type="text" name="email" placeholder="Email" class="form1request"></div>
                <div class="col-md-4 col-sm-4">
                   -->
 <!-- <a class="btn btn-md btn-color btn-animate"><span>Request a Meeting  <i class="tr-icon icofont icofont-arrow-right"></i></span></a> -->
 </div>

 <!-- <button type="submit" name="submit" class="btn btn-md btn-color btn-animate"><span>Request a Meeting <i class="tr-icon icofont icofont-arrow-right"></i></span></button>
              </div>
</form>
            </div>
        </div>
    </div>
  </section> -->


 <section class="white-bg pt-0 dark-block">
   <div class="portfolio-filter-header">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 section-heading para mt-30">
           <!-- 
          <h5 class="text-uppercase text-white mt-50">Portfolio</h5> -->
           <h3 class="mt-0 text-uppercase font-35px white-color">Get your business laser focused today.</h3>

           <p class="font-40px font-300 white-color">Request a free meeting with a Professional or Certified Implementer to learn how your business can benefit from Digiprima.</p>
           <form action="{{url('/request-meeting')}}" method="POST" class="contact-form-style-02">
             {{ csrf_field() }}
             @if(Session::has('message'))
             <div class="alert alert-warning alert-dismissible" role="alert">

               <div class="col-md-12 col-sm-12 centerize-col btn-mobilize text-center mt-20">
                 <strong>{{ Session::get('message') }} </strong>
               </div>
               @endif
               @if(Session::has('loginerror'))
               <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('loginerror') }}</p>
               @endif

               <a class="btn btn-xl btn-dark btn-animate margin-left-auto margin-right-auto display-table-sm" href="https://calendly.com/shubhra-s/30min?month=2022-01" target="blank"><span>Request a Meeting<i class="tr-icon icofont icofont-ui-theme"></i></span></a>
             </div>
         </div>
       </div>

     </div>
   </div>

 </section>