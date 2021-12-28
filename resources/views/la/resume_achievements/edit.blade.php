@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/resume_achievements') }}">Resume achievement</a> :
@endsection
@section("contentheader_description", $resume_achievement->$view_col)
@section("section", "Resume achievements")
@section("section_url", url(config('laraadmin.adminRoute') . '/resume_achievements'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Resume achievements Edit : ".$resume_achievement->$view_col)

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
				{!! Form::model($resume_achievement, ['route' => [config('laraadmin.adminRoute') . '.resume_achievements.update', $resume_achievement->id ], 'method'=>'PUT', 'id' => 'resume_achievement-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'achievements_title')
					@la_input($module, 'resume_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/resume_achievements') }}">Cancel</a></button>
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
	$("#resume_achievement-edit-form").validate({
		
	});
});
</script>
@endpush
