@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/resume_categories') }}">Resume category</a> :
@endsection
@section("contentheader_description", $resume_category->$view_col)
@section("section", "Resume categories")
@section("section_url", url(config('laraadmin.adminRoute') . '/resume_categories'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Resume categories Edit : ".$resume_category->$view_col)

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
				{!! Form::model($resume_category, ['route' => [config('laraadmin.adminRoute') . '.resume_categories.update', $resume_category->id ], 'method'=>'PUT', 'id' => 'resume_category-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'resume_id')
					@la_input($module, 'category_id')
					@la_input($module, 'sub_category_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/resume_categories') }}">Cancel</a></button>
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
	$("#resume_category-edit-form").validate({
		
	});
});
</script>
@endpush
