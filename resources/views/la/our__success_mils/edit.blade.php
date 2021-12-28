@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/our__success_mils') }}">Our  Success Mil</a> :
@endsection
@section("contentheader_description", $our__success_mil->$view_col)
@section("section", "Our  Success Mils")
@section("section_url", url(config('laraadmin.adminRoute') . '/our__success_mils'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Our  Success Mils Edit : ".$our__success_mil->$view_col)

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
				{!! Form::model($our__success_mil, ['route' => [config('laraadmin.adminRoute') . '.our__success_mils.update', $our__success_mil->id ], 'method'=>'PUT', 'id' => 'our__success_mil-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'position')
					@la_input($module, 'image')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/our__success_mils') }}">Cancel</a></button>
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
	$("#our__success_mil-edit-form").validate({
		
	});
});
</script>
@endpush
