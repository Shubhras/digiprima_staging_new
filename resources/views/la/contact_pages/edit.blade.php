@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contact_pages') }}">Contact Page</a> :
@endsection
@section("contentheader_description", $contact_page->$view_col)
@section("section", "Contact Pages")
@section("section_url", url(config('laraadmin.adminRoute') . '/contact_pages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contact Pages Edit : ".$contact_page->$view_col)

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
				{!! Form::model($contact_page, ['route' => [config('laraadmin.adminRoute') . '.contact_pages.update', $contact_page->id ], 'method'=>'PUT', 'id' => 'contact_page-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'banner_title')
					@la_input($module, 'banner_description')
					@la_input($module, 'banner_image')
					@la_input($module, 'call_text')
					@la_input($module, 'form1_lbl')
					@la_input($module, 'from2_label')
					@la_input($module, 'form3_label')
					@la_input($module, 'locate_lbl')
					@la_input($module, 'locate_desc')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contact_pages') }}">Cancel</a></button>
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
	$("#contact_page-edit-form").validate({
		
	});
});
</script>
@endpush
