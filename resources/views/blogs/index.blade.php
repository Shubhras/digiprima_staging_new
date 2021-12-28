<?php
$title = 'Software development companies in USA ';
$description = 'Digiprima is among the best companies provides website, Desktop & Mobile Application Development services end to end solution for Education, Manufacturing & fintech industry.';
$keyword = 'Software development companies, software for small manufacturing companies, healthcare software,  fintech development company, mobile apps development, Logistics software, Ecommerce development , Blockchain, IoT solution , IT company India, USA, UK, UEA ';
$imagetag_url = 'images/page/digiprima-sofrware-development-company.png';
?>
@include('header2')
<!-- <div class="home-banner">
  
</div> -->

<div class="transition-none">
      <section class="title-hero-bg banking-banner" style="background: url({{ asset('images/digi-blog-banner.jpg') }}" alt="case study in development" title="case study in development">

        <div class="layer container">
            <div class="page-title text-center white-color">
                <h1>Blog news</h1>
                <!-- <h4 class="mt-30"style="margin-top: -5px">Proven Development Partner for Top-Tier InsurTech Company</h4> -->
            </div>
        </div>
      </section>
  </div>
<style type="text/css">
  .post-tags.new a {
    display: inline-block;
    padding: 5px 11px;
    margin: 0 5px 15px 0;
    border: 2px solid #b0b0b0;
    font-size: 17px;
    color: #888;
    text-transform: uppercase;
    letter-spacing: 0.2px;
  }

  .post-tags.new a:hover {
    background: #BF0731;
    border: 1px solid #BF0731;
    color: #fff;
    text-decoration: none;
  }

  .post-info h3 {
    font-size: 31px !important;
    font-weight: 800;

  }

  .all-paddings {
    /*padding: 20px;*/
    padding: 40px 20px 0px 20px
  }

  .all-padding-40 {}

  .post.post_flex:hover {
    box-shadow: 0px 0px 30px 2px rgba(0, 0, 0, 0.2);
  }

  .post.post_flex {
    display: flex;
  }

  .post-info h3 {
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 3;
    word-break: break-word;
    display: -webkit-box;
    -webkit-box-orient: vertical;
  }

  .post-date {
    color: #b0b0b0 !important;
    font-size: 24px !important;
    font-weight: 800 !important;
    padding: 50% 0;
    text-align: center;
    margin: 0;
  }

  .mobile-view {
    display: none;
  }

  .desk-view {
    display: block;
  }

  @media only screen and (min-width: 767px) {
    .post-info.all-paddings.bordered {
      
      
      
    }

  }

  @media screen and (min-device-width: 320px) and (max-device-width: 428px) { 
   .blogs_two{
     height: 150px;
   }
}

@media only screen and (max-device-width: 768px) {
    .image_view_height {
      height: 100px;
    
    }
    .font-size-text{
      font-size: 6.2em;
    }
  }

  @media only screen and (max-width: 767px) {
    .mobile-view {

      display: block;
    }

    .desk-view {
      display: none;
    }

    .all-paddings {
      /* padding: 20px; */
      /* padding: 30px 20px 31px 20px;*/
      padding: 28px 20px 29px 20px
    }

    .post-info.bordered {

      /* max-width: 322px; */
      /* width: 322px; */
      /* flex: 0 0 28%; */
      /* width: 67%;*/
      /* padding: 0;*/
      margin: 0;
      /*padding-left: 24px;*/
    }

    .post-info h3 {
      font-size: 16px !important;
      font-weight: 800;
    }

    .post-info h3 {

      -webkit-line-clamp: 4;

    }

    .post-date {
      font-size: 15px !important;
      padding: 30% 0 !important;
    }

    .post .post-img,
    .service-style-01 .service-box .service-img {
      /* padding: 133px; */
      width: 100%;
    }
  }

  @media only screen and (max-width: 1200px) and (min-width: 767px) {
    .post-info.all-paddings.bordered {
      max-width: 505px;
    }


    .post .post-img,
    .service-style-01 .service-box .service-img {

      height: auto !important;

    }

    .post-date {
      font-size: 20px !important;
      padding: 43% 0;
    }
    .padding_data_text{
    padding: 20px;
  }
  }
  .padding_data_text{
    padding: 20px;
  }
</style>
<!--== Blog Standard Posts Start ==-->

<section class="white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="widget sidebar_widget">


          <div class="sidebar_widget widget_tag_cloud mb-50">
            <h1>Blog</h1>
            <div class=" post-tags new post-tags-border">
              @foreach($categories as $category)
              @if($category->name)
              <a href="{{ url('blog-list')}}?category={{$category->id}}" style="border: 2px solid #b0b0b0">{{$category->name}}</a>
              @endif

              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
<!-- Destop view--->
    @foreach($blogs as $blog)
      <div class="row desk-view">
        <div class="col-md-12 col-sm-12 col-xs-12 mb-50">
          <div class="post post_flex">

            <div class="col-md-3 col-sm-6 col-xs-6 post-info bordered " style="min-width: 165px; max-height:240px;">

              <h6 class="post-date">{{ $blog->date }}</h6>
            </div>

            <div class="col-md-5 col-sm-6 col-xs-6 post-info bordered font-20px text-uppercase padding_data_text" style="max-height:240px; width: 100%;">
            <b><span><a href=" {{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank">{{ $blog->title }} </a></span></b>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 post-img" style="max-height:240px; width: 100%;">
            
              @if($blog->metaImageHash)
              <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="{{ $blog->title }}" title="{{ $blog->title }}">
              @endif
            </div>
          </div>


        </div>


      </div>
      @endforeach
<!-- mobile view--->
      @foreach($blogs as $blog)
      <div class="row mobile-view" style="padding: 0 23px;">
        <div class="col-md-12 col-sm-12 col-xs-12 mb-50">
          <div class="post post_flex">
             <div class="row">

              <div class="col-md-3 col-sm-6 col-xs-6 " style="padding: 0; margin: 0; ">
                <div class="post-info bordered blogs_two">

                  <h6 class="post-date">{{ $blog->date }}</h6>
                </div>
              </div>

              <div class="col-md-5 col-sm-6 col-xs-6" style="padding: 0; float: left; margin-left: 0px;">
                <div class="post-info all-paddings bordered blogs_two">
                  <h3 class="text-uppercase font-size-text">
                    <a href=" {{ url('blogs', ['slug' => $blog->slug]) }}">
                      {{ $blog->title }} </a></h3>
                </div>
              </div>


              <div class="col-md-4 col-sm-12 col-xs-12 image-view-height" style="padding: 0; float: left; margin-left: 0px;"> 
                <div class="post-img blogs_two image_view_height" >
                  @if($blog->metaImageHash)
                  <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="Meta Image">
                  @endif
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- </div>

      </div> -->
      @endforeach

  </div>
</section>
@include('contactfooter')