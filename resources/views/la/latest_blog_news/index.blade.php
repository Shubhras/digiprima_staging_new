@extends("la.layouts.app")

@section("contentheader_title", "Latest blog news")
@section("contentheader_description", "Latest blog news listing")
@section("section", "Latest blog news")
@section("sub_section", "Listing")
@section("htmlheader_title", "Latest blog news Listing")

@section("headerElems")
@la_access("Latest_blog_news", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Latest blog news</button>
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

@la_access("Latest_blog_news", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Latest blog news</h4>
			</div>
			{!! Form::open(['action' => 'LA\Latest_blog_newsController@store', 'id' => 'latest_blog_news-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                   
					<!-- @la_input($module, 'date')
					@la_input($module, 'container_title') -->
					<!-- @la_input($module, 'container_desc') -->
					@la_input($module, 'image')
					@la_input($module, 'title')
					@la_input($module, 'img_alt')
					@la_input($module, 'slug')
					@la_input($module, 'container_title')
					<div class="form-group">
						<label for="container_desc">container_desc :</label>
						<textarea rows="5" cols="10" name="editor" id="editor"></textarea>
					</div>
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					@la_input($module, 'canonical_link')
					<!-- @la_input($module, 'container_img') -->

					<!-- @la_input($module, 'description')
					@la_input($module, 'image_title')
					@la_input($module, 'title') -->
					
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
        ajax: "{{ url(config('laraadmin.adminRoute') . '/latest_blog_news_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#latest_blog_news-add-form").validate({
		
	});
});
</script>

@endpush
