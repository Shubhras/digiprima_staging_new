@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rating_submissions') }}">Rating Submission</a> :
@endsection
@section("contentheader_description", $rating_submission->$view_col)
@section("section", "Rating Submissions")
@section("section_url", url(config('laraadmin.adminRoute') . '/rating_submissions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rating Submissions Edit : ".$rating_submission->$view_col)

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
				{!! Form::model($rating_submission, ['route' => [config('laraadmin.adminRoute') . '.rating_submissions.update', $rating_submission->id ], 'method'=>'PUT', 'id' => 'rating_submission-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'enquiry_date')
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'mobile')
					@la_input($module, 'city')
					@la_input($module, 'course')
					@la_input($module, 'training_rating')
					@la_input($module, 'lab_rating')
					@la_input($module, 'guidance_rating')
					@la_input($module, 'review')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rating_submissions') }}">Cancel</a></button>
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
	$("#rating_submission-edit-form").validate({
		
	});
});
</script>
@endpush
