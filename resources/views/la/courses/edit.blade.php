@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/courses') }}">Course</a> :
@endsection
@section("contentheader_description", $course->$view_col)
@section("section", "Courses")
@section("section_url", url(config('laraadmin.adminRoute') . '/courses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Courses Edit : ".$course->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($course, ['route' => [config('laraadmin.adminRoute') . '.courses.update', $course->id ], 'method'=>'PUT', 'id' => 'course-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'course_slug')
					@la_input($module, 'banner')
					@la_input($module, 'course_image')
					@la_input($module, 'advantage_label')
					@la_input($module, 'advantage')
					@la_input($module, 'brochure')
					@la_input($module, 'why_choose_title')
					@la_input($module, 'why_choose_desc')
					@la_input($module, 'placement_label')
					@la_input($module, 'placement_logos')
					@la_input($module, 'alumini_speaks')
					@la_input($module, 'hide_alumini_speak')
					@la_input($module, 'about_title')
					@la_input($module, 'about_desc')
					@la_input($module, 'about_video')
					@la_input($module, 'related_course_label')
					@la_input($module, 'related_url_text')
					@la_input($module, 'rel_courses')
					@la_input($module, 'hide_related_course')
					@la_input($module, 'testimonial_label')
					@la_input($module, 'video_testimonial')
					@la_input($module, 'hide_video_testimoni')
					@la_input($module, 'trainer_label')
					@la_input($module, 'trainers')
					@la_input($module, 'hide_trainer')
					@la_input($module, 'alumini_label')
					@la_input($module, 'alumini_desc')
					@la_input($module, 'alumini')
					@la_input($module, 'hide_alumini_part_of')
					@la_input($module, 'course_overview_lbl')
					@la_input($module, 'course_overview')
					@la_input($module, 'overview_description')
					@la_input($module, 'duration')
					@la_input($module, 'duration_desc')
					@la_input($module, 'content')
					@la_input($module, 'content_desc')
					@la_input($module, 'certificate')
					@la_input($module, 'certificate_desc')
					@la_input($module, 'job')
					@la_input($module, 'benefit')
					@la_input($module, 'enrollment')
					@la_input($module, 'enrollment_desc')
					@la_input($module, 'contact_us')
					@la_input($module, 'contact_desc')
					@la_input($module, 'contact_url_text')
					@la_input($module, 'contact_url')
					@la_input($module, 'job_oriented_title')
					@la_input($module, 'job_oriented_desc')
					@la_input($module, 'hide_job_oriented')
					@la_input($module, 'job_oriented_url')
					@la_input($module, 'job_oriented_url_txt')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/courses') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#course-edit-form").validate({
		
	});
});
</script>
@endpush
