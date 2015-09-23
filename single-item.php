<?php
require 'header.php';
?>
<div class="shop">
	<div class="item-show">
		<div class="item-image">
			<a href="img/darin/dd1.jpg" class="fancybox" rel="group" alt="T-shirt med tryck">
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
					<input type="radio" name="size" id="xs" value="xs" >
					<label for="xs">XS</label>

					<input type="radio" name="size" id="s" value="s" >
					<label for="s">S</label>

					<input type="radio" name="size" id="m" value="m" >
					<label for="m">M</label>

					<input type="radio" name="size" id="l" value="l" >
					<label for="l">L</label>

					<input type="radio" name="size" id="xl" value="xl" >
					<label for="xl">XL</label>
				</fieldset>

				<fieldset>
					<h3>Välj färg</h3>
					<select name="Antal">
						<option value="" selected disabled="">Color</option>
					  	<option value="charcoal">Charcoal</option>
					</select>
				</fieldset>
			</div>

			<div class="options">
				<p class="price">249:-</p>
				<button type="button">
					<p>Lägg i varukorgen</p>
				</button>
			</div>
			
			<div class="back">
				<a href="index.php">
					<p>Tillbaka till shoppen</p>
					<i class="fa fa-long-arrow-left"></i>
					
				</a>
			</div>
		
		</div>

		<div id="shopping-cart">
		<h2>Varor</h2>

		<ul>
			<li class="shopping-cart-item">
				<h3>DD1 T-shirt</h3>
				<img src="img/darin/dd1.jpg" alt="T-shirt med tryck">
				<ul>
					<li>
						<span>Antal:</span>
						<span>1</span>
					</li>

					<li>
						<span>Färg:</span>
						<span>Charcol</span>
					</li>

					<li>
						<span>Storlek:</span>
						<span>L</span>
					</li>

					<li>
						<span>Pris:</span>
						<span>249:-</span>
					</li>

					<li>
						<span>Ta Bort<i class="fa fa-trash-o"></i></span>
					</li>
				</ul>
			</li>
		</ul>
	
		<a href="index.php">
			<button type="button">
				<p>Fortsätt Handla</p>
			</button>
		</a>

		<a href="checkout.php">
			<button type="button">
				<p>Gå till Kassan</p>
			</button>
		</a>	
	</div>
	</div>
</div>

<?php
require 'footer.php';
?>