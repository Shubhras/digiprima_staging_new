<?php
   $title = $blog->title;
   $description= $blog->description;
   $keyword = $blog->tag;
   $imagetag_url='files/'.$blog->metaImageHash . '/' . $blog->metaImageName;
   
   ?>
@include('header3') 
<style type="text/css">
   section {
   padding-top:56px;
   padding-bottom: 90px;
   margin: 15px;
   }
   .post{
   display: block!important;
   }
   .new-sec h3{
   padding: 0;
   }
   {
   height: auto;
   /* padding: 133px; */
   }
</style>
<style>
   .page {
   line-height: 3.0em;
   height: 5em;
   overflow: hidden;
   /* white-space: nowrap; */
   text-overflow: ellipsis;
   width: 100%;
   }
   .xs-icon a {
   font-size: 24px;
   width: 52px!important;
   height: 54px!important;
   line-height: 54px!important;
   }
   .social-icons-style-05 a.whatsaap, .social-icons-style-06 .icon.whatsaap .icofont, .social-icons-style-12 a.whatsaap {
   color: #06ed00;
   }
   }
</style>
<br><br><br>
<section class="default-bg pt-40 pb-40">
   <div class="container">
      <div class="row white-color">
         <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
            <div class="v-align-middle text-left text-xs-center breadcrumb">
               <!-- Breadcrumb Start -->
               <ul class="text-xs-center white-color">
                  <li>Post on  {{$blog->date}}</li>
                  <li>{{$categoriess->name}}</li>
               </ul>
               <!-- Breadcrumb End -->
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
            <div class="v-align-middle text-right text-xs-center">
               <!-- <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">Blog Slider Post</h1> -->
            </div>
         </div>
      </div>
   </div>
</section>
<section class="white-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-sm-9 col-xs-12 xs-mb-50">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 mb-50">
                  <div class="post">
                     <div class="post-info all-padding-40">
                        <h3 class="font-20px text-uppercase"style="color:black">{{$blog->title}}</h3>
                        <!-- <h6>Post on {{$blog->date}}</h6> -->
                        <hr>
                     
                     </div>
                     @if($blog->bannerImageHash)
                     <div class="">
                        <div class="item"><img src="{{asset('/files') .'/'.$blog->metaImageHash . '/' . $blog->metaImageName }}" width="800px" height="200px"></div>
                     </div>
                     @endif
                     
                  </div>
               </div>
               <!--== Post End ==-->
               <div class="col-md-12 col-sm-12 col-xs-12 mb-50">
                  <div class="blog-standard">
                     <!-- <span class="font-300"> {!! $blog->content !!}</span> -->
                     {!! $blog->content !!}
                     <br>
                  </div>
                 
               </div>
            </div>
         </div>
         
         <div class="col-md-3 col-sm-3 col-xs-12">
          
            <div class="sidebar_widget widget_recent_post mb-50">
               <h5 class="aside-title text-uppercase">Recent Posts</h5>
               @foreach($recent_blogs as $blog)
               <article class="post-item">
                  <div class="post-thumb">
                     <a href="#">
                        @if($blog->metaImageHash)
                        <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="Meta Image" class="img-responsive">
                        @endif 
                        <!-- <img width="100" height="90" src="assets/images/post/post-img-01.jpg" class="img-responsive">-->
                     </a>
                  </div>
                  <div class="post-body">
                     <span class="font-14px">
                        <p style="color: black;" class="page"><a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank"> {{ $blog->title }} </a></p>
                     </span>
                     <div class="post-time">{{ $blog->date }} </div>
                     <!-- <a href="#" class="subtitle">Travel Adventure</a> -->
                  </div>
               </article>
               @endforeach
            </div>
            <div class="social-icons-style-06 mb-50">
               <h5 class="aside-title text-uppercase">Follow Us</h5>
               <ul class="xs-icon">
                  <li><a class="icon facebook" href="https://www.facebook.com/DigiprimaTech"><i class="icofont icofont-social-facebook"></i></a></li>
                  <li><a class="icon twitter" href="https://twitter.com/digiprimatech"><i class="icofont icofont-social-twitter"></i></a></li>
                  <li><a class="icon tumblr" href="#."><i class="icofont icofont-social-tumblr"></i></a></li>
                  <!-- <li><a class="icon flicker" href="#."><i class="icofont icofont-social-flikr"></i></a></li> -->
                  <!-- <li><a class="icon instagram" href="#."><i class="icofont icofont-social-instagram"></i></a></li> -->
                  <li><a class="icon linkedin" href="https://www.linkedin.com/company/digiprima-technologies/"><i class="icofont icofont-social-linkedin"></i></a></li>
               </ul>
            </div>
            <div class="sidebar_widget widget_tag_cloud mb-50">
               <h5 class="aside-title text-uppercase">Tags</h5>
               <div class="post-tags"> @foreach($categories as $category)
                  @if($category->name)
                  <a href="{{ url('blog-list')}}?category={{$category->id}}" style="border: 2px solid #b0b0b0">{{$category->name}}</a>
                  @endif
                  @endforeach
               </div>
            </div>
            <div class="social-icons-style-06 mb-50">
               <h5 class="aside-title text-uppercase">Share </h5>
               <ul class="xs-icon">
                  <?php
                     $UrlData=  $blog->slug;
                     ?>
                  <li><a class="icon linkedin" target="_blank" href='https://www.linkedin.com/shareArticle?mini=true&url=https://digiprima.com/blogs/<?php echo $UrlData;?>'><i class="icofont icofont-social-linkedin"></i></a></li>
                  <li><a class="icon facebook" target="_blank"  href='https://www.facebook.com/sharer/sharer.php?u=https://digiprima.com/blogs/<?php echo $UrlData;?>' ><i class="icofont icofont-social-facebook"></i></a></li>
                  <li><a class="icon twitter" href='https://twitter.com/share?url=http://digiprima.com/blogs/<?php echo $UrlData;?>'><i class="icofont icofont-social-twitter"></i></a></li>
                  <li><a class="icon whatsaap disable" href='whatsapp://send?text=https://www.digiprima.com/blogs/<?php echo $UrlData;?>'><i class="icofont icofont-social-whatsapp"></i></a></li>
                  <!-- <li><a class="icon flicker" href="#."><i class="icofont icofont-social-flikr"></i></a></li> -->
                  <!-- <li><a class="icon instagram" href="https://www.instagram.com/accounts/login/"><i class="icofont icofont-social-instagram"></i></a></li> -->
                  <!-- <li><a class="icon google-plus" href="#."><i class="icofont icofont-social-google-plus"></i></a></li> -->
               </ul>
            </div>
         </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
         @include('contect1-us')
         </div>
    </div>
    <div class="container">
      <div class="row">
         <div class="col-md-12 all-padding-40">
         
         <div class="post-tags"> @foreach($categories as $category)
                     @if($category->name)
                     <a href="{{ url('blog-list')}}?category={{$category->id}}" style="border: 2px solid #b0b0b0">{{$category->name}}</a>
                     @endif
                     @endforeach
                  </div>
                 
                  <h2 class="recent-post-title">Recent Posts</h2>
                  <div class="row blog-style-01">
                     @foreach($recent_blog as $blog)
                     <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="post">
                           <div class="post-img">  @if($blog->metaImageHash)
                              <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="Meta Image" style="height: 100px;">
                              @endif 
                           </div>
                           <div class="post-info all-padding-20">
                              <h3 style="height: 80px;">
                                 <p style="color: black" class="page"><a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank">{{ $blog->title }}</a></p>
                              </h3>
                              <h6>{{ $blog->date }}</h6>
                              <hr>
                              <!-- <p class="mt-10"> <span> <a class="extras-wrap" href="#"><i class="icofont icofont-chat"></i></a> <span class="extras-wrap"><i class="icofont icofont-clock-time"></i></span> </span> </p> -->
                              <a class="readmore" href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank"><span>Read More</span></a> 
                           </div>
                        </div>
                     </div>
                     @endforeach
                     <!--== Post End ==-->
                  </div>
         </div>
      </div>
   </div>
</section>
<script type="application/ld+json">
   {
   "@context": "https://schema.org/",
   "@type": "Article",
   "mainEntityOfPage": {
   "@type": "WebPage",
   "@id": "{{asset('/blogs') .'/'.$blog->slug}}"
   },
   "headline": "{!! $blog->title !!}",
   "description": "{!! $blog->description !!}",
   "image": {
   "@type": "ImageObject",
   "url": "{{asset('/files') .'/'.$blog->metaImageHash . '/' . $blog->metaImageName }}",
   "width": "600px",
   "height": "200px"
   },
   "author": {
   "@type": "Organization",
   "name": "Shubhra Shrivastava"
   },
   "articleBody" : "{!! (strip_tags($blog->content)) !!}",
   "publisher": {
   "@type": "Organization",
   "name": "DigiPrima Technologies",
   "logo": {
   "@type": "ImageObject",
   "url": "https://www.digiprima.com/images/logo-digi-w.png",
   "width": "760px",
   "height": "200px"
   }
   },
   "datePublished": "{{$blog->date}}"
   }
</script>