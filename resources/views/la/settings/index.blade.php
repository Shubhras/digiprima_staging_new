@extends("la.layouts.app")

@section("contentheader_title", "Settings")
@section("contentheader_description", "Settings listing")
@section("section", "Settings")
@section("sub_section", "Listing")
@section("htmlheader_title", "Settings Listing")

@section("headerElems")
@la_access("Settings", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Setting</button>
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

@la_access("Settings", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Setting</h4>
			</div>
			{!! Form::open(['action' => 'LA\SettingsController@store', 'id' => 'setting-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                    @la_form($module)
					
					{{--
					@la_input($module, 'profile_build_title')
					@la_input($module, 'cvbuilder_image')
					@la_input($module, 'employer_banner')
					@la_input($module, 'twitter_link')
					@la_input($module, 'facebook_link')
					@la_input($module, 'google_link')
					@la_input($module, 'linkedin_link')
					@la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					@la_input($module, 'get_started_url')
					@la_input($module, 'footer_p')
					@la_input($module, 'copy_right1')
					@la_input($module, 'copy_right2')
					@la_input($module, 'job_seeker_title')
					@la_input($module, 'job_seeker_desc')
					@la_input($module, 'employer_title')
					@la_input($module, 'employer_desc')
					@la_input($module, 'trainings_title')
					@la_input($module, 'trainings_desc')
					@la_input($module, 'latest_blog_news')
					@la_input($module, 'subscribe_news_title')
					@la_input($module, 'subscribe_news_desc')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'logo')
					@la_input($module, 'email')
					@la_input($module, 'contact_number')
					@la_input($module, 'mobile1')
					@la_input($module, 'mobile2')
					@la_input($module, 'explore_best')
					@la_input($module, 'career_oriented')
					@la_input($module, 'top_course')
					@la_input($module, 'top_course_desc')
					@la_input($module, 'latest_tech_lbl')
					@la_input($module, 'latest_tech_desc')
					@la_input($module, 'hiring_partner_lbl')
					@la_input($module, 'hiring_partner_desc')
					@la_input($module, 'hiring_partner_text')
					@la_input($module, 'world_talking_about')
					@la_input($module, 'get_started')
					@la_input($module, 'copy_right')
					@la_input($module, 'footer_logo')
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
        ajax: "{{ url(config('laraadmin.adminRoute') . '/setting_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#setting-add-form").validate({
		
	});
});
</script>
@endpush
