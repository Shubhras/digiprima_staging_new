@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/company_pages') }}">Company Page</a> :
@endsection
@section("contentheader_description", $company_page->$view_col)
@section("section", "Company Pages")
@section("section_url", url(config('laraadmin.adminRoute') . '/company_pages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Company Pages Edit : ".$company_page->$view_col)

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
				{!! Form::model($company_page, ['route' => [config('laraadmin.adminRoute') . '.company_pages.update', $company_page->id ], 'method'=>'PUT', 'id' => 'company_page-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'contact_label')
					@la_input($module, 'contact_url')
					@la_input($module, 'hide_director')
					@la_input($module, 'hide_c_video')
					@la_input($module, 'banner_title')
					@la_input($module, 'banner_image')
					@la_input($module, 'banner_description')
					@la_input($module, 'story_lbl')
					@la_input($module, 'story_desc')
					@la_input($module, 'video_title')
					@la_input($module, 'company_lbl')
					@la_input($module, 'video_desc')
					@la_input($module, 'video')
					@la_input($module, 'learning_lbl')
					@la_input($module, 'learning_desc')
					@la_input($module, 'franchise_lbl')
					@la_input($module, 'franchise_desc')
					@la_input($module, 'mission_lbl')
					@la_input($module, 'award_label')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/company_pages') }}">Cancel</a></button>
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
	$("#company_page-edit-form").validate({
		
	});
});
</script>
@endpush
