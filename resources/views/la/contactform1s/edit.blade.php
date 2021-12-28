@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contactform1s') }}">Contactform1</a> :
@endsection
@section("contentheader_description", $contactform1->$view_col)
@section("section", "Contactform1s")
@section("section_url", url(config('laraadmin.adminRoute') . '/contactform1s'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contactform1s Edit : ".$contactform1->$view_col)

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
				{!! Form::model($contactform1, ['route' => [config('laraadmin.adminRoute') . '.contactform1s.update', $contactform1->id ], 'method'=>'PUT', 'id' => 'contactform1-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'subject')
					@la_input($module, 'number')
					@la_input($module, 'message')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contactform1s') }}">Cancel</a></button>
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
	$("#contactform1-edit-form").validate({
		
	});
});
</script>
@endpush
