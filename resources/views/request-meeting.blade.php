<style>
  @media only screen and (max-device-width: 425px) {
    input.form1request {
      margin-top: 15px;
    }

    button.btn.btn-md.btn-color.btn-animate {
      margin-top: 15px;
    }
  }
</style>

<section class="red-bg ch-new">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 main-heading">
        <h5 class="text-uppercase mt-0 font-30px">Get your business laser focused today.</h5>
      </div>
    </div>
    <div class="row request">
      <div class="col-lg-10 col-md-10 col-xs-12 centerize-col text-center main-heading">
        <h6 class="mb-30 font-28px roboto-font font-100 mt-0">Request a free meeting with a Professional or Certified Implementer to learn how your business can benefit from Digiprima.</h6>
        <form action="{{url('https://calendly.com/shubhra-s/30min?month=2022-02')}}" method="POST" class="contact-form-style-02">
          {{ csrf_field() }}
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
          <div class="col-md-12 col-sm-12 " style="padding: 15px">
            <div class="col-md-4 col-sm-4"><input type="text" name="name" placeholder="Name" class="form1request"></div>
            <div class="col-md-4 col-sm-4"><input type="text" name="email" placeholder="Email" class="form1request"></div>
            <div class="col-md-4 col-sm-4">
              <!-- <a class="btn btn-md btn-color btn-animate"><span>Request a Meeting  <i class="tr-icon icofont icofont-arrow-right"></i></span></a> -->
            </div>
            <button type="submit" name="submit" class="btn btn-md btn-color btn-animate"><span>Request a Meeting <i class="tr-icon icofont icofont-arrow-right"></i></span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>