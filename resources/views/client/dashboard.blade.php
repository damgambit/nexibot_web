@extends('client.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
    	<div class="row">
		    <h1> Wallet </h1>

		    <hr>

		    <h3> BTC Balance:  2.43569201</h3>
		</div>

	    <div class="row">

	    	<div class='col'>

	    		<button type="submit" class="btn btn-success" onclick="deposit()">Deposit</button>
	    		<button type="submit" class="btn btn-info">Withdraw</button>

	    	</div>	    	

	    </div>

	    <br>
	    <hr>
	    <br>


	    <div class="row">

	    	<div class="col-lg-8">

		    	<h3> History </h3>

		    	<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
	               width="100%">
		            <thead>
			            <tr>
			                <th>@sortablelink('Action', __('Action'))</th>
			                <th>@sortablelink('Status',  __('Status'))</th>
			                <th>{{ __('Amount') }}</th>
			                <th>@sortablelink('Date', __('Date'))</th>
			        
			            </tr>
		            </thead>
		            <tbody>

		            	<tr>
		            		<td> Deposit </td>
		            		<td> Confirmed </td>
		            		<td> 0.00234100 </td>
		            		<td> 12-01-2017 </td>
		            	</tr>
		            	<tr>
		            		<td> Withdraw </td>
		            		<td> Confirmed </td>
		            		<td> 0.1564100 </td>
		            		<td> 11-01-2017 </td>
		            	</tr>
		            	<tr>
		            		<td> Deposit </td>
		            		<td> Confirmed </td>
		            		<td> 2.00234100 </td>
		            		<td> 10-01-2017 </td>
		            	</tr>
		            
		            </tbody>
		        </table>

		    </div>

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
