@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/newyork_contacts') }}">Newyork Contact</a> :
@endsection
@section("contentheader_description", $newyork_contact->$view_col)
@section("section", "Newyork Contacts")
@section("section_url", url(config('laraadmin.adminRoute') . '/newyork_contacts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Newyork Contacts Edit : ".$newyork_contact->$view_col)

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
				{!! Form::model($newyork_contact, ['route' => [config('laraadmin.adminRoute') . '.newyork_contacts.update', $newyork_contact->id ], 'method'=>'PUT', 'id' => 'newyork_contact-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'phone')
					@la_input($module, 'message')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/newyork_contacts') }}">Cancel</a></button>
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
	$("#newyork_contact-edit-form").validate({
		
	});
});
</script>
@endpush
