@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rating_pages') }}">Rating Page</a> :
@endsection
@section("contentheader_description", $rating_page->$view_col)
@section("section", "Rating Pages")
@section("section_url", url(config('laraadmin.adminRoute') . '/rating_pages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rating Pages Edit : ".$rating_page->$view_col)

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
				{!! Form::model($rating_page, ['route' => [config('laraadmin.adminRoute') . '.rating_pages.update', $rating_page->id ], 'method'=>'PUT', 'id' => 'rating_page-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'description')
					@la_input($module, 'coupon_text')
					@la_input($module, 'coupon_desc')
					@la_input($module, 'rate_review_lbl')
					@la_input($module, 'faq_lbl')
					@la_input($module, 'faq_desc')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rating_pages') }}">Cancel</a></button>
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
	$("#rating_page-edit-form").validate({
		
	});
});
</script>
@endpush
