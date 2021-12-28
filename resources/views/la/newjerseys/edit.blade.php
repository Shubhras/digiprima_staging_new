@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/newjerseys') }}">Newjersey</a> :
@endsection
@section("contentheader_description", $newjersey->$view_col)
@section("section", "Newjerseys")
@section("section_url", url(config('laraadmin.adminRoute') . '/newjerseys'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Newjerseys Edit : ".$newjersey->$view_col)

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
				{!! Form::model($newjersey, ['route' => [config('laraadmin.adminRoute') . '.newjerseys.update', $newjersey->id ], 'method'=>'PUT', 'id' => 'newjersey-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/newjerseys') }}">Cancel</a></button>
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
	$("#newjersey-edit-form").validate({
		
	});
});
</script>
@endpush
