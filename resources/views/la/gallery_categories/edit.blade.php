@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/gallery_categories') }}">Gallery Category</a> :
@endsection
@section("contentheader_description", $gallery_category->$view_col)
@section("section", "Gallery Categories")
@section("section_url", url(config('laraadmin.adminRoute') . '/gallery_categories'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Gallery Categories Edit : ".$gallery_category->$view_col)

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
				{!! Form::model($gallery_category, ['route' => [config('laraadmin.adminRoute') . '.gallery_categories.update', $gallery_category->id ], 'method'=>'PUT', 'id' => 'gallery_category-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/gallery_categories') }}">Cancel</a></button>
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
	$("#gallery_category-edit-form").validate({
		
	});
});
</script>
@endpush
