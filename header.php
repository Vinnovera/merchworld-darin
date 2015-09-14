<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artist - Merchworld</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="header">
		<div class="logo">
			<a href="/">Merchworld</a>
		</div>
		<div class="nav-menu-left">
			<ul>
				<li>Produkter</li>
				<li>Artister</li>
			</ul>
		</div>
		<div class="nav-menu-right">
			<ul>
				<div class="languages">
					<a class="selected-lang" id="sv" href="http://merchworld.se/?stay=1">Svenska</a>
					<a id="en" href="http://merchworld.eu/?stay=1">English</a>
				</div>
				<div class="search-container">
					<form action="/products/search" class="form-search" id="search-form" method="get">
						<input type="search" name="q" id="" class="" placeholder="Sök" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
					</form>
				</div>
				<li id="logoff"><a href="/login">Logga in</a></li>
				<li id="cart"><a href="#" class="no-items" onclick="javascript:showCart();">Varor <span id="items-in-cart"><em>0</em></span></a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>