<?php
require 'header.php';
?>

<div class="wrapper">
	<div class="content" tabindex="40">
		<h1>Kontakt</h1>
		<p>E-mail: <a href="mailto:info@merchworld.se" tabindex="45">info@merchworld.se</a></p>
		<p tabindex="50">Telefon: 0521 – 48 00 20</p>
		<p>Telefontid: 9:00-11:30 , 12:30-15:30</p>

		<h2>Företagsadress</h2>
		<p>Vi finns i Vänersborg, Sverige. </p>
		<p tabindex="55">Merchworld AB<br/>
		Tenggrenstorpsvägen 15 A<br />
		462 56 Vänersborg</p>
		<p tabindex="56">Org nr 556679-8699</p>

		<h2>Kontaktpersoner</h2>
		<h4>Anna Foldemark Lanhage - Försäljning, Marknadsföring & Ekonomi</h4>
		<p>E-mail: <a href="mailto:anna@merchworld.se" tabindex="60">anna@merchworld.se</a></p>

		<h4>Har du frågor om tryck?</h4>
		<p>E-mail: <a href="mailto:print@merchworld.se" tabindex="65">print@merchworld.se</a></p>

		<h2>Kontaktformulär</h2>
		<form>
			<fieldset>
				<select name="subject" tabindex="70">
					<option value="1" >Allmänna frågor</option>
				  	<option value="2">Frågor om beställningar</option>
				 	<option value="3">Returer & reklamering</option>
				  	<option value="4">Förfrågan / offert om tryckjobb</option>
				 	<option value="5">Kontakta webmaster (rapportera buggar etc)</option>
				</select><br />

				<label for="name">Namn: </label>
				<input id="name" type="text" name="Name" tabindex="75">

				<label for="mail">E-post: </label>
				<input id="mail" type="text"  name="Mail" tabindex="80">

				<label for="subject">Ärende: </label>
				<input id="subject" type="text"  name="Subject" tabindex="85">

				<label for="textarea">Beskrivning: </label>
				<textarea id="textarea" name="text" tabindex="95"></textarea>

				<button type="button" tabindex="100">
					<p>Skicka</p>
				</button>
			</fieldset>
		</form>
	</div>
</div>

<?php
require 'footer.php';
?>