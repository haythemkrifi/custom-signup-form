<?php
$message = get_transient('signup_message');
if ($message) {
    $class = ($message['type'] === 'success') ? 'success-msg' : 'error-msg';
    echo '<div class="' . esc_attr($class) . '">' . esc_html($message['text']) . '</div>';
    delete_transient('signup_message');
}
?>

<form method="post" class="custom-signup-form">
    <h3>FREE shipping on your first order</h3>
    
    <label for="country">Country / Region</label>

<select name="country" id="country" required >

        <option value="Afghanistan" data-country-code="93">🇦🇫 Afghanistan</option>
        <option value="Albania" data-country-code="355">🇦🇱 Albania</option>
        <option value="Algeria" data-country-code="213">🇩🇿 Algeria</option>
        <option value="Andorra" data-country-code="376">🇦🇩 Andorra</option>
        <option value="Angola" data-country-code="244">🇦🇴 Angola</option>
        <option value="Antigua and Barbuda" data-country-code="1-268">🇦🇬 Antigua and Barbuda</option>
        <option value="Argentina" data-country-code="54">🇦🇷 Argentina</option>
        <option value="Armenia" data-country-code="374">🇦🇲 Armenia</option>
        <option value="Australia" data-country-code="61">🇦🇺 Australia</option>
        <option value="Austria" data-country-code="43">🇦🇹 Austria</option>
        <option value="Azerbaijan" data-country-code="994">🇦🇿 Azerbaijan</option>
        <option value="Bahamas" data-country-code="1-242">🇧🇸 Bahamas</option>
        <option value="Bahrain" data-country-code="973">🇧🇭 Bahrain</option>
        <option value="Bangladesh" data-country-code="880">🇧🇩 Bangladesh</option>
        <option value="Barbados" data-country-code="1-246">🇧🇧 Barbados</option>
        <option value="Belarus" data-country-code="375">🇧🇾 Belarus</option>
        <option value="Belgium" data-country-code="32">🇧🇪 Belgium</option>
        <option value="Belize" data-country-code="501">🇧🇿 Belize</option>
        <option value="Benin" data-country-code="229">🇧🇯 Benin</option>
        <option value="Bhutan" data-country-code="975">🇧🇹 Bhutan</option>
        <option value="Bolivia" data-country-code="591">🇧🇴 Bolivia</option>
        <option value="Bosnia and Herzegovina" data-country-code="387">🇧🇦 Bosnia and Herzegovina</option>
        <option value="Botswana" data-country-code="267">🇧🇼 Botswana</option>
        <option value="Brazil" data-country-code="55">🇧🇷 Brazil</option>
        <option value="Brunei Darussalam" data-country-code="673">🇧🇳 Brunei Darussalam</option>
        <option value="Bulgaria" data-country-code="359">🇧🇬 Bulgaria</option>
        <option value="Burkina Faso" data-country-code="226">🇧🇫 Burkina Faso</option>
        <option value="Burundi" data-country-code="257">🇧🇮 Burundi</option>
        <option value="Cabo Verde" data-country-code="238">🇨🇻 Cabo Verde</option>
        <option value="Cambodia" data-country-code="855">🇰🇭 Cambodia</option>
        <option value="Cameroon" data-country-code="237">🇨🇲 Cameroon</option>
        <option value="Canada" data-country-code="1">🇨🇦 Canada</option>
        <option value="Central African Republic" data-country-code="236">🇨🇫 Central African Republic</option>
        <option value="Chad" data-country-code="235">🇹🇩 Chad</option>
        <option value="Chile" data-country-code="56">🇨🇱 Chile</option>
        <option value="China" data-country-code="86">🇨🇳 China</option>
        <option value="Colombia" data-country-code="57">🇨🇴 Colombia</option>
        <option value="Comoros" data-country-code="269">🇰🇲 Comoros</option>
        <option value="Congo (Congo-Brazzaville)" data-country-code="242">🇨🇬 Congo (Congo-Brazzaville)</option>
        <option value="Congo (Democratic Republic)" data-country-code="243">🇨🇩 Congo (Democratic Republic)</option>
        <option value="Costa Rica" data-country-code="506">🇨🇷 Costa Rica</option>
        <option value="Croatia" data-country-code="385">🇭🇷 Croatia</option>
        <option value="Cuba" data-country-code="53">🇨🇺 Cuba</option>
        <option value="Cyprus" data-country-code="357">🇨🇾 Cyprus</option>
        <option value="Czech Republic" data-country-code="420">🇨🇿 Czech Republic</option>
        <option value="Denmark" data-country-code="45">🇩🇰 Denmark</option>
        <option value="Djibouti" data-country-code="253">🇩🇯 Djibouti</option>
        <option value="Dominica" data-country-code="1-767">🇩🇲 Dominica</option>
        <option value="Dominican Republic" data-country-code="1-809, 1-829, 1-849">🇩🇴 Dominican Republic</option>
        <option value="Ecuador" data-country-code="593">🇪🇨 Ecuador</option>
        <option value="Egypt" data-country-code="20">🇪🇬 Egypt</option>
        <option value="El Salvador" data-country-code="503">🇸🇻 El Salvador</option>
        <option value="Equatorial Guinea" data-country-code="240">🇬🇶 Equatorial Guinea</option>
        <option value="Eritrea" data-country-code="291">🇪🇷 Eritrea</option>
        <option value="Estonia" data-country-code="372">🇪🇪 Estonia</option>
        <option value="Eswatini" data-country-code="268">🇸🇿 Eswatini</option>
        <option value="Ethiopia" data-country-code="251">🇪🇹 Ethiopia</option>
        <option value="Fiji" data-country-code="679">🇫🇯 Fiji</option>
        <option value="Finland" data-country-code="358">🇫🇮 Finland</option>
        <option value="France" data-country-code="33">🇫🇷 France</option>
        <option value="Gabon" data-country-code="241">🇬🇦 Gabon</option>
        <option value="Gambia" data-country-code="220">🇬🇲 Gambia</option>
        <option value="Georgia" data-country-code="995">🇬🇪 Georgia</option>
        <option value="Germany" data-country-code="49">🇩🇪 Germany</option>
        <option value="Ghana" data-country-code="233">🇬🇭 Ghana</option>
        <option value="Greece" data-country-code="30">🇬🇷 Greece</option>
        <option value="Grenada" data-country-code="1-473">🇬🇩 Grenada</option>
        <option value="Guatemala" data-country-code="502">🇬🇹 Guatemala</option>
        <option value="Guinea" data-country-code="224">🇬🇳 Guinea</option>
        <option value="Guinea-Bissau" data-country-code="245">🇬🇼 Guinea-Bissau</option>
        <option value="Guyana" data-country-code="592">🇬🇾 Guyana</option>
        <option value="Haiti" data-country-code="509">🇭🇹 Haiti</option>
        <option value="Honduras" data-country-code="504">🇭🇳 Honduras</option>
        <option value="Hungary" data-country-code="36">🇭🇺 Hungary</option>
        <option value="Iceland" data-country-code="354">🇮🇸 Iceland</option>
        <option value="India" data-country-code="91">🇮🇳 India</option>
        <option value="Indonesia" data-country-code="62">🇮🇩 Indonesia</option>
        <option value="Iran" data-country-code="98">🇮🇷 Iran</option>
        <option value="Iraq" data-country-code="964">🇮🇶 Iraq</option>
        <option value="Ireland" data-country-code="353">🇮🇪 Ireland</option>
        <option value="Italy" data-country-code="39">🇮🇹 Italy</option>
        <option value="Jamaica" data-country-code="1-876">🇯🇲 Jamaica</option>
        <option value="Japan" data-country-code="81">🇯🇵 Japan</option>
        <option value="Jordan" data-country-code="962">🇯🇴 Jordan</option>
        <option value="Kazakhstan" data-country-code="7">🇰🇿 Kazakhstan</option>
        <option value="Kenya" data-country-code="254">🇰🇪 Kenya</option>
        <option value="Kiribati" data-country-code="686">🇰🇮 Kiribati</option>
        <option value="Korea (North)" data-country-code="850">🇰🇵 Korea (North)</option>
        <option value="Korea (South)" data-country-code="82">🇰🇷 Korea (South)</option>
        <option value="Kuwait" data-country-code="965">🇰🇼 Kuwait</option>
        <option value="Kyrgyzstan" data-country-code="996">🇰🇬 Kyrgyzstan</option>
        <option value="Laos" data-country-code="856">🇱🇦 Laos</option>
        <option value="Latvia" data-country-code="371">🇱🇻 Latvia</option>
        <option value="Lebanon" data-country-code="961">🇱🇧 Lebanon</option>
        <option value="Lesotho" data-country-code="266">🇱🇸 Lesotho</option>
        <option value="Liberia" data-country-code="231">🇱🇷 Liberia</option>
        <option value="Libya" data-country-code="218">🇱🇾 Libya</option>
        <option value="Liechtenstein" data-country-code="423">🇱🇮 Liechtenstein</option>
        <option value="Lithuania" data-country-code="370">🇱🇹 Lithuania</option>
        <option value="Luxembourg" data-country-code="352">🇱🇺 Luxembourg</option>
        <option value="Madagascar" data-country-code="261">🇲🇬 Madagascar</option>
        <option value="Malawi" data-country-code="265">🇲🇼 Malawi</option>
        <option value="Malaysia" data-country-code="60">🇲🇾 Malaysia</option>
        <option value="Maldives" data-country-code="960">🇲🇻 Maldives</option>
        <option value="Mali" data-country-code="223">🇲🇱 Mali</option>
        <option value="Malta" data-country-code="356">🇲🇹 Malta</option>
        <option value="Marshall Islands" data-country-code="692">🇲🇭 Marshall Islands</option>
        <option value="Mauritania" data-country-code="222">🇲🇷 Mauritania</option>
        <option value="Mauritius" data-country-code="230">🇲🇺 Mauritius</option>
        <option value="Mexico" data-country-code="52">🇲🇽 Mexico</option>
        <option value="Micronesia" data-country-code="691">🇫🇲 Micronesia</option>
        <option value="Moldova" data-country-code="373">🇲🇩 Moldova</option>
        <option value="Monaco" data-country-code="377">🇲🇨 Monaco</option>
        <option value="Mongolia" data-country-code="976">🇲🇳 Mongolia</option>
        <option value="Montenegro" data-country-code="382">🇲🇪 Montenegro</option>
        <option value="Morocco" data-country-code="212">🇲🇦 Morocco</option>
        <option value="Mozambique" data-country-code="258">🇲🇿 Mozambique</option>
        <option value="Myanmar" data-country-code="95">🇲🇲 Myanmar</option>
        <option value="Namibia" data-country-code="264">🇳🇦 Namibia</option>
        <option value="Nauru" data-country-code="674">🇳🇷 Nauru</option>
        <option value="Nepal" data-country-code="977">🇳🇵 Nepal</option>
        <option value="Netherlands" data-country-code="31">🇳🇱 Netherlands</option>
        <option value="New Zealand" data-country-code="64">🇳🇿 New Zealand</option>
        <option value="Nicaragua" data-country-code="505">🇳🇮 Nicaragua</option>
        <option value="Niger" data-country-code="227">🇳🇪 Niger</option>
        <option value="Nigeria" data-country-code="234">🇳🇬 Nigeria</option>
        <option value="North Macedonia" data-country-code="389">🇲🇰 North Macedonia</option>
        <option value="Norway" data-country-code="47">🇳🇴 Norway</option>
        <option value="Oman" data-country-code="968">🇴🇲 Oman</option>
        <option value="Pakistan" data-country-code="92">🇵🇰 Pakistan</option>
        <option value="Palau" data-country-code="680">🇵🇼 Palau</option>
        <option value="Panama" data-country-code="507">🇵🇦 Panama</option>
        <option value="Papua New Guinea" data-country-code="675">🇵🇬 Papua New Guinea</option>
        <option value="Paraguay" data-country-code="595">🇵🇾 Paraguay</option>
        <option value="Peru" data-country-code="51">🇵🇪 Peru</option>
        <option value="Philippines" data-country-code="63">🇵🇭 Philippines</option>
        <option value="Poland" data-country-code="48">🇵🇱 Poland</option>
        <option value="Portugal" data-country-code="351">🇵🇹 Portugal</option>
        <option value="Qatar" data-country-code="974">🇶🇦 Qatar</option>
        <option value="Romania" data-country-code="40">🇷🇴 Romania</option>
        <option value="Russia" data-country-code="7">🇷🇺 Russia</option>
        <option value="Rwanda" data-country-code="250">🇷🇼 Rwanda</option>
        <option value="Saint Kitts and Nevis" data-country-code="1-869">🇰🇳 Saint Kitts and Nevis</option>
        <option value="Saint Lucia" data-country-code="1-758">🇱🇨 Saint Lucia</option>
        <option value="Saint Vincent and the Grenadines" data-country-code="1-784">🇻🇨 Saint Vincent and the Grenadines</option>
        <option value="Samoa" data-country-code="685">🇼🇸 Samoa</option>
        <option value="San Marino" data-country-code="378">🇸🇲 San Marino</option>
        <option value="Sao Tome and Principe" data-country-code="239">🇸🇹 Sao Tome and Principe</option>
        <option value="Saudi Arabia" data-country-code="966">🇸🇦 Saudi Arabia</option>
        <option value="Senegal" data-country-code="221">🇸🇳 Senegal</option>
        <option value="Serbia" data-country-code="381">🇷🇸 Serbia</option>
        <option value="Seychelles" data-country-code="248">🇸🇨 Seychelles</option>
        <option value="Sierra Leone" data-country-code="232">🇸🇱 Sierra Leone</option>
        <option value="Singapore" data-country-code="65">🇸🇬 Singapore</option>
        <option value="Slovakia" data-country-code="421">🇸🇰 Slovakia</option>
        <option value="Slovenia" data-country-code="386">🇸🇮 Slovenia</option>
        <option value="Solomon Islands" data-country-code="677">🇸🇧 Solomon Islands</option>
        <option value="Somalia" data-country-code="252">🇸🇴 Somalia</option>
        <option value="South Africa" data-country-code="27">🇿🇦 South Africa</option>
        <option value="South Sudan" data-country-code="211">🇸🇸 South Sudan</option>
        <option value="Spain" data-country-code="34">🇪🇸 Spain</option>
        <option value="Sri Lanka" data-country-code="94">🇱🇰 Sri Lanka</option>
        <option value="Sudan" data-country-code="249">🇸🇩 Sudan</option>
        <option value="Suriname" data-country-code="597">🇸🇷 Suriname</option>
        <option value="Sweden" data-country-code="46">🇸🇪 Sweden</option>
        <option value="Switzerland" data-country-code="41">🇨🇭 Switzerland</option>
        <option value="Syria" data-country-code="963">🇸🇾 Syria</option>
        <option value="Taiwan" data-country-code="886">🇹🇼 Taiwan</option>
        <option value="Tajikistan" data-country-code="992">🇹🇯 Tajikistan</option>
        <option value="Tanzania" data-country-code="255">🇹🇿 Tanzania</option>
        <option value="Thailand" data-country-code="66">🇹🇭 Thailand</option>
        <option value="Timor-Leste" data-country-code="670">🇹🇱 Timor-Leste</option>
        <option value="Togo" data-country-code="228">🇹🇬 Togo</option>
        <option value="Tonga" data-country-code="676">🇹🇴 Tonga</option>
        <option value="Trinidad and Tobago" data-country-code="1-868">🇹🇹 Trinidad and Tobago</option>
        <option value="Tunisia" data-country-code="216">🇹🇳 Tunisia</option>
        <option value="Turkey" data-country-code="90">🇹🇷 Turkey</option>
        <option value="Turkmenistan" data-country-code="993">🇹🇲 Turkmenistan</option>
        <option value="Tuvalu" data-country-code="688">🇹🇻 Tuvalu</option>
        <option value="Uganda" data-country-code="256">🇺🇬 Uganda</option>
        <option value="Ukraine" data-country-code="380">🇺🇦 Ukraine</option>
        <option value="United Arab Emirates" data-country-code="971">🇦🇪 United Arab Emirates</option>
        <option value="United Kingdom" data-country-code="44">🇬🇧 United Kingdom</option>
        <option value="United States" data-country-code="1">🇺🇸 United States</option>
        <option value="Uruguay" data-country-code="598">🇺🇾 Uruguay</option>
        <option value="Uzbekistan" data-country-code="998">🇺🇿 Uzbekistan</option>
        <option value="Vanuatu" data-country-code="678">🇻🇺 Vanuatu</option>
        <option value="Vatican City" data-country-code="379">🇻🇦 Vatican City</option>
        <option value="Venezuela" data-country-code="58">🇻🇪 Venezuela</option>
        <option value="Vietnam" data-country-code="84">🇻🇳 Vietnam</option>
        <option value="Yemen" data-country-code="967">🇾🇪 Yemen</option>

</select>

    <label>Please select trade role </label>
    <div class="roles">
        <input type="radio" id="buyer" name="role" value="buyer" required>
        <label for="buyer">Buyer</label>
    
        <input type="radio" id="seller" name="role" value="seller">
        <label for="seller">Seller</label>

        <input type="radio" id="both" name="role" value="both">
        <label for="both">Both</label>
    </div>

    <label>Email </label>
    <input type="email" name="email" required>

    <label>Password </label>
    <input type="password" name="password" required>

    <label>Confirm Password </label>
    <input type="password" name="confirm_password" required>

    <div id="company-name-container">
        <label for="company-name">Company Name:</label>
        <input type="text" id="company-name" name="company-name" placeholder="Enter Company Name">
     </div>
    <label>Full Name </label>
    <div class="fullname">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
    </div>

    <label>Phone </label>
    <div class="phone">
    <input type="text" name="tel_country" id="tel_country" placeholder="code" required>
    <input type="text" name="tel_area" placeholder="Area" required>
    <input type="text" name="tel_number" placeholder="Phone number" required>
</div>

    
        <div class="agree">
        <input type="checkbox" name="agree" id="agree" required>
        <label for="agree"> I agree to the <a href="https://commercin.com/en/terms-of-use/">Terms</a> and <a href="https://commercin.com/en/privacy-policy-2/">Privacy Policy</a>.</label>
    </div>
       
    <button type="submit" name="submit_signup">Create an account</button>
</form>

<script>
   

// Listen for changes on radio buttons
document.querySelectorAll('input[name="role"]').forEach(function(radio) {
  radio.addEventListener('change', function() {
    var companyNameContainer = document.getElementById('company-name-container');
    
    // Hide company name input if role is 'buyer'
    if (this.value === 'buyer') {
      companyNameContainer.style.display = 'none';
    } else {
      companyNameContainer.style.display = 'block';
    }
  });
});
</script>

<script>
    // Replace YOUR_ACCESS_KEY with your actual API key from ipstack
    fetch('http://api.ipstack.com/check?access_key=YOUR_ACCESS_KEY')
    .then(response => response.json())
    .then(data => {
        const userCountry = data.country_name; // Country detected from user's IP
        const countrySelect = document.getElementById('country');
        
        // Loop through all options and set the default country
        for (let i = 0; i < countrySelect.options.length; i++) {
            if (countrySelect.options[i].text.includes(userCountry)) {
                countrySelect.selectedIndex = i; // Set the country as the selected option
                break;
            }
        }
    })
    .catch(error => {
        console.log('Error fetching IP geolocation:', error);
    });
</script>
