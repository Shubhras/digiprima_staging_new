@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/matadatas') }}">MataData</a> :
@endsection
@section("contentheader_description", $matadata->$view_col)
@section("section", "MataDatas")
@section("section_url", url(config('laraadmin.adminRoute') . '/matadatas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "MataDatas Edit : ".$matadata->$view_col)

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
				{!! Form::model($matadata, ['route' => [config('laraadmin.adminRoute') . '.matadatas.update', $matadata->id ], 'method'=>'PUT', 'id' => 'matadata-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'description')
					@la_input($module, 'keyword')
					@la_input($module, 'imagetag_url')
					@la_input($module, 'pagetag')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/matadatas') }}">Cancel</a></button>
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
	$("#matadata-edit-form").validate({
		
	});
});
</script>
@endpush
