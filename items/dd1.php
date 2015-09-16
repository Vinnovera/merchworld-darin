<a href="img/darin/dd1.jpg" data-lightbox="dd1">
	<img src="img/darin/dd1.jpg">
</a>
<div class="item-info">
	<h2>DD1</h2>
	<p>T-shirt</p>
	<p>Screentryck på tshirt från Dedicated, 100% ekologisk bomull, GOTS- och Fairtrade certifierade.</p>
	<p>Modellerna är 181 resp. 168 cm långa och är fotade i Medium resp. Small.</p>
	
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
		  	<option value="charcoal">charcoal</option>
		</select>
	</fieldset>
	<div class="clearfix"></div>

	<p class="price">249:-</p>
	<div class="button">
		<p>Lägg i varukorgen</p>
	</div>
	<div class="clearfix"></div>

</div>
<i class="fa fa-times"></i>	
<script type="text/javascript">
	//När man klickar på x töms 'item-show' och shoppen visas igen
	$('.fa').on('click',function() {
		$('.item-show').empty();
		$('.item-show').hide();
		$('.items-list').show();
	});	
</script>