@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/blogdetails') }}">Blogdetail</a> :
@endsection
@section("contentheader_description", $blogdetail->$view_col)
@section("section", "Blogdetails")
@section("section_url", url(config('laraadmin.adminRoute') . '/blogdetails'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Blogdetails Edit : ".$blogdetail->$view_col)

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
				{!! Form::model($blogdetail, ['route' => [config('laraadmin.adminRoute') . '.blogdetails.update', $blogdetail->id ], 'method'=>'PUT', 'id' => 'blogdetail-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'description')
					@la_input($module, 'date')
					@la_input($module, 'content')
					@la_input($module, 'bannerimage2')
					@la_input($module, 'tag')
					@la_input($module, 'category')
					@la_input($module, 'meta_image')
					@la_input($module, 'slug')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/blogdetails') }}">Cancel</a></button>
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
	$("#blogdetail-edit-form").validate({
		
	});
});
</script>
@endpush
