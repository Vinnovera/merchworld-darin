<?php
require 'header.php';
?>

<div class="wrapper">
	<div class="content">
		<h1>Kontakt</h1>
		<p>E-mail: <a href="mailto:info@merchworld.se">info@merchworld.se</a></p>
		<p>Telefon: 0521 – 48 00 20</p>
		<p>Telefontid: 9:00-11:30 , 12:30-15:30</p>

		<h2>Företagsadress</h2>
		<p>Vi finns i Vänersborg, Sverige. </p>
		<p>Merchworld AB<br/>
		Tenggrenstorpsvägen 15 A<br />
		462 56 Vänersborg</p>
		<p>Org nr 556679-8699</p>

		<h2>Kontaktpersoner</h2>
		<h4>Anna Foldemark Lanhage - Försäljning, Marknadsföring & Ekonomi</h4>
		<p>E-mail: <a href="mailto:anna@merchworld.se">anna@merchworld.se</a></p>

		<h4>Har du frågor om tryck?</h4>
		<p>E-mail: <a href="mailto:print@merchworld.se">print@merchworld.se</a></p>

		<h2>Kontaktformulär</h2>
		<form>
			<fieldset>
				<select name="subject">
					<option value="1" >Allmänna frågor</option>
				  	<option value="2">Frågor om beställningar</option>
				 	<option value="3">Returer & reklamering</option>
				  	<option value="4">Förfrågan / offert om tryckjobb</option>
				 	<option value="5">Kontakta webmaster (rapportera buggar etc)</option>
				</select><br />

				<label for="name">Namn: </label>
				<input id="name" type="text" name="Name">

				<label for="mail">E-post: </label>
				<input id="mail" type="text"  name="Mail">

				<label for="subject">Ärende: </label>
				<input id="subject" type="text"  name="Subject">

				<label for="textarea">Beskrivning: </label>
				<textarea id="textarea" name="text"></textarea>

				<button type="button">
					<p>Skicka</p>
				</button>
			</fieldset>
		</form>
	</div>
</div>

<?php
require 'footer.php';
?>