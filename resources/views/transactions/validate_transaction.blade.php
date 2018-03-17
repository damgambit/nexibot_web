@extends('client.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
    	
    	<div class="row col-lg-6">

			<h3>Carica QR</h3>

			<form method="post" action="{{route('check_qr_conf')}}">
			  

			  <input type="file" name="pic" accept="image/*">

			  {{csrf_field()}}

			  <br><hr><br>

			  <button type="submit" class="btn btn-primary">Verifica QR</button>
			</form>

		</div>

	</div>
    
    
@endsection


@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
s