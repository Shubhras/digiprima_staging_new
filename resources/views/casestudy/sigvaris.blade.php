<?php 

 $title ='BetHite :Peer to Peer Sports Betting Platform';
 $description= 'Global online gambling market is now worth around $87 billion! About 85 nations have legalized online gambling and as per a research group Technavio, the industry is expected to grow at a rate of 11% compound annual growth rate';

?>
@include('head')

<?php 

 $title ='';

 $description= '';

 $keyword = '';

?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
 
  ul.nav-pills {
    top: 10px;
        padding-top: 279px;
    border-right: 0;
    height: 100%;
    border-left: 1px solid rgba(128,128,128,.3);
    padding-right: 0;
    z-index: -1;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #337ab7;
    background-color: transparent;
    width: 250px !important;
    left: 10px;
    top: -12px;
}
  .nav>li>a {
    color: black;
  }
.heading{
  font-size: 33px;
  font-weight: 700;
}
 div.col-sm-9 div {
    height: auto;
  }
 .active{
    border-radius: 50%;
    width: 16px;
    height: 16px;
    right: 9px;
    background-color: #337ab7;
   }

  #section1 {margin-right: -54px; padding: 50px 25px; background-color: #F7F7F7;}
  #section2 {margin-right: -54px; padding: 50px 25px; background-color: white;}
  #section3 { margin-right: -54px; padding: 50px 25px; background-color: #F7F7F7;}
  #section4{margin-right: -54px; padding: 50px 25px; background-color: #white;}
  #section5{margin-right: -54px; padding: 50px 25px; background-color: #F7F7F7;}
    #section6{margin-right: -54px; padding: 50px 25px; background-color: white;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
      margin-left: 150px;
    }
  }
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="0">
<div class="transition-none">
    <section class="title-hero-bg " style="background-image: url(images/financial-services-keywords2.png);" alt="sigvaris-case-study" title="sigvaris-case-study">
          <div class="container">
            <div class="page-title text-center white-color">
                <h1 style="padding-top: 150px;"></h1>
            </div>
          </div>
        </section>
  </div>
<div class="container">
    <nav class="col-sm-3" id="myScrollspy" >
      <ul class="nav nav-pills nav-stacked affix "  data-offset-top="205">
        <li ><a href="#section1">About Sigvaris</a></li>
        <li><a href="#section2">Therapeutic compression</a></li>
        <li><a href="#section3">Goals</a></li>
            <li><a href="#section4">Plan</a></li>
            <li><a href="#section5">Project Management Methodology</a></li>         
               <li><a href="#section6">                Are you a health care professional?
</a></li>                       
          </ul>
        </li>
      </ul>
    </nav>

    <div class="content col-sm-9">
      <div id="section1">  
       
        <h2 class="heading">About Sigvaris</h2>

              <p >The Swiss company SIGVARIS, 100% family-owned since it was founded, is the global market leader in the manufacture of medical compression garments and celebrated its 150th anniversary in 2014. SIGVARIS produced “rubber-elastic textiles”, which it sold both in Switzerland and abroad.The product portfolio was expanded in 2009 when the WELL BEING and SPORTS lines were added to the main MEDICAL line. WELL BEING stockings have a preventive function and relieve the early symptoms of leg conditions. SPORTS products improve athlete performance and recovery time.Customers around the world include pharmacies, chemists, orthopedic and medical specialist stores as well as doctors and hospitals. The Group produced over 8 million pairs of stockings in 2016 and generated revenue of around CHF 250 million.
.</p>
      </div>
      <div id="section2"> 
        <img  src="{{asset('images/sigvaris11.png')}}" alt="sigvaris-case-study" title="sigvaris-case-study" >  
        <img  src="{{asset('images/sigvaris22.png')}}" alt="sigvaris-case-study" title="sigvaris-case-study" >
          <img  src="{{asset('images/sigvaris3.png')}}" alt="sigvaris-case-study" title="sigvaris-case-study" >
         </div>        
      <div id="section3">         
            <h2 class="heading">Goals</h2>

              <ul class="ulistreact">
                <li>Web Based Financial reporting solution https://www.sigvaris.com in ASP.NET MVC - AngularJS & SQL Server. </li>
                <li> This is done for a Swiss based manufacturing company and is used for monthly sales-cost data reporting along with using it as a business intelligence solution for decision-making..</li>
              </ul>
      </div>
      <div id="section4">         
      <h2 class="heading">Plan</h2>

              <ul class="ulistreact">
                <li> Review, assign task, Setup project</li>
                <li> Complete task, push, commit, Database updates</li>
                <li> Link branch to subdomain, testing, Submit and review</li>
                <li> Pull requests, Conflicts, Merge with dev and test</li>
                <li> Merge with master and confirm updates</li>
              </ul>
                                 <img  src="{{asset('images/plan2.png')}}" alt="sigvaris-case-study" title="sigvaris-case-study" >

      </div>      
      <div id="section5">         
        <h2 class="heading">Project Management Methodology</h2>

              <h4><b>Agile:</b></h4> 
              <ul class="ulistreact">
                <li>The project breaks a requirement into smaller pieces, which are then prioritized by the team in terms of importance.</li>
                <li> The agile project promotes collaborative working, especially with the customer.</li>
                <li> The agile project reflects, learns and adjusts at regular intervals to ensure that the customer is always satisfied and is provided with outcomes that result in benefits.</li>
                <li> Agile methods integrate planning with execution, allowing an organisation to create a working mindset that helps a team respond effectively to changing requirements.                                                
</li>
              </ul>
              <h4><b>Version Control:</b></h4>
                    <ul class="ulistreact">
                      <li>Master branch contains the latest STABLE build. Direct push to this branch is forbidden and should not be allowed by Git permissions.</li>
                      <li> Dev branch is the primary development branch for testing before changes and updates are pushed to the master branch. All developers work will be tested on the dev branch and dev subdomain before updates are merged with the master branch.</li>
                      <li> Direct FTP to the server is not allowed. All work will be performed through git.</li>
                      <li> Developers can work on different tasks at the same time.</li>
                    </ul>

      </div>      
       <div id="section6">         

                
 <img  src="{{asset('images/sigvaris4.png')}}" alt="sigvaris-case-study" title="sigvaris-case-study" >

            </div>
            </div>
          </div>         <img  src="{{asset('images/contact1.png')}}" alt="sigvaris-case-study" title="sigvaris-case-study" >
        </div></body>
