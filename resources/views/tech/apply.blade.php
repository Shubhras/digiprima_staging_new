

<!-- Apply now start -->
<style type="text/css">
 
  .mde{
    background: #ff9b00;
    padding: 4%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
    min-height: 735px
  }
  
  .mdt{
    background: #fff;
    padding: 3%;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }
  @media only screen and (min-device-width: 320px) and (max-device-width: 425px) {
            .mde  {
              min-height: 268px;
            }
            .hidea h1 {
                font-size: 26px!important;
                margin-left: 43px!important;
            }
            .hidea {
                font-size: 26px!important;
                margin-left: -22px!important;
            }
        }
</style>
<section class=""  style="margin-top: 65px;"  >
<div class="container ">
  <div class="row team-member-container gallery-image-hover">
    <div class="col-md-3 col-sm-3 mde">
      
        <img src="{{ asset('images/contact-image.png') }}" alt="image"/>
        <h2>Apply Now</h2>
        <h4>If you are experienced in the pursuit of excellence in IT, and looking for challenging opportunities!!</h4>
      
    </div>
    <div class="col-md-9 col-sm-9 mdt">
       <!-- <form name="contact-form" id="contact-form" action="{{url('/apply-now')}}" method="POST"> -->
    <form action="#" method="POST" enctype="multipart/form-data"class="">
                {{ csrf_field() }}
                <div class="row">
                  @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif
                @if(Session::has('loginerror'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('loginerror') }}</p>
                @endif
                </div>
        <div class="form-group">
          <label class="control-label col-sm-2 col-md-2" for="name">First Name:</label>
          <div class="col-sm-10 col-md-10">          
          <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="first_name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2 col-md-2" for="name">Last Name:</label>
          <div class="col-sm-10 col-md-10">          
          <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="last_name">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2 col-md-2" for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <div class="col-sm-10 col-md-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2 col-md-2" for="phone">Mobile No:</label>
          <div class="col-sm-10 col-md-10">
          <input type="number" class="form-control" id="phone" placeholder="Enter Mobile No." name="phone">
          </div>
        </div>
       
         <div class="form-group">
          <label class="control-label col-sm-2 col-md-2" for="subject">CurrentCity:</label>
          <div class="col-sm-10 col-md-10">          
          <input type="text" class="form-control" id="subject-2" placeholder="Enter Current City" name="city">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2 col-md-2" for="subject">Comment:</label>
          <div class="col-sm-10 col-md-10">
          <textarea class="form-control" rows="5" id="subject" name="apply_for"></textarea>
          </div>
        </div>
         <div class="form-group">
          <label class="form-control-file col-sm-2 col-md-2" for="file">Upload CV:</label>
          <div class="col-sm-10 col-md-10"> 
                  
          <input type="file" class="form-control-file form-control" id="resume" placeholder="Enter Last Name" name="resume">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10 col-md-10">
          <button type="submit" name="submit" class="btn btn-color btn-md btn-square btn-animate remove-margin"><span>Submit <i class="ion-android-arrow-forward"></i></span></button>
                      <button type="submit" name="submit" class="btn btn-color btn-md btn-square btn-animate remove-margin"><span>Reset <i class="ion-android-arrow-forward"></i></span></button>
                       
          <!-- <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button> -->
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>


  
</section>



<!-- Apply now end -->