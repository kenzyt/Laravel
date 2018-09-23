@if(Session::has("success"))
	<div class="box-body">
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-check"></i> {!! trans('admin.validation') !!}</h4>
			{{ Session::get("success") }}
		</div>
	</div>
@endif
@if(Session::has("info"))
	<div class="box-body">
		<div class="alert alert-info alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa  fa-exclamation"></i> {!! trans('admin.informations') !!}</h4>
			{{ Session::get("info") }}
		</div>
	</div>
@endif
@if(Session::has("danger"))
	<div class="box-body">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa  fa-warning"></i> {!! trans('admin.informations') !!}</h4>
			{{ Session::get("danger") }}
		</div>
	</div>
@endif
@if($errors->any())
	<div class="box-body">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> {!! trans('admin.attention') !!}</h4>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif

