@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/hobbies') }}">Hobby</a> :
@endsection
@section("contentheader_description", $hobby->$view_col)
@section("section", "Hobbies")
@section("section_url", url(config('laraadmin.adminRoute') . '/hobbies'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Hobbies Edit : ".$hobby->$view_col)

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
				{!! Form::model($hobby, ['route' => [config('laraadmin.adminRoute') . '.hobbies.update', $hobby->id ], 'method'=>'PUT', 'id' => 'hobby-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'hobbies_title')
					@la_input($module, 'description')
					@la_input($module, 'publish')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/hobbies') }}">Cancel</a></button>
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
	$("#hobby-edit-form").validate({
		
	});
});
</script>
@endpush
