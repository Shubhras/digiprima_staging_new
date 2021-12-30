<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="digiprima.com">
<?php
if($title!=null){
?>
<title><?php echo $title;?>| DigiPrima</title>
<meta property="og:title" content="<?php echo $title;?>">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:title" content="<?php echo $meta_title;?>">
<?php
}
else { ?>
<title>Software development companies in USA | DigiPrima</title>
<meta name="DC.title" content="Your Trusted Partners for Software Development  and  Enterprise Solutions" />
<?php } ?>

<?php
if($description!=null){
?>
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>"> 
<meta name="twitter:description" content=" <?php echo $description;?>">
<?php
}
else { ?>

<meta name="description" content="Digiprima is among the best companies provides website, Desktop & Mobile Application Development services end to end solution for Education, Manufacturing & fintech industry.">
<meta property="og:description" content="Your Trusted Partners for SoftwareDevelopment  and  Enterprise Solutions"> 
<?php } ?>

<?php
if($keyword!=null){
?>
<meta name="keywords" content="<?php echo $keyword;?>">
<?php
}
else { ?>
<meta name="keywords" content="Software development companies, software for small manufacturing companies, healthcare software,  fintech development company, mobile apps development, Logistics software, Ecommerce development , Blockchain, IoT solution , IT company India, USA, UK, UEA">
<?php } ?>

<?php
if($imagetag_url!=null){
?>
<meta property="og:image" content="{{asset('/') }}<?php echo $imagetag_url;?>"> 
<meta name="twitter:image" content="{{asset('/') }}<?php echo $imagetag_url;?>">
<?php
}
else { ?>
<meta property="og:image" content="{{asset('/images/DigiImages/digiprima-technologies.png') }}"> 
<meta name="twitter:image" content="{{asset('/images/DigiImages/digiprima-technologies.png') }}">
<?php } ?>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="{{asset ('images/fav.png') }}">
<link rel="stylesheet" href="{{asset ('css/main.css?v=0.1') }}">
<meta name="geo.region" content="US-NY" />
<meta name="geo.placename" content="New York" />
<meta name="geo.position" content="40.736452;-73.996209" />
<meta name="ICBM" content="40.736452, -73.996209" />
<meta name=geography content="Virginia, New Jersey, California, New York, Pennsylvania, Connecticut, Illinois, Florida, Oregon, Texas, Georgia, Arizona, District of Columbia, Kansas, New Mexico, Colorado, Massachusetts, Minnesota, North Carolina, Washington, Nevada, South Carolina, Utah, Arkansas, Iowa, Michigan, Delaware, Hawaii, Indiana, Maryland, Missouri, South Dakota, Wyoming- USA ">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="og:locale" content="en_US" />
<meta name="google-site-verification" content="D4zO1nmRsJ025xgKsUNmdFQkNe3NNAEyi2x6fo6fZO8" />
<meta property="og:url" content="https://digiprima.com/">
   <!-- page  meta tags open -->
     <?php echo $meta_tag;?>
    <!-- page meta tags close -->
    <meta property="og:site_name" content="Digiprima Technologies" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@digiprimatech" />
    <meta name="twitter:creator" content="@digiprimatech" />
    <link rel="canonical" href="{{asset ('/') }}" />
<link rel="stylesheet" href="{{asset ('/assets/css/master.css') }}">
<link rel="stylesheet" href="{{asset ('/assets/css/responsive.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset ('/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('/css/navigation.css') }}">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SGPFJDNJ91"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SGPFJDNJ91');
</script>
<!-- Global site tag (gtag.js) - Google Analytics END -->
</head>
<body>

<!--== Wrapper Start ==-->
<div class="wrapper">

  <!--== Header Start ==-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
    <!--== Start Top Search ==-->
    <div class="fullscreen-search-overlay" id="search-overlay"> 
      <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
      <div id="fullscreen-search-wrapper">
         <script async src="https://cse.google.com/cse.js?cx=004086563400022892773:b4xcbjidi29"></script>
         <div class="gcse-search"></div>
    
           

      </div>
    </div>
    <!--== End Top Search ==-->
    <div class="container">
    @if(Session::has('message'))
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>{{ Session::get('message') }} </strong> 
    </div>
    @endif
      <!--== Start Atribute Navigation ==-->
      
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="{{asset ('/') }}"> 
          <img class="logo logo-display" src="{{asset ('/images/logo-digi.png') }}" alt="DigiPrima Technologies logo"> 
          <img class="logo logo-scrolled" src="{{asset ('/images/logo-digi-w.png') }}" alt="Software copmaiy in USA "> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
       <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown megamenu-fw"> <a href="{{asset('/') }}"  >Home</a>     
          </li>         

          <li class="dropdown megamenu-fw"> <a href="
            " >Industry</a>
            <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-12">
                    <h6 class="title">Industries</h6>
                    <div class="content">
                     <p>Creating a Unified Consumer Experience at various touch points to the consumers with leveraging pre-defined processes to enable faster turn-around time and harness data analytics to refine your consumer outreach initiatives.</p>
                    </div>
                  </div>
                  <div class=" col-md-6">
                    <div class="content">
                      <ul class="menu-col">
                        
                        <li><a href="{{asset('manufacturing-software-development-services')}}">Manufacturing </a></li>
                        <li><a href="{{asset('fintech-application-development-services')}}">Banking, Financial Services</a></li>
                        <li><a href="{{asset('healthcare-software-development-services')}}">Healthcare </a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <!--== end col-3 ==-->
                  <div class=" col-md-6">
                    <div class="content">
                      <ul class="menu-col">
                        
                        <li><a href="{{asset('logistics-software-development-services')}}">Logistics </a></li>
                        <li><a href="{{asset('/business-intelligence-consulting')}}">Business Intelligence </a></li>
                        <li><a href="{{asset('/cloud-service')}}">Cloud Services</a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <!--== end col-3 ==-->
                  
                </div>
                <!--== end row ==-->
              </li>
            </ul>
          </li>

          <li class="dropdown megamenu-fw"> <a href="{{asset('/specialties') }}" >Services</a>
            <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
              <li>
                <div class="row">
                  <div class="col-md-12"> 
                <h6 class="title">Services</h6>
                <div class="content">
                     <p> A commitment to our core values has helped DigiPrima Technologies build long-term, value-centric relationships with customers and become one of the next-generation global technology companies. Our experts keep it in mind to improve the quality and usability of your software, web, and mobile applications alongside performing what is required. </p>
                   </div>
                   </div>
                    
                  <div class=" col-md-4">
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="{{asset('artificial-intelligence')}}">Artificial Intelligence</a></li>
                        <li><a href="{{asset('iot-software-development-services')}}">Internet of Things (IoT) </a></li>
                        <li><a href="#">Open Source</a></li>
                        <!-- <li><a href="#">Mainframe Modernization </a></li>
                        <li><a href="#">Engineering Services</a></li> -->
                        
                      </ul>
                    </div>
                  </div>
                  <!--== end col-3 ==-->
                  <div class=" col-md-4">
                    <div class="content">
                      <ul class="menu-col">
                        <!-- <li><a href="#">Open Source</a></li> -->
                        <li><a href="{{asset('/ecommerce-software-development-services')}}">eCommerce </a></li>
                        <li><a href="{{asset('/blockchain-software-development-services')}}">Blockchain </a></li>
                        <li><a href="{{asset('/education-software-development-services')}}">Education Software</a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <!--== end col-3 ==-->
                  <div class="col-md-4">
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="{{asset('/cloud-service')}}">Cloud Services</a></li>
                        <li><a href="#">Testing</a></li>
                        <!-- <li><a href="#">Service Experience Transformation </a></li> -->
                        <li><a href="{{asset('/data-analytics')}}">Data Analytics</a></li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
                <!--== end row ==-->
              </li>
            </ul>
          </li>

          <li class="dropdown megamenu-fw"> <a href="{{asset('/about-us') }}" >Company</a>
            <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-12">

                    <h6 class="title">About us</h6>
                    <div class="content">
                     <p>DigiPrima is a team of top dedicated software developers, UI/UX designers, QA experts, and product managers with keen eye on detailing. Leader in IT and Business Solutions, we partner with clients to simplify, strengthen, and transform their businesses to the fully managed teams.<br>
                      </p>
                    </div>
                  </div>
                  <div class=" col-md-4">
                    <a href="{{asset('/about-us') }}" >
                    <h6 class="title">Overview</h6></a>
                  
                   
                  </div>
                  <!--== end col-3 ==-->
                  <div class=" col-md-4">
                    <a href="{{asset('/#')}}" >
                    <h6 class="title">Events</h6></a>
                   
                  </div>
                  <!--== end col-3 ==-->
                  <div class=" col-md-4">
                    <a href="{{asset('#')}}" >
                    <h6 class="title">Testimonial </h6></a>
                   
                  </div>
                </div>
                <!--== end row ==-->
              </li>
            </ul>
          </li>

          <li class="dropdown megamenu-fw"> <a href="{{asset('/career') }}" >career</a>
            <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-12">
                    <h6 class="title">Opportunities with DigiPrima</h6>
                    <div class="content">
                     <p> DigiPrima puts employees at the forefront of innovation where they innovate and collaborate with each other and with customers to seed, nurture and harvest ideas. This innovation and collaboration culture has given rise to a number of key enablers and tools to bring about a business impact.<br>

                     <a class="title" href="{{asset('/apply-now')}}">Apply Now</a>
                     
                      </p>
                    </div>
                  </div>
                
                </div>
                <!--== end row ==-->
              </li>
            </ul>
          </li>
          <li class="dropdown megamenu-fw"> <a href="{{asset('/blog-list') }}" >Blog</a></li>

          <li class="dropdown"> <a href="{{asset('/contact')}}" >Contact us</a></li>
           <li class="dropdown attr-nav ">
              <ul>
                <li class="side-menu menu-color-li"><a href="#" class="menu-color" style="color: #fff">  <b>   +1 (347) 973 9732  </b>  </a></li>
              </ul>
          </li>

           <li class="dropdown search">
                      <a href="#" id="search-button"><i class="icofont icofont-search"></i></a></li>



        
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
    <!-- Start Side Menu -->
    <div class="side">
            <a href="{{url('/home')}}" class="logo-side"></a>
            <a href="#" class="close-side"><i class="icofont icofont-close"></i></a>
            <div class="widget  white-color">
              <h4>Get Free Consultation</h4>
            </div>
            <form action="{{url('/home')}}" method="POST" class="contact-form-style-02">
            {{ csrf_field() }}
            <div class="widget white-color">
              <label>Name</label>
                <input type="text" name="name" placeholder="Name">
                <label>Message</label>
                <input type="text" name="message" placeholder="Message">
                <label>Email</label>
                <input type="email" name="email" required placeholder="Email">
                <button type="submit" name="submit" class="btn btn-xl btn-dark btn-animate margin-left-auto margin-right-auto display-table-sm">request an meeting </button> 
                <a class="btn btn-xl btn-dark btn-animate margin-left-auto margin-right-auto display-table-sm" href="tel:+1 (347) 973 9732"><span> +1 (347) 973 9732</span></a>
            </div>
            </form>

               

     </div>
     <!-- End Side Menu -->
  </nav>