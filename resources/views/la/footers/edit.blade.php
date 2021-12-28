@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/footers') }}">Footer</a> :
@endsection
@section("contentheader_description", $footer->$view_col)
@section("section", "Footers")
@section("section_url", url(config('laraadmin.adminRoute') . '/footers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Footers Edit : ".$footer->$view_col)

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
				{!! Form::model($footer, ['route' => [config('laraadmin.adminRoute') . '.footers.update', $footer->id ], 'method'=>'PUT', 'id' => 'footer-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'url_text')
					@la_input($module, 'url')
					@la_input($module, 'icon_class')
					@la_input($module, 'category_name3')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/footers') }}">Cancel</a></button>
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
	$("#footer-edit-form").validate({
		
	});
});
</script>
@endpush
