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
			<ul>
				<li>
					<label>Personnummer (xxxxxx-xxxx)</label>
					<input type="text">
				</li>
				<li class="getKlarna-container">
					<button class="getKlarna-btn" type="button" class="btn-small">Hämta adress</button>
				</li>
				<li>
					<label>Förnamn</label>
					<input name="" type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>Efternamn</label>
					<input type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>E-post</label>
					<input data-val="true" data-val-required="E-post måste anges" type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>Mobilnummer</label>
					<input type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>c/o</label>
					<input type="text" value="">
				</li>
				<li>
					<label>Gatuaddress</label>
					<input data-val="true" data-val-required="Gatuadress måste anges" type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>Postnummer</label>
					<input data-val="true" data-val-required="Postnummer  måste anges" type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>Stad</label>
					<input data-val="true" data-val-required="Stad måste anges"type="text" value="">
					<span>*</span>
				</li>
				<li>
					<label>Land</label>
					<select>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaijan</option>
						<option value="BH">Bahrain</option>
						<option value="BD">Bangladesh</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BZ">Belize</option>
						<option value="VE">Bolivarian Republic of Venezuela</option>
						<option value="BO">Bolivia</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BR">Brazil</option>
						<option value="BN">Brunei Darussalam</option>
						<option value="BG">Bulgaria</option>
						<option value="KH">Cambodia</option>
						<option value="CA">Canada</option>
						<option value="029">Caribbean</option>
						<option value="CL">Chile</option>
						<option value="CO">Colombia</option>
						<option value="CR">Costa Rica</option>
						<option value="HR">Croatia</option>
						<option value="CY">Cyprus</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="DO">Dominican Republic</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egypt</option>
						<option value="SV">El Salvador</option>
						<option value="EE">Estonia</option>
						<option value="ET">Ethiopia</option>
						<option value="FO">Faroe Islands</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="GE">Georgia</option>
						<option value="DE">Germany</option>
						<option value="GR">Greece</option>
						<option value="GL">Greenland</option>
						<option value="GT">Guatemala</option>
						<option value="HN">Honduras</option>
						<option value="HK">Hong Kong S.A.R.</option>
						<option value="HU">Hungary</option>
						<option value="IS">Iceland</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IR">Iran</option>
						<option value="IQ">Iraq</option>
						<option value="IE">Ireland</option>
						<option value="PK">Islamic Republic of Pakistan</option>
						<option value="IL">Israel</option>
						<option value="IT">Italy</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japan</option>
						<option value="JO">Jordan</option>
						<option value="KZ">Kazakhstan</option>
						<option value="KE">Kenya</option>
						<option value="KR">Korea</option>
						<option value="KW">Kuwait</option>
						<option value="KG">Kyrgyzstan</option>
						<option value="LA">Lao P.D.R.</option>
						<option value="LV">Latvia</option>
						<option value="LB">Lebanon</option>
						<option value="LY">Libya</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MO">Macao S.A.R.</option>
						<option value="MK">Macedonia (FYROM)</option>
						<option value="MY">Malaysia</option>
						<option value="MV">Maldives</option>
						<option value="MT">Malta</option>
						<option value="MN">Mongolia</option>
						<option value="ME">Montenegro</option>
						<option value="MA">Morocco</option>
						<option value="NP">Nepal</option>
						<option value="NL">Netherlands</option>
						<option value="NZ">New Zealand</option>
						<option value="NI">Nicaragua</option>
						<option value="NG">Nigeria</option>
						<option value="NO">Norway</option>
						<option value="OM">Oman</option>
						<option value="PA">Panama</option>
						<option value="PY">Paraguay</option>
						<option value="CN">People's Republic of China</option>
						<option value="PE">Peru</option>
						<option value="PH">Philippines</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="MC">Principality of Monaco</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="PH">Republic of the Philippines</option>
						<option value="RO">Romania</option>
						<option value="RU">Russia</option>
						<option value="RW">Rwanda</option>
						<option value="SA">Saudi Arabia</option>
						<option value="SN">Senegal</option>
						<option value="RS">Serbia</option>
						<option value="CS">Serbia and Montenegro (Former)</option>
						<option value="SG">Singapore</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="ZA">South Africa</option>
						<option value="ES">Spain</option>
						<option value="LK">Sri Lanka</option>
						<option selected="selected" value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="SY">Syria</option>
						<option value="TW">Taiwan</option>
						<option value="TJ">Tajikistan</option>
						<option value="TH">Thailand</option>
						<option value="TT">Trinidad and Tobago</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
						<option value="TM">Turkmenistan</option>
						<option value="UA">Ukraine</option>
						<option value="GB">United Kingdom</option>
						<option value="US">United States</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistan</option>
						<option value="VN">Vietnam</option>
						<option value="YE">Yemen</option>
						<option value="ZW">Zimbabwe</option>
					</select>
				</li>
				<li>
					<span>Fraktkostnad: </span>
					<span>39,00  </span>
					<span>kr </span>
				</li>
				<li>
					<input type="checkbox" value="true">
					<span><a href="">Leverera till annan adress</a></span>
				</li>
			</ul>
		</div>
		<div class="checkout-head">
			<h3>Kontrollera & Beställ</h3>
		</div>
		<div class="confirmation-container">
			<table class="summary-table">
				<thead class="summary-table-head" style="display:none;"><tr><th></th><th></th><th>Tax free</th></tr></thead>
				<tbody>
					<tr>
						<td>Delsumma: </td>
						<td><span class="products-total">0,00</span> kr</td>
						<td><span class="products-total-taxfree"></span></td>
					</tr>
					<tr>
						<td>
							<span class="payment-type-confirm">Betalsätt</span>
							<span class="selected-payment-method"> (Kreditkort)</span>
						</td>
						<td>
							<span class="payment-cost-confirm">0,00 kr</span>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							Fraktkostnad (<span class="delivery-method">Posten</span>)
						</td>
						<td>
							<span class="ship-cost-confirm">0,00</span> kr
						</td>
						<td></td>
					</tr>
					<tr class="part-pay-sum-container" style="display: none;">
						<td>Månadskostnad Klarna konto</td>
						<td><strong><span class="part-pay-sum"></span> kr / mån</strong></td>
					</tr>
					<tr class="cart-before-sale" style="display:none;">
						<td>Totalt innan reor:</td>
						<td><strong><span class="total-cost-before-sale"></span> kr</strong></td>
					</tr>
					<tr class="offer-confirm-wrap" style="display:none;">
						<td>Erbjudande:</td>
						<td>
							<span class="offer-confirm"></span>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>
							Totalt:
						</th>
						<th>
							<b><span class="total-cost-confirm">0,00</span> kr</b>
						</th>
						<th><span class="total-cost-confirm-taxfree"></span></th>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="message-from-user-container">
            <div class="editor-label">
                <label>Meddelande</label>
            </div>
            <div class="editor-field">
                <textarea cols="41" rows="5"></textarea>
            </div>
            <button class="btn-submit-order" type="submit">
            	<span>Beställ</span>
        	</button>
        </div>
	</div>
</div>
<?php
require 'footer.php';
?>