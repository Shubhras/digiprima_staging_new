@extends("la.layouts.app")

@section("contentheader_title", "Employees")
@section("contentheader_description", "Employees listing")
@section("section", "Employees")
@section("sub_section", "Listing")
@section("htmlheader_title", "Employees Listing")

@section("headerElems")
@la_access("Employees", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Employee</button>
@endla_access
@endsection

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

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table class="table table-bordered" id="example1" style="max-width: none !important;">
<!-- <div class="text-center">
		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
</div> -->
			<select id='select' style=" position: absolute; float: left; margin-left: 60px; height: 32px; background: #e9e9e9; clear: both;z-index: 999999999; margin-top: 32px;">
				<option value="">Search</option>
				<option value="1"> Admin </option>
				<option value="2"> Employeer </option>
				<option value="3"> Jobseeker </option>
			</select>

		<thead>
			<tr class="success">
				@foreach( $listing_cols as $col )
				<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
				@endforeach
				@if($show_actions)
				<th>Actions</th>
				@endif
			</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Employees", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Employee</h4>
			</div>
			{!! Form::open(['action' => 'LA\EmployeesController@store', 'id' => 'employee-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
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
					@la_input($module, 'middle_name')
					@la_input($module, 'last_name')
					@la_input($module, 'married')
					@la_input($module, 'image')
					@la_input($module, 'door_floatno')
					--}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/buttons.dataTables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('la-assets/plugins/datatables/buttons.html5.min.js') }}"></script>

<script>
$(function () {
	var table = $("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/employee_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
        scrollX:true,
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'csv'
            },        
   
        ],
	@if($show_actions)
        columnDefs: [ {
            targets: -1,
            visible: true
        } ],
	@endif
	});
	$('#select').on('change', function(){
    
    table
    .column(15)
    .search(this.value)
    .draw();

  });
	$("#employee-add-form").validate({
		
	});
});

/*$(document).ready(function($) {
 
  $('#select').change(function() {
   
    var selection = $(this).val();
     var dataset = $('#example1').find('tr');
  
    dataset.show();
    
    dataset.filter(function(index, item) {
      return $(item).find('td:first-child').text().split(',').indexOf(selection) === 0;
    }).hide();

  });
});*/
</script>
@endpush
