<div class="container">
	
</div>

@extends('client.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
    
    	<div class="col-lg-6 col-lg-offset-1">


			<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{$message}}" title="Link to Google.com" />


		</div>
	</div>
    
    
@endsection


@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
