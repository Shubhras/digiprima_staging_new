@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/employees') }}">Employee</a> :
@endsection
@section("contentheader_description", $employee->$view_col)
@section("section", "Employees")
@section("section_url", url(config('laraadmin.adminRoute') . '/employees'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Employees Edit : ".$employee->$view_col)

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
				{!! Form::model($employee, ['route' => [config('laraadmin.adminRoute') . '.employees.update', $employee->id ], 'method'=>'PUT', 'id' => 'employee-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'building_name')
					@la_input($module, 'landmark')
					@la_input($module, 'road')
					@la_input($module, 'locality_area')
					@la_input($module, 'state')
					@la_input($module, 'country')
					@la_input($module, 'zip_pin')
					@la_input($module, 'fixed')
					@la_input($module, 'variable')
					@la_input($module, 'expected_ctc')
					@la_input($module, 'notice_period')
					@la_input($module, 'password')
					@la_input($module, 'company_name')
					@la_input($module, 'job_title')
					@la_input($module, 'company_website')
					@la_input($module, 'no_of_employees')
					@la_input($module, 'first_name')
					@la_input($module, 'contact_no')
					@la_input($module, 'designation')
					@la_input($module, 'gender')
					@la_input($module, 'mobile')
					@la_input($module, 'mobile2')
					@la_input($module, 'email')
					@la_input($module, 'dept')
					@la_input($module, 'city')
					@la_input($module, 'address')
					@la_input($module, 'about')
					@la_input($module, 'date_birth')
					@la_input($module, 'date_hire')
					@la_input($module, 'date_left')
					@la_input($module, 'salary_cur')
					@la_input($module, 'headquarters_city')
					@la_input($module, 'looking_change')
					@la_input($module, 'currency')
					@la_input($module, 'role_id')
					@la_input($module, 'middle_name')
					@la_input($module, 'last_name')
					@la_input($module, 'married')
					@la_input($module, 'image')
					@la_input($module, 'door_floatno')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/employees') }}">Cancel</a></button>
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
	$("#employee-edit-form").validate({
		
	});
});
</script>
@endpush
