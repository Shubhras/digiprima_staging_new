@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tools') }}">Tool</a> :
@endsection
@section("contentheader_description", $tool->$view_col)
@section("section", "Tools")
@section("section_url", url(config('laraadmin.adminRoute') . '/tools'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tools Edit : ".$tool->$view_col)

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
				{!! Form::model($tool, ['route' => [config('laraadmin.adminRoute') . '.tools.update', $tool->id ], 'method'=>'PUT', 'id' => 'tool-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tools_title')
					@la_input($module, 'description')
					@la_input($module, 'category_id')
					@la_input($module, 'publish')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tools') }}">Cancel</a></button>
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
	$("#tool-edit-form").validate({
		
	});
});
</script>
@endpush
