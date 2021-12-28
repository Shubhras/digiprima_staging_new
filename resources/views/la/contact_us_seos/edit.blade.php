@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contact_us_seos') }}">Contact us seo</a> :
@endsection
@section("contentheader_description", $contact_us_seo->$view_col)
@section("section", "Contact us seos")
@section("section_url", url(config('laraadmin.adminRoute') . '/contact_us_seos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contact us seos Edit : ".$contact_us_seo->$view_col)

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
				{!! Form::model($contact_us_seo, ['route' => [config('laraadmin.adminRoute') . '.contact_us_seos.update', $contact_us_seo->id ], 'method'=>'PUT', 'id' => 'contact_us_seo-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contact_us_seos') }}">Cancel</a></button>
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
	$("#contact_us_seo-edit-form").validate({
		
	});
});
</script>
@endpush
