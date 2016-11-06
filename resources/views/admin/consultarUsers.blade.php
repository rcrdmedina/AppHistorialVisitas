@extends('layouts.Base')

@section('content')

	@include('layouts.Heading')

	<div class="row">
		<div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="text-center"> <i class="fa fa-users"></i> Lista de usuarios del sistema.</h3></div>
                <div class="panel-body">
                	<div class="row container-add-user">
					</div>
					
					<div id="tabla-usuarios">
						@include('layouts.Table_users')
					</div>

				</div> 
            </div>
        </div>
	</div>

	<!-- /.row -->
	
	@include('layouts.Modal')

    <hr>

@endsection