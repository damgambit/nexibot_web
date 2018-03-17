@extends('client.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
    	<div class="row">
		    <h1> transactions </h1>

		</div>

		<div class="col-lg-6">
			<table class="table table-bordered table-hover table-responsive">

				<thead>
					<th>id</th>
					<th>telegram_user_id</th>
					<th>amount</th>
					<th>currency</th>
					<th>status</th>
					<th>product_id</th>

				</thead>

				<tbody>
					@foreach($transactions as $transaction)
						<tr>
							<td>{{$transaction->id}}</td>
							<td>{{$transaction->telegram_user_id}}</td>
							<td>{{$transaction->amount}}</td>
							<td>{{$transaction->currency}}</td>
							<td>{{$transaction->status}}</td>
							<td>{{$transaction->product_id}}</td>
						</tr>
					@endforeach
				</tbody>

			</table>
		</div>
	</div>
    
@endsection

<script>
    function deposit() {
	    var payment = {
	      "destination":"mrt1mJVkypsUDWZaPgknUjoW3NWUNrJCPd",
	      "callback_url": "https://my.domain.com/callbacks/new-pay"
	    }

	    var TOKEN = '6a8f988861ac43ea9d64e16255b3da5c'

	    var url = 'https://api.blockcypher.com/v1/btc/test3/payments?token='+TOKEN;
	    $.post(url, JSON.stringify(payment))
	      .then(function(d) {console.log(d)});
	    
	}
	
</script>

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
