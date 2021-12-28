@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contact_uses') }}">Contact us</a> :
@endsection
@section("contentheader_description", $contact_us->$view_col)
@section("section", "Contact uses")
@section("section_url", url(config('laraadmin.adminRoute') . '/contact_uses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contact uses Edit : ".$contact_us->$view_col)

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
				{!! Form::model($contact_us, ['route' => [config('laraadmin.adminRoute') . '.contact_uses.update', $contact_us->id ], 'method'=>'PUT', 'id' => 'contact_us-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'first_name')
					@la_input($module, 'EMAIL')
					@la_input($module, 'PhoneNumber')
					@la_input($module, 'project_type')
					@la_input($module, 'message')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contact_uses') }}">Cancel</a></button>
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
	$("#contact_us-edit-form").validate({
		
	});
});
</script>
@endpush
