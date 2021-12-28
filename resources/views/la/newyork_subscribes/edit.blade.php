@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/newyork_subscribes') }}">Newyork Subscribe</a> :
@endsection
@section("contentheader_description", $newyork_subscribe->$view_col)
@section("section", "Newyork Subscribes")
@section("section_url", url(config('laraadmin.adminRoute') . '/newyork_subscribes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Newyork Subscribes Edit : ".$newyork_subscribe->$view_col)

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
				{!! Form::model($newyork_subscribe, ['route' => [config('laraadmin.adminRoute') . '.newyork_subscribes.update', $newyork_subscribe->id ], 'method'=>'PUT', 'id' => 'newyork_subscribe-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/newyork_subscribes') }}">Cancel</a></button>
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
	$("#newyork_subscribe-edit-form").validate({
		
	});
});
</script>
@endpush
