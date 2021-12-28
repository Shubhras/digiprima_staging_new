@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/navigation_jobseekers') }}">Navigation jobseeker</a> :
@endsection
@section("contentheader_description", $navigation_jobseeker->$view_col)
@section("section", "Navigation jobseekers")
@section("section_url", url(config('laraadmin.adminRoute') . '/navigation_jobseekers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Navigation jobseekers Edit : ".$navigation_jobseeker->$view_col)

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
				{!! Form::model($navigation_jobseeker, ['route' => [config('laraadmin.adminRoute') . '.navigation_jobseekers.update', $navigation_jobseeker->id ], 'method'=>'PUT', 'id' => 'navigation_jobseeker-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'url')
					@la_input($module, 'enable')
					@la_input($module, 'sort_order')
					@la_input($module, 'slug1')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/navigation_jobseekers') }}">Cancel</a></button>
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
	$("#navigation_jobseeker-edit-form").validate({
		
	});
});
</script>
@endpush
