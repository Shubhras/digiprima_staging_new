@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/success_stories') }}">Success Story</a> :
@endsection
@section("contentheader_description", $success_story->$view_col)
@section("section", "Success Stories")
@section("section_url", url(config('laraadmin.adminRoute') . '/success_stories'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Success Stories Edit : ".$success_story->$view_col)

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
				{!! Form::model($success_story, ['route' => [config('laraadmin.adminRoute') . '.success_stories.update', $success_story->id ], 'method'=>'PUT', 'id' => 'success_story-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'designition')
					@la_input($module, 'image')
					@la_input($module, 'title')
					@la_input($module, 'about')
					@la_input($module, 'url')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/success_stories') }}">Cancel</a></button>
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
	$("#success_story-edit-form").validate({
		
	});
});
</script>
@endpush
