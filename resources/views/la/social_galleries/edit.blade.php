@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/social_galleries') }}">Social Gallery</a> :
@endsection
@section("contentheader_description", $social_gallery->$view_col)
@section("section", "Social Galleries")
@section("section_url", url(config('laraadmin.adminRoute') . '/social_galleries'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Social Galleries Edit : ".$social_gallery->$view_col)

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
				{!! Form::model($social_gallery, ['route' => [config('laraadmin.adminRoute') . '.social_galleries.update', $social_gallery->id ], 'method'=>'PUT', 'id' => 'social_gallery-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'image')
					@la_input($module, 'category')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/social_galleries') }}">Cancel</a></button>
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
	$("#social_gallery-edit-form").validate({
		
	});
});
</script>
@endpush
