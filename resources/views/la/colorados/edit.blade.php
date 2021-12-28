@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/colorados') }}">Colorado</a> :
@endsection
@section("contentheader_description", $colorado->$view_col)
@section("section", "Colorados")
@section("section_url", url(config('laraadmin.adminRoute') . '/colorados'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Colorados Edit : ".$colorado->$view_col)

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
				{!! Form::model($colorado, ['route' => [config('laraadmin.adminRoute') . '.colorados.update', $colorado->id ], 'method'=>'PUT', 'id' => 'colorado-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'page_url')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/colorados') }}">Cancel</a></button>
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
	$("#colorado-edit-form").validate({
		
	});
});
</script>
@endpush
