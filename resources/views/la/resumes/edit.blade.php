@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/resumes') }}">Resume</a> :
@endsection
@section("contentheader_description", $resume->$view_col)
@section("section", "Resumes")
@section("section_url", url(config('laraadmin.adminRoute') . '/resumes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Resumes Edit : ".$resume->$view_col)

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
				{!! Form::model($resume, ['route' => [config('laraadmin.adminRoute') . '.resumes.update', $resume->id ], 'method'=>'PUT', 'id' => 'resume-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'user_id')
					@la_input($module, 'first_name')
					@la_input($module, 'middle_name')
					@la_input($module, 'last_name')
					@la_input($module, 'gender')
					@la_input($module, 'married')
					@la_input($module, 'mobile')
					@la_input($module, 'date_birth')
					@la_input($module, 'address')
					@la_input($module, 'salary_cur')
					@la_input($module, 'notice_period')
					@la_input($module, 'designnation')
					@la_input($module, 'image')
					@la_input($module, 'expected_ctc')
					@la_input($module, 'image_award')
					@la_input($module, 'image_achive')
					@la_input($module, 'status')
					@la_input($module, 'unique_id')
					@la_input($module, 'about_me')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/resumes') }}">Cancel</a></button>
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
	$("#resume-edit-form").validate({
		
	});
});
</script>
@endpush
