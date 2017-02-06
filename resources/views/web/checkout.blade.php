<!DOCTYPE html>
<html>
<head>
	<title>thanh toan</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			@if(Session::has('success'))
			<div class="col-sm-6">
				<div class="alert alert-success">{{ Session::get('success') }}</div>
			</div>
			@endif
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3 align="center">Your information</h3>
				<form action="{{ route('checkout') }}" method="post" id="check_out_form">
					{{ csrf_field() }}
					<span class="payment-errors"></span>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-group" required="required">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" name="address" class="form-group" required="required">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-name">Cart Holder Name</label>
								<input type="text" name="card-name" id="card-name" class="form-group" required="required">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-number">Credit Card Number</label>
								<input type="text" data-stripe="number" id="card-number" class="form-group" required="required">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-month">Expiration Month</label>
										<input type="text"  data-stripe="exp_month" class="form-group" required="required">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-year">Expiration Year</label>
										<input type="text"  data-stripe="exp_year" class="form-group" required="required">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-cvc">CVC</label>
								<input type="text" name="card-cvc" data-stripe="cvc" class="form-group" required="required">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success">Buy Now</button>
				</form>
			</div>
			<div class="col-md-6">
				<h3 align="center">Your Order</h3>
				<table class="table table-striped">
					<tr>
						<td>Total</td>
						<td>{{$subtotal}}</td>
					</tr>
					<tr>
						<td>Total Quantity</td>
						<td>{{$count}}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="{{asset('js/checkout.js')}}"></script>
</body>
</html>