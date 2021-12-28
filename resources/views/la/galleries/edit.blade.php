@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/galleries') }}">Gallery</a> :
@endsection
@section("contentheader_description", $gallery->$view_col)
@section("section", "Galleries")
@section("section_url", url(config('laraadmin.adminRoute') . '/galleries'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Galleries Edit : ".$gallery->$view_col)

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
				{!! Form::model($gallery, ['route' => [config('laraadmin.adminRoute') . '.galleries.update', $gallery->id ], 'method'=>'PUT', 'id' => 'gallery-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'banner_image')
					@la_input($module, 'banner_title')
					@la_input($module, 'banner_description')
					@la_input($module, 'lab_title')
					@la_input($module, 'lab_desc')
					@la_input($module, 'master_title')
					@la_input($module, 'master_desc')
					@la_input($module, 'social_title')
					@la_input($module, 'social_desc')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/galleries') }}">Cancel</a></button>
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
	$("#gallery-edit-form").validate({
		
	});
});
</script>
@endpush
