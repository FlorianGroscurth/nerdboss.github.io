<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kasse | Nerd Boss</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Stylesheets/checkoutStyle.css">
    </head>
    <body>
    <div id="main-wrap1">
            <div id="main-wrap2">
                <?php
                include "isLoggedIn.php";
                include "header.php"; 
                ?>
                <section id="head">
                    <div>
                        <h1>Kasse</h1>
                    </div>
                </section>
                <section id="invoice-details">
                    <form action="" method="post">
                        <h3>Rechnungsdetails</h3>
                        <div id="form-div">
                            <input type="text" name="forename" id="forename" placeholder="Vorname" required>
                            <input type="text" name="lastname" id="lastname" placeholder="Nachname" required>
                            <input type="text" name="street" id="street" placeholder="Straße" required>
                            <input type="number" name="plz" id="plz" placeholder="Postleihzahl" required>
                            <input type="text" name="city" id="city" placeholder="Stadt" required>
                            <select name="countryChoice" id="countryChoice">
                                <option class="country-options" value="none">Auswählen</option>
                                <option class="country-options" value="AF">Afghanistan</option>
                                <option class="country-options" value="EG">Ägypten</option>
                                <option class="country-options" value="AX">Aland</option>
                                <option class="country-options" value="AL">Albanien</option>
                                <option class="country-options" value="DZ">Algerien</option>
                                <option class="country-options" value="AS">Amerikanisch-Samoa</option>
                                <option class="country-options" value="VI">Amerikanische Jungferninseln</option>
                                <option class="country-options" value="AD">Andorra</option>
                                <option class="country-options" value="AO">Angola</option>
                                <option class="country-options" value="AI">Anguilla</option>
                                <option class="country-options" value="AQ">Antarktis</option>
                                <option class="country-options" value="AG">Antigua und Barbuda</option>
                                <option class="country-options" value="GQ">Äquatorialguinea</option>
                                <option class="country-options" value="AR">Argentinien</option>
                                <option class="country-options" value="AM">Armenien</option>
                                <option class="country-options" value="AW">Aruba</option>
                                <option class="country-options" value="AC">Ascension</option>
                                <option class="country-options" value="AZ">Aserbaidschan</option>
                                <option class="country-options" value="ET">Äthiopien</option>
                                <option class="country-options" value="AU">Australien</option>
                                <option class="country-options" value="BS">Bahamas</option>
                                <option class="country-options" value="BH">Bahrain</option>
                                <option class="country-options" value="BD">Bangladesch</option>
                                <option class="country-options" value="BB">Barbados</option>
                                <option class="country-options" value="BE">Belgien</option>
                                <option class="country-options" value="BZ">Belize</option>
                                <option class="country-options" value="BJ">Benin</option>
                                <option class="country-options" value="BM">Bermuda</option>
                                <option class="country-options" value="BT">Bhutan</option>
                                <option class="country-options" value="BO">Bolivien</option>
                                <option class="country-options" value="BA">Bosnien und Herzegowina</option>
                                <option class="country-options" value="BW">Botswana</option>
                                <option class="country-options" value="BV">Bouvetinsel</option>
                                <option class="country-options" value="BR">Brasilien</option>
                                <option class="country-options" value="BN">Brunei</option>
                                <option class="country-options" value="BG">Bulgarien</option>
                                <option class="country-options" value="BF">Burkina Faso</option>
                                <option class="country-options" value="BI">Burundi</option>
                                <option class="country-options" value="CL">Chile</option>
                                <option class="country-options" value="CN">China</option>
                                <option class="country-options" value="CK">Cookinseln</option>
                                <option class="country-options" value="CR">Costa Rica</option>
                                <option class="country-options" value="CI">Cote d'Ivoire</option>
                                <option class="country-options" value="DK">Dänemark</option>
                                <option class="country-options" value="DE">Deutschland</option>
                                <option class="country-options" value="DG">Diego Garcia</option>
                                <option class="country-options" value="DM">Dominica</option>
                                <option class="country-options" value="DO">Dominikanische Republik</option>
                                <option class="country-options" value="DJ">Dschibuti</option>
                                <option class="country-options" value="EC">Ecuador</option>
                                <option class="country-options" value="SV">El Salvador</option>
                                <option class="country-options" value="ER">Eritrea</option>
                                <option class="country-options" value="EE">Estland</option>
                                <option class="country-options" value="EU">Europäische Union</option>
                                <option class="country-options" value="FK">Falklandinseln</option>
                                <option class="country-options" value="FO">Färöer</option>
                                <option class="country-options" value="FJ">Fidschi</option>
                                <option class="country-options" value="FI">Finnland</option>
                                <option class="country-options" value="FR">Frankreich</option>
                                <option class="country-options" value="GF">Französisch-Guayana</option>
                                <option class="country-options" value="PF">Französisch-Polynesien</option>
                                <option class="country-options" value="GA">Gabun</option>
                                <option class="country-options" value="GM">Gambia</option>
                                <option class="country-options" value="GE">Georgien</option>
                                <option class="country-options" value="GH">Ghana</option>
                                <option class="country-options" value="GI">Gibraltar</option>
                                <option class="country-options" value="GD">Grenada</option>
                                <option class="country-options" value="GR">Griechenland</option>
                                <option class="country-options" value="GL">Grönland</option>
                                <option class="country-options" value="GB">Großbritannien</option>
                                <option class="country-options" value="CP">Guadeloupe</option>
                                <option class="country-options" value="GU">Guam</option>
                                <option class="country-options" value="GT">Guatemala</option>
                                <option class="country-options" value="GG">Guernsey</option>
                                <option class="country-options" value="GN">Guinea</option>
                                <option class="country-options" value="GW">Guinea-Bissau</option>
                                <option class="country-options" value="GY">Guyana</option>
                                <option class="country-options" value="HT">Haiti</option>
                                <option class="country-options" value="HM">Heard und McDonaldinseln</option>
                                <option class="country-options" value="HN">Honduras</option>
                                <option class="country-options" value="HK">Hongkong</option>
                                <option class="country-options" value="IN">Indien</option>
                                <option class="country-options" value="ID">Indonesien</option>
                                <option class="country-options" value="IQ">Irak</option>
                                <option class="country-options" value="IR">Iran</option>
                                <option class="country-options" value="IE">Irland</option>
                                <option class="country-options" value="IS">Island</option>
                                <option class="country-options" value="IL">Israel</option>
                                <option class="country-options" value="IT">Italien</option>
                                <option class="country-options" value="JM">Jamaika</option>
                                <option class="country-options" value="JP">Japan</option>
                                <option class="country-options" value="YE">Jemen</option>
                                <option class="country-options" value="JE">Jersey</option>
                                <option class="country-options" value="JO">Jordanien</option>
                                <option class="country-options" value="KY">Kaimaninseln</option>
                                <option class="country-options" value="KH">Kambodscha</option>
                                <option class="country-options" value="CM">Kamerun</option>
                                <option class="country-options" value="CA">Kanada</option>
                                <option class="country-options" value="IC">Kanarische Inseln</option>
                                <option class="country-options" value="CV">Kap Verde</option>
                                <option class="country-options" value="KZ">Kasachstan</option>
                                <option class="country-options" value="QA">Katar</option>
                                <option class="country-options" value="KE">Kenia</option>
                                <option class="country-options" value="KG">Kirgisistan</option>
                                <option class="country-options" value="KI">Kiribati</option>
                                <option class="country-options" value="CC">Kokosinseln</option>
                                <option class="country-options" value="CO">Kolumbien</option>
                                <option class="country-options" value="KM">Komoren</option>
                                <option class="country-options" value="CG">Kongo</option>
                                <option class="country-options" value="HR">Kroatien</option>
                                <option class="country-options" value="CU">Kuba</option>
                                <option class="country-options" value="KW">Kuwait</option>
                                <option class="country-options" value="LA">Laos</option>
                                <option class="country-options" value="LS">Lesotho</option>
                                <option class="country-options" value="LV">Lettland</option>
                                <option class="country-options" value="LB">Libanon</option>
                                <option class="country-options" value="LR">Liberia</option>
                                <option class="country-options" value="LY">Libyen</option>
                                <option class="country-options" value="LI">Liechtenstein</option>
                                <option class="country-options" value="LT">Litauen</option>
                                <option class="country-options" value="LU">Luxemburg</option>
                                <option class="country-options" value="MO">Macao</option>
                                <option class="country-options" value="MG">Madagaskar</option>
                                <option class="country-options" value="MW">Malawi</option>
                                <option class="country-options" value="MY">Malaysia</option>
                                <option class="country-options" value="MV">Malediven</option>
                                <option class="country-options" value="ML">Mali</option>
                                <option class="country-options" value="MT">Malta</option>
                                <option class="country-options" value="MA">Marokko</option>
                                <option class="country-options" value="MH">Marshallinseln</option>
                                <option class="country-options" value="MQ">Martinique</option>
                                <option class="country-options" value="MR">Mauretanien</option>
                                <option class="country-options" value="MU">Mauritius</option>
                                <option class="country-options" value="YT">Mayotte</option>
                                <option class="country-options" value="MK">Mazedonien</option>
                                <option class="country-options" value="MX">Mexiko</option>
                                <option class="country-options" value="FM">Mikronesien</option>
                                <option class="country-options" value="MD">Moldawien</option>
                                <option class="country-options" value="MC">Monaco</option>
                                <option class="country-options" value="MN">Mongolei</option>
                                <option class="country-options" value="MS">Montserrat</option>
                                <option class="country-options" value="MZ">Mosambik</option>
                                <option class="country-options" value="MM">Myanmar</option>
                                <option class="country-options" value="NA">Namibia</option>
                                <option class="country-options" value="NR">Nauru</option>
                                <option class="country-options" value="NP">Nepal</option>
                                <option class="country-options" value="NC">Neukaledonien</option>
                                <option class="country-options" value="NZ">Neuseeland</option>
                                <option class="country-options" value="NT">Neutrale Zone</option>
                                <option class="country-options" value="NI">Nicaragua</option>
                                <option class="country-options" value="NL">Niederlande</option>
                                <option class="country-options" value="AN">Niederländische Antillen</option>
                                <option class="country-options" value="NE">Niger</option>
                                <option class="country-options" value="NG">Nigeria</option>
                                <option class="country-options" value="NU">Niue</option>
                                <option class="country-options" value="KP">Nordkorea</option>
                                <option class="country-options" value="MP">Nördliche Marianen</option>
                                <option class="country-options" value="NF">Norfolkinsel</option>
                                <option class="country-options" value="NO">Norwegen</option>
                                <option class="country-options" value="OM">Oman</option>
                                <option class="country-options" value="AT">Österreich</option>
                                <option class="country-options" value="PK">Pakistan</option>
                                <option class="country-options" value="PS">Palästina</option>
                                <option class="country-options" value="PW">Palau</option>
                                <option class="country-options" value="PA">Panama</option>
                                <option class="country-options" value="PG">Papua-Neuguinea</option>
                                <option class="country-options" value="PY">Paraguay</option>
                                <option class="country-options" value="PE">Peru</option>
                                <option class="country-options" value="PH">Philippinen</option>
                                <option class="country-options" value="PN">Pitcairninseln</option>
                                <option class="country-options" value="PL">Polen</option>
                                <option class="country-options" value="PT">Portugal</option>
                                <option class="country-options" value="PR">Puerto Rico</option>
                                <option class="country-options" value="RE">Réunion</option>
                                <option class="country-options" value="RW">Ruanda</option>
                                <option class="country-options" value="RO">Rumänien</option>
                                <option class="country-options" value="RU">Russische Föderation</option>
                                <option class="country-options" value="SB">Salomonen</option>
                                <option class="country-options" value="ZM">Sambia</option>
                                <option class="country-options" value="WS">Samoa</option>
                                <option class="country-options" value="SM">San Marino</option>
                                <option class="country-options" value="ST">São Tomé und Príncipe</option>
                                <option class="country-options" value="SA">Saudi-Arabien</option>
                                <option class="country-options" value="SE">Schweden</option>
                                <option class="country-options" value="CH">Schweiz</option>
                                <option class="country-options" value="SN">Senegal</option>
                                <option class="country-options" value="CS">Serbien und Montenegro</option>
                                <option class="country-options" value="SC">Seychellen</option>
                                <option class="country-options" value="SL">Sierra Leone</option>
                                <option class="country-options" value="ZW">Simbabwe</option>
                                <option class="country-options" value="SG">Singapur</option>
                                <option class="country-options" value="SK">Slowakei</option>
                                <option class="country-options" value="SI">Slowenien</option>
                                <option class="country-options" value="SO">Somalia</option>
                                <option class="country-options" value="ES">Spanien</option>
                                <option class="country-options" value="LK">Sri Lanka</option>
                                <option class="country-options" value="SH">St. Helena</option>
                                <option class="country-options" value="KN">St. Kitts und Nevis</option>
                                <option class="country-options" value="LC">St. Lucia</option>
                                <option class="country-options" value="PM">St. Pierre und Miquelon</option>
                                <option class="country-options" value="VC">St. Vincent/Grenadinen (GB)</option>
                                <option class="country-options" value="ZA">Südafrika, Republik</option>
                                <option class="country-options" value="SD">Sudan</option>
                                <option class="country-options" value="KR">Südkorea</option>
                                <option class="country-options" value="SR">Suriname</option>
                                <option class="country-options" value="SJ">Svalbard und Jan Mayen</option>
                                <option class="country-options" value="SZ">Swasiland</option>
                                <option class="country-options" value="SY">Syrien</option>
                                <option class="country-options" value="TJ">Tadschikistan</option>
                                <option class="country-options" value="TW">Taiwan</option>
                                <option class="country-options" value="TZ">Tansania</option>
                                <option class="country-options" value="TH">Thailand</option>
                                <option class="country-options" value="TL">Timor-Leste</option>
                                <option class="country-options" value="TG">Togo</option>
                                <option class="country-options" value="TK">Tokelau</option>
                                <option class="country-options" value="TO">Tonga</option>
                                <option class="country-options" value="TT">Trinidad und Tobago</option>
                                <option class="country-options" value="TA">Tristan da Cunha</option>
                                <option class="country-options" value="TD">Tschad</option>
                                <option class="country-options" value="CZ">Tschechische Republik</option>
                                <option class="country-options" value="TN">Tunesien</option>
                                <option class="country-options" value="TR">Türkei</option>
                                <option class="country-options" value="TM">Turkmenistan</option>
                                <option class="country-options" value="TC">Turks- und Caicosinseln</option>
                                <option class="country-options" value="TV">Tuvalu</option>
                                <option class="country-options" value="UG">Uganda</option>
                                <option class="country-options" value="UA">Ukraine</option>
                                <option class="country-options" value="HU">Ungarn</option>
                                <option class="country-options" value="UY">Uruguay</option>
                                <option class="country-options" value="UZ">Usbekistan</option>
                                <option class="country-options" value="VU">Vanuatu</option>
                                <option class="country-options" value="VA">Vatikanstadt</option>
                                <option class="country-options" value="VE">Venezuela</option>
                                <option class="country-options" value="AE">Vereinigte Arabische Emirate</option>
                                <option class="country-options" value="US">Vereinigte Staaten von Amerika</option>
                                <option class="country-options" value="VN">Vietnam</option>
                                <option class="country-options" value="WF">Wallis und Futuna</option>
                                <option class="country-options" value="CX">Weihnachtsinsel</option>
                                <option class="country-options" value="BY">Weißrussland</option>
                                <option class="country-options" value="EH">Westsahara</option>
                                <option class="country-options" value="CF">Zentralafrikanische Republik</option>
                                <option class="country-options" value="CY">Zypern</option>
                            </select>
                            <input type="number" name="phonenumber" id="phonenumber" placeholder="Telefonnummer" required>
                            <input type="text" name="email" id="email" placeholder="Email" required>
                        </div>

                        <h3>Deine Bestellung</h3>
                        <div class="grid-header">
                            <span class="grid-header-item">Produkt</span>
                            <span class="grid-header-item">Anzahl</span>
                            <span class="grid-header-item">Summe</span>
                        </div>
                        <div id="shoppingcart-sum">
                            <div class="sum-elements">
                                <div>
                                    <p>Hier könnte Ihr Produktname stehen</h4>
                                    <p>Hier könnte Ihre Produktbeschreibung stehen</p>
                                </div>

                            </div>
                            <div class="sum-elements">
                                <span>Zwischensumme</span>
                                <span>69.00€</span>
                            </div>
                            <div class="sum-elements" id="sum-elements-versand">
                                <span>Versand</span>
                                <span>Versandkostenpauschale: 5.00€ <br>      
                                    <span>Enthält 0,95€ MwSt. (19%) <br></span>
                                    <span>Versand nach <span><!-- Adresse einfügen falls vorhanden --></span><br></span>
                                    <span>Adresse ändern <!--  --></span>
                                </span>
                            </div>
                            <div class="sum-elements" id="sum-elements-summe">
                                <span>Summe</span>
                                <span>69.00€ <br>      
                                    <span>Enthält nn.nn€ MwSt. (19%)</span>
                                </span>
                            </div>
                        </div>
                        <div class="normal-button">
                            <input type="submit" value="Weiter">
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>