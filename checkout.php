<?php
require 'header.php';
?>
<div class="wrapper">
	<div class="content">
		<h1>Kassa</h1>
		<div class="checkout-head">
			<h3>Produkter</h3>
		</div>
		<div class="checkout-head">
			<h3>Betalsätt</h3>
		</div>
		<div class="payment-box">
			<div class="payment-box-creditcard">
				<ul>
					<li>
						<input checked="checked" name="paymethod" value="creditcard" type="radio">
					</li>
					<li>
						<img src="img/darin/creditcard.png" alt="creditcard">
					</li>
					<li class="payment-title">Kreditkort</li>
				</ul>
			</div>
			<div class="payment-box-invoice">
				<ul>
					<li>
						<input name="paymethod" value="invoice" type="radio">
					</li>
					<li>
						<img src="img/darin/invoice.png" alt="invoice">
					</li>
					<li class="payment-title">Klarna faktura - 19,00 kr</li>
					<li class="payment-desc">Villkor för faktura</li>
				</ul>
			</div>
			<div class="payment-box-paypal">
				<ul>
					<li>
						<input name="paymethod" value="paypal" type="radio">
					</li>
					<li>
						<img src="img/darin/paypal.png" alt="paypal">
					</li>
					<li class="payment-title">PayPal</li>
				</ul>
			</div>
		</div>
		<div class="checkout-head">
			<h3>Leveransadress</h3>
		</div>
		<div class="shipping-container">
			<ul class="pnr-container">
				<li>
					<label>Personnummer (xxxxxx-xxxx)</label>
				</li>
				<li>
					<input id="pnr" name="pnr" type="text">
				</li>
				<li id="getKlarna-container">
					<button id="getKlarna-btn" type="button" class="btn-small">Hämta adress</button>
				</li>
			</ul>
		</div>
		<div class="checkout-head">
			<h3>Kontrollera & Beställ</h3>
		</div>
	</div>
</div>
<?php
require 'footer.php';
?>