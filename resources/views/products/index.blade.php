@extends('client.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
    
	    <div class="row">
		    <h1> Prodotti Fissi </h1>

		</div>

		<hr>

		<div class="row col-lg-6">

			<h3>Aggiungi Prodotto fisso</h3>

			<form method="post" action="{{route('create_product')}}">
			  <div class="form-group">
			    <label for="name">Nome prodotto</label>
			    <input type="text" class="form-control" name="name" aria-describedby="nome" placeholder="Inserire nome prodotto">
			  </div>
			  
			  <div class="form-group">
			    <label for="price">Prezzo prodotto</label>
			    <input type="text" class="form-control" name="price" aria-describedby="prezzo" placeholder="Inserire prezzo prodotto">
			  </div>

			  <input type="hidden" value="1" name="locked" />

			  {{csrf_field()}}

			  <button type="submit" class="btn btn-primary">Aggiungi</button>
			</form>

		</div>



		<div class="col-lg-8">
			<br><br><br>
			<table class="table table-bordered table-hover table-responsive">

				<thead>

					<th>Nome</th>
					<th>Prezzo</th>
					<th>QR</th>

				</thead>

				<tbody style="font-size: 24px">
					@foreach($products as $product)
						<tr>
							<td>{{$product->name}}</td>
							<td>{{$product->price}}</td>
							<td>
								<a href="{{route('show_qr', $product->id) }}">
									<button class="col-lg-12 btn btn-info"> 
										QR
									</button>
								</a> 
							</td>
	
						</tr>
					@endforeach
				</tbody>

			</table>
		</div>

	</div>
    
    
@endsection


@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
