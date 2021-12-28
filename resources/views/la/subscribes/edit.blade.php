@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/subscribes') }}">Subscribe</a> :
@endsection
@section("contentheader_description", $subscribe->$view_col)
@section("section", "Subscribes")
@section("section_url", url(config('laraadmin.adminRoute') . '/subscribes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Subscribes Edit : ".$subscribe->$view_col)

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
				{!! Form::model($subscribe, ['route' => [config('laraadmin.adminRoute') . '.subscribes.update', $subscribe->id ], 'method'=>'PUT', 'id' => 'subscribe-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'subscribes_email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/subscribes') }}">Cancel</a></button>
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
	$("#subscribe-edit-form").validate({
		
	});
});
</script>
@endpush
