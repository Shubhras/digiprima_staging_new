@extends("la.layouts.app")

@section("contentheader_title", "Company Pages")
@section("contentheader_description", "Company Pages listing")
@section("section", "Company Pages")
@section("sub_section", "Listing")
@section("htmlheader_title", "Company Pages Listing")

@section("headerElems")
@la_access("Company_Pages", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Company Page</button>
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

@la_access("Company_Pages", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Company Page</h4>
			</div>
			{!! Form::open(['action' => 'LA\Company_PagesController@store', 'id' => 'company_page-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                    @la_form($module)
					
					{{--
					@la_input($module, 'contact_label')
					@la_input($module, 'contact_url')
					@la_input($module, 'hide_director')
					@la_input($module, 'hide_c_video')
					@la_input($module, 'banner_title')
					@la_input($module, 'banner_image')
					@la_input($module, 'banner_description')
					@la_input($module, 'story_lbl')
					@la_input($module, 'story_desc')
					@la_input($module, 'video_title')
					@la_input($module, 'company_lbl')
					@la_input($module, 'video_desc')
					@la_input($module, 'video')
					@la_input($module, 'learning_lbl')
					@la_input($module, 'learning_desc')
					@la_input($module, 'franchise_lbl')
					@la_input($module, 'franchise_desc')
					@la_input($module, 'mission_lbl')
					@la_input($module, 'award_label')
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
        ajax: "{{ url(config('laraadmin.adminRoute') . '/company_page_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#company_page-add-form").validate({
		
	});
});
</script>
@endpush
