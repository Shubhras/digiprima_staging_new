<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- jquery.validate + select2 -->
<script src="{{ asset('la-assets/plugins/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/bootstrap-datetimepicker/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset('la-assets/js/app.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('la-assets/plugins/stickytabs/jquery.stickytabs.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- <script src="{{url('/sample/js/ckeditor.js')}}"></script> -->
<script src="{{url('/ckeditor/ckeditor.js')}}"></script>
  <script src="{{url('/ckeditor/samples/js/sample.js')}}"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>$(document).ready(function() {
$('textarea').summernote({
//tabsize: 2,
height: 250,
toolbar: [
['style', ['style',]],
['undo', ['undo',]],
['redo', ['redo',]],
['style', ['bold', 'italic', 'underline',]],
['font', ['strikethrough',]],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
['table', ['table']],
['video', ['video']],
['picture', ['picture']],
['link', ['link']],
['fullscreen', ['fullscreen']],
['codeview', ['codeview']],
]
});

});</script>
<script>
$(function () {
    
     
<?php if(!empty($course)){ ?>
    $("select[name='advantage[]']").val(<?php echo @$course->advantage;?>).trigger('change');
    $("select[name='placement_logos[]']").val(<?php echo @$course->placement_logos;?>).trigger('change');
    $("select[name='alumini_speaks[]']").val(<?php echo @$course->alumini_speaks;?>).trigger('change');
    $("select[name='rel_courses[]']").val(<?php echo @$course->rel_courses;?>).trigger('change');
    $("select[name='video_testimonial[]']").val(<?php echo @$course->video_testimonial;?>).trigger('change');
    $("select[name='alumini[]']").val(<?php echo @$course->alumini;?>).trigger('change');
    $("select[name='trainers[]']").val(<?php echo @$course->trainers;?>).trigger('change'); 
    
<?php } ?>
     <?php if(!empty($home_banner)){ ?> 
    $("select[name='bundle[]']").val(<?php echo @$home_banner->bundle;?>).trigger('change');
<?php } ?>
});
</script>
<script>
  initSample();
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

@stack('scripts')

 