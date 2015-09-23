<?php
require 'header.php';
?>
<div class="shop">
	<div class="items">
		<ul class="items-list">
			<a href="single-item.php"><li class="item">
				<img src="img/darin/dd1.jpg" alt="T-shirt med tryck">
				<div class="item-info">
					<h2>DD1</h2>
					<p>T-shirt</p>
					<p>249:-</p>
				</div>
			</li>
			</a>

			<li class="item">
				<img src="img/darin/dd2.jpg" alt="T-shirt med tryck">
				<div class="item-info">
					<h2>DD2</h2>
					<p>T-shirt</p>
					<p>249:-</p>
				</div>
			</li>

			<li class="item">
				<img src="img/darin/dd3.jpg" alt="T-shirt med tryck">
				<div class="item-info">
					<h2>DD3</h2>
					<p>T-shirt</p>
					<p>249:-</p>
				</div>
			</li>

			<li class="item">
				<img src="img/darin/dd4.jpg" alt="Tygväska med tryck">
				<div class="item-info">
					<h2>DD4</h2>
					<p>Väska</p>
					<p>99:-</p>
				</div>
			</li>

			<li class="item">
				<img src="img/darin/darin-maiden.jpg" alt="T-shirt med tryck">
				<div class="item-info">
					<h2>Darin Maiden</h2>
					<p>T-shirt</p>
					<p>199:-</p>
				</div>
			</li>

			<li class="item">
				<img src="img/darin/exit.jpg" alt="Linne med tryck">
				<div class="item-info">
					<h2>Exit</h2>
					<p>Linne</p>
					<p>199:-</p>
				</div>
			</li>

			<li class="item">
				<img src="img/darin/cd.jpg" alt="CD-skiva">
				<div class="item-info">
					<h2>Exit</h2>
					<p>CD</p>
					<p>129:-</p>
				</div>
			</li>			
		</ul> 
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
		<div class="total">
			<span>Totalt:</span>
			<span>249:-</span>
		</div>

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

<?php
require 'footer.php';
?>