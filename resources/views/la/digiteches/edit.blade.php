@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/digiteches') }}">Digitech</a> :
@endsection
@section("contentheader_description", $digitech->$view_col)
@section("section", "Digiteches")
@section("section_url", url(config('laraadmin.adminRoute') . '/digiteches'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Digiteches Edit : ".$digitech->$view_col)

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
				{!! Form::model($digitech, ['route' => [config('laraadmin.adminRoute') . '.digiteches.update', $digitech->id ], 'method'=>'PUT', 'id' => 'digitech-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/digiteches') }}">Cancel</a></button>
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
	$("#digitech-edit-form").validate({
		
	});
});
</script>
@endpush
