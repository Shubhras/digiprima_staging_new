@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/hiring_partners') }}">Hiring Partner</a> :
@endsection
@section("contentheader_description", $hiring_partner->$view_col)
@section("section", "Hiring Partners")
@section("section_url", url(config('laraadmin.adminRoute') . '/hiring_partners'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Hiring Partners Edit : ".$hiring_partner->$view_col)

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
				{!! Form::model($hiring_partner, ['route' => [config('laraadmin.adminRoute') . '.hiring_partners.update', $hiring_partner->id ], 'method'=>'PUT', 'id' => 'hiring_partner-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'logo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/hiring_partners') }}">Cancel</a></button>
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
	$("#hiring_partner-edit-form").validate({
		
	});
});
</script>
@endpush
