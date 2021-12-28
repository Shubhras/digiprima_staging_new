@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/settings') }}">Setting</a> :
@endsection
@section("contentheader_description", $setting->$view_col)
@section("section", "Settings")
@section("section_url", url(config('laraadmin.adminRoute') . '/settings'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Settings Edit : ".$setting->$view_col)

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
				{!! Form::model($setting, ['route' => [config('laraadmin.adminRoute') . '.settings.update', $setting->id ], 'method'=>'PUT', 'id' => 'setting-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'profile_build_title')
					@la_input($module, 'cvbuilder_image')
					@la_input($module, 'employer_banner')
					@la_input($module, 'twitter_link')
					@la_input($module, 'facebook_link')
					@la_input($module, 'google_link')
					@la_input($module, 'linkedin_link')
					@la_input($module, 'image_meta_url')
					@la_input($module, 'meta_url_description')
					@la_input($module, 'page_url')
					@la_input($module, 'get_started_url')
					@la_input($module, 'footer_p')
					@la_input($module, 'copy_right1')
					@la_input($module, 'copy_right2')
					@la_input($module, 'job_seeker_title')
					@la_input($module, 'job_seeker_desc')
					@la_input($module, 'employer_title')
					@la_input($module, 'employer_desc')
					@la_input($module, 'trainings_title')
					@la_input($module, 'trainings_desc')
					@la_input($module, 'latest_blog_news')
					@la_input($module, 'subscribe_news_title')
					@la_input($module, 'subscribe_news_desc')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					@la_input($module, 'logo')
					@la_input($module, 'email')
					@la_input($module, 'contact_number')
					@la_input($module, 'mobile1')
					@la_input($module, 'mobile2')
					@la_input($module, 'explore_best')
					@la_input($module, 'career_oriented')
					@la_input($module, 'top_course')
					@la_input($module, 'top_course_desc')
					@la_input($module, 'latest_tech_lbl')
					@la_input($module, 'latest_tech_desc')
					@la_input($module, 'hiring_partner_lbl')
					@la_input($module, 'hiring_partner_desc')
					@la_input($module, 'hiring_partner_text')
					@la_input($module, 'world_talking_about')
					@la_input($module, 'get_started')
					@la_input($module, 'copy_right')
					@la_input($module, 'footer_logo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/settings') }}">Cancel</a></button>
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
	$("#setting-edit-form").validate({
		
	});
});
</script>
@endpush
