@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/blog_comments') }}">Blog Comment</a> :
@endsection
@section("contentheader_description", $blog_comment->$view_col)
@section("section", "Blog Comments")
@section("section_url", url(config('laraadmin.adminRoute') . '/blog_comments'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Blog Comments Edit : ".$blog_comment->$view_col)

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
				{!! Form::model($blog_comment, ['route' => [config('laraadmin.adminRoute') . '.blog_comments.update', $blog_comment->id ], 'method'=>'PUT', 'id' => 'blog_comment-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'blog_id')
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'mobile')
					@la_input($module, 'city')
					@la_input($module, 'comment')
					@la_input($module, 'is_approve')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/blog_comments') }}">Cancel</a></button>
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
	$("#blog_comment-edit-form").validate({
		
	});
});
</script>
@endpush
