@extends('client.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
    
	    <div class="row">
		    <h1> Prodotti Fissi </h1>

		</div>

		<hr>

		<div class="row col-lg-6">

			<h3>Genera QR Prodotto dinamico</h3>

			<form method="post" action="{{route('show_dynamic_qr')}}">
			  <div class="form-group">
			    <label for="name">Nome prodotto</label>
			    <input type="text" class="form-control" name="name" aria-describedby="nome" placeholder="Inserire nome prodotto">
			  </div>
			  
			  <div class="form-group">
			    <label for="price">Prezzo prodotto</label>
			    <input type="text" class="form-control" name="price" aria-describedby="prezzo" placeholder="Inserire prezzo prodotto">
			  </div>

			  <input type="hidden" value="0" name="locked" />

			  {{csrf_field()}}

			  <button type="submit" class="btn btn-primary">Genera QR</button>
			</form>

		</div>



		

	</div>
    
    
@endsection


@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
