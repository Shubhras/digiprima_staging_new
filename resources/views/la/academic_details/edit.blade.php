@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/academic_details') }}">Academic detail</a> :
@endsection
@section("contentheader_description", $academic_detail->$view_col)
@section("section", "Academic details")
@section("section_url", url(config('laraadmin.adminRoute') . '/academic_details'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Academic details Edit : ".$academic_detail->$view_col)

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
				{!! Form::model($academic_detail, ['route' => [config('laraadmin.adminRoute') . '.academic_details.update', $academic_detail->id ], 'method'=>'PUT', 'id' => 'academic_detail-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'resume_id')
					@la_input($module, 'degree')
					@la_input($module, 'year')
					@la_input($module, 'board')
					@la_input($module, 'college')
					@la_input($module, 'city')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/academic_details') }}">Cancel</a></button>
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
	$("#academic_detail-edit-form").validate({
		
	});
});
</script>
@endpush
