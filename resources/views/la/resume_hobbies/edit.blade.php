@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/resume_hobbies') }}">Resume hobby</a> :
@endsection
@section("contentheader_description", $resume_hobby->$view_col)
@section("section", "Resume hobbies")
@section("section_url", url(config('laraadmin.adminRoute') . '/resume_hobbies'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Resume hobbies Edit : ".$resume_hobby->$view_col)

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
				{!! Form::model($resume_hobby, ['route' => [config('laraadmin.adminRoute') . '.resume_hobbies.update', $resume_hobby->id ], 'method'=>'PUT', 'id' => 'resume_hobby-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'resume_id')
					@la_input($module, 'hobbies_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/resume_hobbies') }}">Cancel</a></button>
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
	$("#resume_hobby-edit-form").validate({
		
	});
});
</script>
@endpush
