@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/latest_blog_news') }}">Latest blog news</a> :
@endsection
@section("contentheader_description", $latest_blog_news->$view_col)
@section("section", "Latest blog news")
@section("section_url", url(config('laraadmin.adminRoute') . '/latest_blog_news'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Latest blog news Edit : ".$latest_blog_news->$view_col)

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
				{!! Form::model($latest_blog_news, ['route' => [config('laraadmin.adminRoute') . '.latest_blog_news.update', $latest_blog_news->id ], 'method'=>'PUT', 'id' => 'latest_blog_news-edit-form']) !!}
					
					<!-- @la_input($module, 'date')
					@la_input($module, 'container_title')
					@la_input($module, 'container_desc')
					@la_input($module, 'container_img') -->
					@la_input($module, 'image')
					@la_input($module, 'img_alt')
					@la_input($module, 'slug')
					@la_input($module, 'title')
					@la_input($module, 'container_title')
					<?php if(!empty($cont_desc)){?>
					<div class="form-group">
						<label for="description">Description :</label>
						<textarea rows="5" cols="2" name="editor" id="editor"><?php echo $cont_desc->container_desc;?></textarea>
					 </div>
					 <?php }else{?>
						<div class="form-group">
							<label for="container_desc">Description :</label>
							<textarea rows="5" cols="2" name="editor" id="editor"></textarea>
						 </div>
					 <?php }?>
					 @la_input($module, 'meta_title')
					 @la_input($module, 'meta_keyword')
					 @la_input($module, 'meta_description')
					 @la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					@la_input($module, 'canonical_link')
					
					<!-- @la_input($module, 'description')
					@la_input($module, 'image_title')
					@la_input($module, 'title') -->
					
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/latest_blog_news') }}">Cancel</a></button>
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
	$("#latest_blog_news-edit-form").validate({
		
	});
});
</script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
@endpush
