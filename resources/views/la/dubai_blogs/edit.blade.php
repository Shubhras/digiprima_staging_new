@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/dubai_blogs') }}">Dubai blog</a> :
@endsection
@section("contentheader_description", $dubai_blog->$view_col)
@section("section", "Dubai blogs")
@section("section_url", url(config('laraadmin.adminRoute') . '/dubai_blogs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Dubai blogs Edit : ".$dubai_blog->$view_col)

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
				{!! Form::model($dubai_blog, ['route' => [config('laraadmin.adminRoute') . '.dubai_blogs.update', $dubai_blog->id ], 'method'=>'PUT', 'id' => 'dubai_blog-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'date')
					@la_input($module, 'container_title')
					@la_input($module, 'container_desc')
					@la_input($module, 'url')
					@la_input($module, 'container_img')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'slug')
					@la_input($module, 'img_alt')
					@la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					@la_input($module, 'canonical_link')
					@la_input($module, 'image')
					@la_input($module, 'description')
					@la_input($module, 'image_title')
					@la_input($module, 'title')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/dubai_blogs') }}">Cancel</a></button>
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
	$("#dubai_blog-edit-form").validate({
		
	});
});
</script>
@endpush
