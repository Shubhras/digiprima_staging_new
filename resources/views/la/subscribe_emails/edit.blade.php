@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/subscribe_emails') }}">Subscribe Email</a> :
@endsection
@section("contentheader_description", $subscribe_email->$view_col)
@section("section", "Subscribe Emails")
@section("section_url", url(config('laraadmin.adminRoute') . '/subscribe_emails'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Subscribe Emails Edit : ".$subscribe_email->$view_col)

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
				{!! Form::model($subscribe_email, ['route' => [config('laraadmin.adminRoute') . '.subscribe_emails.update', $subscribe_email->id ], 'method'=>'PUT', 'id' => 'subscribe_email-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/subscribe_emails') }}">Cancel</a></button>
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
	$("#subscribe_email-edit-form").validate({
		
	});
});
</script>
@endpush
