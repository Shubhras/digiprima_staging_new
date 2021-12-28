@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/gallery_images') }}">Gallery Image</a> :
@endsection
@section("contentheader_description", $gallery_image->$view_col)
@section("section", "Gallery Images")
@section("section_url", url(config('laraadmin.adminRoute') . '/gallery_images'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Gallery Images Edit : ".$gallery_image->$view_col)

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
				{!! Form::model($gallery_image, ['route' => [config('laraadmin.adminRoute') . '.gallery_images.update', $gallery_image->id ], 'method'=>'PUT', 'id' => 'gallery_image-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'image')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/gallery_images') }}">Cancel</a></button>
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
	$("#gallery_image-edit-form").validate({
		
	});
});
</script>
@endpush
