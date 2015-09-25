<?php
require 'header.php';
?>
<div class="shop">
	<div class="item-show">
		<div class="item-image">
			<a href="img/darin/dd1.jpg" class="fancybox-1" rel="group" alt="T-shirt med tryck" tabindex="40">
				<img src="img/darin/dd1.jpg">
			</a>
		</div>
		
		<div class="item-info">
			<!-- info om produkten -->
			<h2>DD1</h2>
			<p>T-shirt</p>
			<p>Screentryck på tshirt från Dedicated, 100% ekologisk bomull, GOTS- och Fairtrade certifierade.</p>
			<p>Modellerna är 181 resp. 168 cm långa och är fotade i Medium resp. Small.</p>
			
			<div class="options">
				<fieldset>
					<h3>Välj storlek</h3>
					<input type="radio" name="size" id="xs" value="xs" tabindex="45">
					<label for="xs">XS</label>

					<input type="radio" name="size" id="s" value="s" tabindex="50">
					<label for="s">S</label>

					<input type="radio" name="size" id="m" value="m" tabindex="55">
					<label for="m">M</label>

					<input type="radio" name="size" id="l" value="l" tabindex="60">
					<label for="l">L</label>

					<input type="radio" name="size" id="xl" value="xl" tabindex="65">
					<label for="xl">XL</label>
				</fieldset>

				<fieldset>
					<h3>Välj färg</h3>
					<select name="Antal" tabindex="70">
						<option value="" selected disabled="">Color</option>
					  	<option value="charcoal">Charcoal</option>
					</select>
				</fieldset>
			</div>

			<div class="options">
				<p class="price">249kr</p>
				<button type="button" tabindex="75">
					<p>Lägg i varukorgen</p>
				</button>
			</div>

			<hr>

			<div class="social-share">
				<div class="social-icon"></div>
				<div class="social-icon"></div>
				<div class="social-icon"></div>
				<div class="social-icon"></div>
			</div>
			
			<div class="back">
				<a href="index.php" tabindex="80">
					<p>Tillbaka till shoppen</p>
					<i class="fa fa-long-arrow-left"></i>
				</a>
			</div>
		
		</div>
	</div>
</div>

<?php
require 'shopping-cart.php';
?>

<?php
require 'footer.php';
?>