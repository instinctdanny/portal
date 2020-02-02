<!DOCTYPE html>
<html>
<head>
	<title>card payment</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="card-js/card-js.min.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="card-js/card-js.min.js"></script>
	<style type="text/css">
		body{
			background:#f3f3f3;
			padding: 0px;
			margin:0px;
			outline:none;
			box-sizing: border-box;
		}
		.main-case{
			box-sizing: border-box;
			border:1px solid #d7d7d7;
			box-shadow: 2px 2px 2px 1px #d9d9d9;
			margin-top:12%;
			border-radius: 4px;
		}
		.amount{
			display: inline-block;
			background: #267fd6;
			padding:10px;
			float: right;
			color:#f7f7f7;
			font-size:16px;
			font-weight: 400px;
			border-top-left-radius:25px;
			border-bottom-right-radius: 25px;
			box-sizing: border-box;
			border-bottom:3px solid #515151;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4 main-case">

				<div class="row" style="padding: 5px;" >
					<p class="amount text-right">&#8358 <?php echo number_format(5000000000)  ?></p>
					<br>

					<div class="card-js form-group">
						<div class="input-field col s12">
							<input id="card_name" class="name form-control validate"
							name="my-custom-form-field__card-name"
							placeholder="Enter the name on your card"
							autocomplete="off"
							required>
							<label for="card_name">Card Name</label>
						</div>
						<div class="input-field col s12">
							<input placeholder="card_number" id="card_number" name="my-custom-form-field__card-number" type="" class="card-number form-control validate" required autocomplete="off">
							<label for="card_number">Card Number</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="pin" id="pin" name="pin" type="text" class="validate" required>
							<label for="pin"> card pin</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="cvv" id="cvv" name="cvv" type="text" class="validate" required>
							<label for="cvv">CVV</label>
						</div>
						<div class="input-field col s12">
							<input placeholder="exp_date" id="exp_date" name="exp_date" type="text" class="validate" required>
							<label for="exp_date">expire Date</label>
							<!-- Card expiry - Month (hidden) -->
							<input class="expiry-month" name="my-custom-form-field__card-expiry-month">

							<!-- Card expiry - Year (hidden) -->
							<input class="expiry-year" name="my-custom-form-field__card-expiry-year">
						</div>
					</div>
				<p class="text-center"><button class="btn btn-success save" type="submit" name="save">MAKE PAYMENT</button></p>			
				</div>
			</div>
		</div>
	</div>
</body>
</html>

