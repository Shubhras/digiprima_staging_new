@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/resume_experiences') }}">Resume experience</a> :
@endsection
@section("contentheader_description", $resume_experience->$view_col)
@section("section", "Resume experiences")
@section("section_url", url(config('laraadmin.adminRoute') . '/resume_experiences'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Resume experiences Edit : ".$resume_experience->$view_col)

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
				{!! Form::model($resume_experience, ['route' => [config('laraadmin.adminRoute') . '.resume_experiences.update', $resume_experience->id ], 'method'=>'PUT', 'id' => 'resume_experience-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'resume_id')
					@la_input($module, 'experience_from')
					@la_input($module, 'experience_to')
					@la_input($module, 'company_name')
					@la_input($module, 'roles_and_resp')
					@la_input($module, 'current_working')
					@la_input($module, 'work_city')
					@la_input($module, 'designation')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/resume_experiences') }}">Cancel</a></button>
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
	$("#resume_experience-edit-form").validate({
		
	});
});
</script>
@endpush
