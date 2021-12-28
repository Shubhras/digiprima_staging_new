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
                      <input type="text" name="name" class="md-input" placeholder="Name *" required data-error="Your Name is Required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="md-input" placeholder="Email *" required data-error="Please Enter Valid Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="number">Number</label>
                      <input type="text" name="number" class="md-input" placeholder="Phone Number" >
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Subject</label>
                      <input type="text" name="subject" class="md-input" placeholder="Subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                 
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">Message</label>
                      <textarea name="message" class="md-textarea" rows="7" placeholder="Message" required data-error="Please, Leave us a message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
               
                  <div class="col-md-12 col-sm-12">
                    <div class="text-left mt-20">
                      <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin"><span>Send Message <i class="ion-android-arrow-forward"></i></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form End ==-->