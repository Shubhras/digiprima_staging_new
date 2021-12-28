@extends("la.layouts.app")

@section("contentheader_title", "Courses")
@section("contentheader_description", "Courses listing")
@section("section", "Courses")
@section("sub_section", "Listing")
@section("htmlheader_title", "Courses Listing")

@section("headerElems")
@la_access("Courses", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Course</button>
@endla_access
@endsection

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

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Courses", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Course</h4>
			</div>
			{!! Form::open(['action' => 'LA\CoursesController@store', 'id' => 'course-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
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
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/course_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#course-add-form").validate({
		
	});
});
</script>
@endpush
