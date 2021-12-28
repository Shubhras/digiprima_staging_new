<?php
$title = 'Software development companies in USA ';
$description = 'Digiprima is among the best companies provides website, Desktop & Mobile Application Development services end to end solution for Education, Manufacturing & fintech industry.';
$keyword = 'Software development companies, software for small manufacturing companies, healthcare software,  fintech development company, mobile apps development, Logistics software, Ecommerce development , Blockchain, IoT solution , IT company India, USA, UK, UEA ';
$imagetag_url = 'images/page/digiprima-sofrware-development-company.png';
?>
@include('head')
<!-- <div class="home-banner">
  
</div> -->

<div class="transition-none">
      <section class="title-hero-bg banking-banner" style="background: url({{ asset('images1/digi-blog-banner.jpg') }}" alt="case study in development" title="case study in development">

        <div class="layer container">
            <div class="page-title text-center white-color">
                <h1>Blogs</h1>
            </div>
        </div>
      </section>
  </div>
  
<style type="text/css">
  /* .post-tags.new a {
    display: inline-block;
    padding: 5px 11px;
    margin: 0 5px 15px 0;
    border: 2px solid #b0b0b0;
    font-size: 17px;
    color: #888;
    text-transform: uppercase;
    letter-spacing: 0.2px;
  } */

  .post-tags.new a:hover {
    background: #BF0731;
    border: 1px solid #BF0731;
    color: #fff;
    text-decoration: none;
  }

  .blog-style-01 .post {
    -webkit-box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);
    -moz-box-shadow: 0 7px 20px -10px rgba(171, 171, 171, 0.7);
    box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.image-box-shadow{
    -webkit-box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);
    -moz-box-shadow: 0 7px 20px -10px rgba(171, 171, 171, 0.7);
    box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

  .all-paddings {
    /*padding: 20px;*/
    padding: 40px 20px 0px 20px
  }
  /* .blog-style-01 .post1 .post-img {
    border-radius: 10px 10px 0 0;
} */
  

  /* .post.post_flex:hover {
    box-shadow: 0px 0px 30px 2px rgba(0, 0, 0, 0.2);
  } */

  /* .post1.post_flex {
    display: flex;
  } */
  /* .post{ */
    /* display: flex; */
  /* } */

  /* .post-info h3 {
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 3;
    word-break: break-word;
    display: -webkit-box;
    -webkit-box-orient: vertical;
  } */

  

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

  /* @media only screen and (min-width: 767px) {
    .post-info.all-paddings.bordered {
      
      
      
    }

  } */

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


    .post-date {
      font-size: 15px !important;
      padding: 30% 0 !important;
    }

   .content-box-size{
    height: 87px
   }

  /* @media only screen and (max-width: 1200px) and (min-width: 767px) {
    .post-info.all-paddings.bordered {
      max-width: 505px;
    } */

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

<style>
     p {
    line-height: 3.0em;
    height: 5em;
    overflow: hidden;
    /* white-space: nowrap; */
    text-overflow: ellipsis;
    width: 100%;
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
              <a href="{{ url('blog-list')}}?category={{$category->name}}" style="border: 2px solid #b0b0b0">{{$category->name}}</a>
              @endif

              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="white-bg">
    <div class="container-fluid">
      <div class="row blog-style-01">

      @foreach($blogs as $blog)
      <a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank" id="title_data">
      
        <div class="col-md-3 col-sm-6 col-xs-12 mb-30 image-box-shadow">
        
          <div class="post">
          
            <div class="post-img"> @if($blog->metaImageHash)
                  <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="Meta Image" style="height: 100px;">
                  @endif </div>
            
                  
          <div class="post-info all-padding-40">
            

              <!-- <h3 style="height: 72px;"><p style="color:black;"><a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank" id="title_data">{{ $blog->title }}  </a></p></h3> -->

              <h3 style="min-height: 75px;"><p style="color:black;">{{ $blog->title }}  </p></h3>
              <h6>{{ $blog->date }}</h6>
              <hr>
              
              <!-- <a class="readmore" href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank"><span>Read More</span></a> -->
              <span>Read More</span>
               </div>
        

        </div>
        </div>
        </a>
        
        @endforeach
        <br>
        
        <!--== Post End ==-->

 

      </div>

        
    </div>

  </section>


@include('contactfooter')



