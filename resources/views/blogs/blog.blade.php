  

<?php
$title = $blog->title;
$description= $blog->description;
$keyword = $blog->tag;
$imagetag_url='files/'.$blog->metaImageHash . '/' . $blog->metaImageName;

?>

@include('header2') 
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
 <section class="white-bg" style="padding-bottom:30px;">
   <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
   @if($blog->bannerImageHash)
   <img src="{{asset('/files') .'/'.$blog->metaImageHash . '/' . $blog->metaImageName }}" width="800px" height="200px">
</div>
</div>
</div>

@endif

</section>`

   <section class="blogdetailsec" style="padding-bottom:30px;">
      <div class="container">
         <div class="row">
            <div class="col-sm-8 section-heading">
               <h1 class="text-uppercase mt-0 font-30px" title="{{$blog->title}}" style="color: #000;">{{$blog->title}}</h1>
               <h5 class="roboto-font font-100">{{$blog->date}}
               </h5>
            </div>
         </div>
      </div>
   </section>



   <div class="container mt-pag-sec">
      <div class="row">
         <div class="new-sec">
         	{!! $blog->content !!}
         
         
         </div>
      </div>
   </div>
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
   @include('contactfooter')
