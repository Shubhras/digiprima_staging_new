@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pennsylvanias') }}">Pennsylvania</a> :
@endsection
@section("contentheader_description", $pennsylvania->$view_col)
@section("section", "Pennsylvanias")
@section("section_url", url(config('laraadmin.adminRoute') . '/pennsylvanias'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pennsylvanias Edit : ".$pennsylvania->$view_col)

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
				{!! Form::model($pennsylvania, ['route' => [config('laraadmin.adminRoute') . '.pennsylvanias.update', $pennsylvania->id ], 'method'=>'PUT', 'id' => 'pennsylvania-edit-form']) !!}
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
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pennsylvanias') }}">Cancel</a></button>
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
	$("#pennsylvania-edit-form").validate({
		
	});
});
</script>
@endpush
