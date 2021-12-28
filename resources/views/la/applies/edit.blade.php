@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/applies') }}">Apply</a> :
@endsection
@section("contentheader_description", $apply->$view_col)
@section("section", "Applies")
@section("section_url", url(config('laraadmin.adminRoute') . '/applies'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Applies Edit : ".$apply->$view_col)

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
				{!! Form::model($apply, ['route' => [config('laraadmin.adminRoute') . '.applies.update', $apply->id ], 'method'=>'PUT', 'id' => 'apply-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'first_name')
					@la_input($module, 'last_name')
					@la_input($module, 'email')
					@la_input($module, 'phone_number')
					@la_input($module, 'attachment_one')
					@la_input($module, 'attachment_two')
					@la_input($module, 'message')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/applies') }}">Cancel</a></button>
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
	$("#apply-edit-form").validate({
		
	});
});
</script>
@endpush
