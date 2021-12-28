@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/portfolios') }}">Portfolio</a> :
@endsection
@section("contentheader_description", $portfolio->$view_col)
@section("section", "Portfolios")
@section("section_url", url(config('laraadmin.adminRoute') . '/portfolios'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Portfolios Edit : ".$portfolio->$view_col)

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
				{!! Form::model($portfolio, ['route' => [config('laraadmin.adminRoute') . '.portfolios.update', $portfolio->id ], 'method'=>'PUT', 'id' => 'portfolio-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_keyword')
					@la_input($module, 'meta_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/portfolios') }}">Cancel</a></button>
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
	$("#portfolio-edit-form").validate({
		
	});
});
</script>
@endpush
