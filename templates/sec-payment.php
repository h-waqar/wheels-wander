<section id="secPayment" class="sec-payment cs-hidden">

    <div class="payment-plan">
        <div class="container">
            <div class="plans">
                <div class="title">Booking options</div>
                <label class="plan basic-plan" for="basic">
                    <input checked type="radio" name="cs_plan" id="basic" value="payNow" />
                    <div class="plan-content">
                        <img loading="lazy" src="<?php echo CS_WHEELS_WANDER_BASE_URL . "img/payment-now.png";  ?>" alt="" />
                        <div class="plan-details">
                            <span>Advance Booking</span>
                            <p>Guarantee your car and get the best price by booking and paying now. 
                            </p>
                            <!-- <p class="cs-higlighted">Included</p> -->
                        </div>
                    </div>
                </label>

                <!-- <label class="plan complete-plan" for="complete">
                    <input type="radio" id="complete" name="cs_plan" value="payLater" />
                    <div class="plan-content">
                        <img loading="lazy" src="<?php echo CS_WHEELS_WANDER_BASE_URL . "img/pay-later.png";  ?>" alt="" />
                        <div class="plan-details">
                            <span>Pay on arrival</span>
                            <p>You may pay via credit card or cash upon collection of the car.</p>
                            <p class="cs-higlighted">€15 per day</p>
                        </div>
                    </div>
                </label> -->
            </div>
        </div>
        <!-- <span class="inspiration"><a target="_blank" href="https://dribbble.com/shots/16297618/attachments/8174807?mode=media">Dribbble : Payfit - Radio group
                component by Ssilbi NG</a></span> -->
    </div>




    <!-- Driver Detail Starts -->
    <div class="col-md-12 col-content p-0">

        <div class="col-md-12 p-0">
            <h5 class="title-driver cs_black_heading">Driver details</h5>
        </div>

        <div class="row">


            <div class="col-md-6">
                <div class="cs-field">

                    <label for="driverFirstName">
                        <span class="lbl">
                            First Name
                        </span>
                        <input id="driverFirstName" placeholder="Enter Driver Name" type="text" />

                    </label>

                </div>
            </div>

            <div class="col-md-6">
                <div class="cs-field">

                    <label for="driverSurName">
                        <span class="lbl">
                            Surname
                        </span>
                        <input id="driverSurName" placeholder="Enter Surname" type="text" />

                    </label>

                </div>
            </div>

        </div> <!-- Row Ends -->



        <div class="row">
            <div class="col-md-5">
                <div class="cs-field">

                    <label for="driverEmail">
                        <span class="lbl">

                            Email
                        </span>
                        <input id="driverEmail" placeholder="Enter Driver Email" type="email" />

                    </label>

                </div>
            </div>

            <div class="col-md-3">
                <label style="margin-bottom: -11px;">
                    <span class="lbl">
                        Country Code
                    </span>
                </label>
                <div class="cs-field cs-field-country-code">

                    <select name="countryCode" id="driverCountryCode">

                        <option data-countryCode="GB" value="44" >UK (+44)</option>
                        <option data-countryCode="US" value="1">USA (+1)</option>
                        <optgroup label="Other countries">
                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                            <option data-countryCode="CN" value="86">China (+86)</option>
                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                            <option data-countryCode="FR" value="33">France (+33)</option>
                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                            <option data-countryCode="IN" value="91">India (+91)</option>
                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                            <option data-countryCode="SC" value="248" Selected>Seychelles (+248)</option>
                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cs-field">

                    <label for="driverPhone">
                        <span class="lbl">

                            Contact Number
                        </span>
                        <input id="driverPhone" placeholder="Enter Driver Phone" type="number" />

                    </label>

                </div>
            </div>


        </div>










        <!-- <div class="col-md-12 checkbox-wrap">
            <div class="row row-additional-driver">
                <div class="checkbox-wrapper-33">
                    <label class="checkbox" for="checkbox25YearsOrOlder">
                        <input class="checkbox__trigger visuallyhidden" type="checkbox" id="checkbox25YearsOrOlder" />
                        <span class="checkbox__symbol">
                            <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 14l8 7L24 7"></path>
                            </svg>
                        </span>
                        <p class="checkbox__textwrapper">I am 25 years of age or older</p>
                    </label>
                </div>
            </div>
        </div> -->
        <!-- 
        <div class="col-md-12">


            <div class="cs-button-wrapper">
                <button class="cs-button-outline mx-0 mr-4" id="btnDriverDetailPrev"> Previous</button>
                <button class="cs-primary-button mx-0" id="btnDriverDetailNext"> Next</button>
            </div>
        </div> -->




    </div>




    <div class="booking-pay-summary" id="cs_PagePayment">






        <!-- Personal Information Starts here -->

        <div class="cs-body-card-info">




            <div class="booking-payment">

                <h6 class="cs_black_heading">Billing address</h6>

                <div class="cs-payment-option payment-wrap">

                    <div class="row">



                        <!-- <div class="col-md-6">
                            <div class="cs-field">
                                <label for="csBillingName">
                                    Your Name
                                    <input type="text" style="background: #f2f2f2;   border: 1px solid rgba(0,0,0,0.2);" class="cs-card-holder-name" name="cs_billing_name" id="csBillingName" placeholder="Your Name" disabled>
                                </label>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="cs-field">
                                <label for="csBillingEmail">
                                    Your Email
                                    <input type="text" style="background: #f2f2f2;   border: 1px solid rgba(0,0,0,0.2);" class="cs-card-holder-name" name="cs_billing_email" id="csBillingEmail" placeholder="Email" disabled>
                                </label>
                            </div>
                        </div> -->



                        <div class="col-md-6">
                            <div class="cs-field">
                                <label for="csNFirstName">
                                    First Name
                                    <input type="text" class="cs-card-holder-name" name="cs_n_first_name" id="csNFirstName" placeholder="Enter Your First Name">
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="cs-field">
                                <label for="csNLastName">
                                    Last Name
                                    <input type="text" class="cs-card-holder-name" name="cs_n_last_name" id="csNLastName" placeholder="Enter Your Last Name">
                                </label>
                            </div>
                        </div>


                        <!-- <div class="col-md-12">
                            <div class="cs-field">
                                <label for="csNEmail">
                                    Email
                                    <input type="text" class="cs-card-holder-name" name="cs_n_email" id="csNEmail" placeholder="Enter Your Email">
                                </label>
                            </div>
                        </div> -->



                        <!-- cardholder Name -->
                        <div class="col-md-12">
                            <div class="cs-field">
                                <label for="csAddress">
                                    Address
                                    <input type="text" class="cs-card-holder-name" name="cs_address" id="csAddress" placeholder="Address">
                                </label>
                            </div>
                        </div>



                        <!-- cardholder Name -->
                        <div class="col-md-4">
                            <div class="cs-field">
                                <label for="csCity">
                                    City
                                    <input type="text" class="cs-card-holder-name" name="cs_city" id="csCity" placeholder="City">
                                </label>
                            </div>
                        </div>





                        <!-- State -->
                        <div class="col-md-4">
                            <div class="cs-field">

                                <label for="csState">
                                    State
                                    <input type="text" name="cs_state" id="csState" placeholder="State">
                                </label>
                            </div>
                        </div>



                        <!--  Postal Code -->
                        <div class="col-md-4">
                            <div class="cs-field">

                                <label for="csPostalCode">
                                    Postal Code
                                    <input type="text" name="cs_post_code" id="csPostalCode" placeholder="Postal Code">
                                </label>
                            </div>
                        </div>



                        <!-- Country Select Dropdown -->
                        <div class="col-md-12">
                            <div class="cs-field">
                                <label for="csCountry">
                                    Country
                                    <select name="cs_country" class="cs-custom-select" id="csCountry" style="border: 1px solid black;">

                                        <option value="">Select country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and Mcdonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthelemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="CS">Serbia and Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.s.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>

                                    </select>
                                </label>
                            </div>
                        </div>




                    </div>

                </div> <!-- Pay using Card *END* -->

            </div>















            <div class="booking-payment">

                <h6 class="cs_black_heading">Card Information</h6>

                <div class="cs-payment-option">

                    <div class="row">

                        <!-- cardholder Name -->
                        <div class="col-md-12">
                            <div class="cs-field">
                                <label for="payment_CardHolderName">
                                    <input type="text" class="cs-card-holder-name" name="payment_card_holder_name" id="payment_CardHolderName" placeholder="Card Holder Name">
                                </label>
                            </div>
                        </div>

                        <!-- Card NUmber -->
                        <div class="col-md-9">
                            <div class="cs-field">
                                <label for="payment_CardNumber">
                                    <input type="text" name="payment_card_number" id="payment_CardNumber" placeholder="Card Number">
                                </label>
                                <!-- Card Images Start -->
                                <div class="card-img-wrapper">

                                    <!-- VISA CARD SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path d="M512 402.281c0 16.716-13.55 30.267-30.265 30.267H30.265C13.55 432.549 0 418.997 0 402.281V109.717c0-16.716 13.55-30.266 30.265-30.266h451.47c16.716 0 30.265 13.551 30.265 30.266v292.564z" style="" fill="#ffffff" data-original="#ffffff" class=""></path>
                                            <path d="m113.64 258.035-12.022-57.671c-2.055-7.953-8.035-10.319-15.507-10.632H30.993l-.491 2.635c42.929 10.407 71.334 35.513 83.138 65.668z" style="" fill="#f79f1a" data-original="#f79f1a" class=""></path>
                                            <path d="M241.354 190.892h-35.613l-22.242 130.527h35.554zM135.345 321.288l56.01-130.307h-37.691l-34.843 89.028-3.719-13.442c-6.83-16.171-26.35-39.446-49.266-54.098l31.85 108.863 37.659-.044zM342.931 278.75c.132-14.819-9.383-26.122-29.887-35.458-12.461-6.03-20.056-10.051-19.965-16.17 0-5.406 6.432-11.213 20.368-11.213 11.661-.179 20.057 2.367 26.624 5.003l3.218 1.475 4.826-28.277c-7.059-2.637-18.094-5.451-31.895-5.451-35.157 0-59.904 17.691-60.128 43.064-.224 18.763 17.692 29.216 31.181 35.469 13.847 6.374 18.493 10.453 18.404 16.171-.089 8.743-11.035 12.73-21.264 12.73-14.25 0-21.8-1.965-33.509-6.843l-4.55-2.09-4.998 29.249c8.303 3.629 23.668 6.801 39.618 6.933 37.387 0 61.689-17.466 61.957-44.592zM385.233 301.855c4.065 0 40.382.045 45.566.045 1.072 4.545 4.333 19.565 4.333 19.565h33.011L439.33 191.027h-27.472c-8.533 0-14.874 2.323-18.628 10.809l-52.845 119.629h37.392c-.003 0 6.071-16.079 7.456-19.61zm24.389-63.21c-.176.357 2.95-7.549 4.737-12.463l2.411 11.256s6.792 31.182 8.22 37.704h-29.528c2.949-7.504 14.16-36.497 14.16-36.497zM481.735 79.451H30.265C13.55 79.451 0 93.001 0 109.717v31.412h512v-31.412c0-16.716-13.549-30.266-30.265-30.266z" style="" fill="#059bbf" data-original="#059bbf"></path>
                                            <path d="M481.735 432.549H30.265C13.55 432.549 0 418.998 0 402.283v-31.412h512v31.412c0 16.715-13.549 30.266-30.265 30.266z" style="" fill="#f79f1a" data-original="#f79f1a" class=""></path>
                                            <path d="M21.517 402.281V109.717c0-16.716 13.551-30.266 30.267-30.266h-21.52C13.55 79.451 0 93.001 0 109.717v292.565c0 16.716 13.55 30.267 30.265 30.267h21.52c-16.716 0-30.268-13.552-30.268-30.268z" style="opacity:0.15;enable-background:new ;" fill="#202121" data-original="#202121" class=""></path>
                                        </g>
                                    </svg>

                                    <!-- MasterCard -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 160 100" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                        <g>
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#265697" d="M148 0H8C4 0 0 4 0 8v80c0 8 4 12 12 12h136c8 0 12-4 12-12V12c0-8-4-12-12-12zm0 0" opacity="1" data-original="#265697"></path>
                                                <path fill="#dfac16" d="M149.545 50.5c.007 23.238-18.625 42.08-41.615 42.085-22.991.006-41.631-18.826-41.637-42.064V50.5c-.006-23.237 18.626-42.08 41.615-42.086 22.99-.006 41.631 18.827 41.637 42.065zm0 0" opacity="1" data-original="#dfac16"></path>
                                                <path fill="#bf3126" d="M51.813 8.425c-22.854.147-41.359 18.94-41.359 42.075 0 23.225 18.649 42.075 41.627 42.075 10.784 0 20.614-4.155 28.011-10.963l-.003-.002h.009a42.283 42.283 0 0 0 4.226-4.505h-8.529a41.082 41.082 0 0 1-3.103-4.335H87.4a42.29 42.29 0 0 0 2.423-4.505h-19.56a41.763 41.763 0 0 1-1.74-4.42h23.042A42.384 42.384 0 0 0 93.707 50.5a42.6 42.6 0 0 0-.959-9.01H67.302c.315-1.494.713-2.97 1.187-4.42h23.05a42.346 42.346 0 0 0-1.794-4.505H70.26a40.506 40.506 0 0 1 2.389-4.42h14.697a42.154 42.154 0 0 0-3.23-4.505h-8.195a38.848 38.848 0 0 1 4.176-4.25C72.7 12.58 62.868 8.425 52.08 8.425h-.268s.09 0 0 0zm0 0" opacity="1" data-original="#bf3126"></path>
                                                <g fill="#fff">
                                                    <path d="m67.05 61.212.554-3.808c-.303 0-.748.132-1.142.132-1.543 0-1.713-.83-1.614-1.443l1.246-7.77h2.345l.566-4.211h-2.211l.45-2.62h-4.432c-.098.1-2.616 14.732-2.616 16.514 0 2.637 1.465 3.812 3.531 3.793 1.618-.013 2.878-.466 3.323-.587 0 0-.445.121 0 0zM68.454 53.952c0 6.331 4.134 7.835 7.656 7.835 3.251 0 4.682-.734 4.682-.734l.78-4.32s-2.473 1.1-4.706 1.1c-4.76 0-3.926-3.586-3.926-3.586h9.007s.582-2.903.582-4.086c0-2.952-1.454-6.548-6.32-6.548-4.456 0-7.755 4.854-7.755 10.34zm7.772-6.327c2.501 0 2.04 2.84 2.04 3.07h-4.92c0-.293.464-3.07 2.88-3.07zM104.292 61.21l.793-4.883s-2.175 1.102-3.667 1.102c-3.144 0-4.405-2.427-4.405-5.034 0-5.288 2.705-8.198 5.716-8.198 2.259 0 4.071 1.282 4.071 1.282l.724-4.745s-2.688-1.1-4.992-1.1c-5.117 0-10.094 4.487-10.094 12.913 0 5.587 2.688 9.277 7.977 9.277 1.495 0 3.877-.614 3.877-.614zM42.673 43.682c-3.039 0-5.369.988-5.369.988l-.643 3.859s1.923-.79 4.83-.79c1.65 0 2.857.188 2.857 1.543 0 .824-.148 1.128-.148 1.128s-1.301-.11-1.904-.11c-3.833 0-7.86 1.653-7.86 6.638 0 3.928 2.642 4.83 4.279 4.83 3.127 0 4.475-2.051 4.547-2.058l-.146 1.712h3.902l1.741-12.337c0-5.234-4.517-5.403-6.086-5.403zm.95 10.046c.084.753-.468 4.286-3.136 4.286-1.377 0-1.735-1.063-1.735-1.692 0-1.226.66-2.698 3.907-2.698.755.001.836.083.964.104 0 0-.128-.021 0 0zM52.907 61.677c.999 0 6.706.257 6.706-5.696 0-5.565-5.283-4.465-5.283-6.7 0-1.114.86-1.464 2.435-1.464.625 0 3.028.2 3.028.2l.56-3.955s-1.556-.352-4.09-.352c-3.278 0-6.606 1.323-6.606 5.85 0 5.128 5.549 4.614 5.549 6.774 0 1.442-1.55 1.56-2.745 1.56-2.068 0-3.93-.717-3.936-.683l-.591 3.915c.107.034 1.255.551 4.973.551zM141.004 40.133l-.956 5.996s-1.668-2.33-4.28-2.33c-4.06 0-7.445 4.95-7.445 10.636 0 3.67 1.805 7.267 5.496 7.267 2.655 0 4.126-1.87 4.126-1.87l-.195 1.597h4.311l3.386-21.303zm-2.058 11.69c0 2.367-1.159 5.528-3.562 5.528-1.595 0-2.342-1.354-2.342-3.478 0-3.473 1.543-5.764 3.49-5.764 1.596 0 2.414 1.107 2.414 3.715zM18.675 61.448l2.698-16.084.396 16.084h3.054l5.696-16.084-2.523 16.084h4.537l3.495-21.332H29.01l-4.37 13.088-.227-13.088h-6.467l-3.545 21.332zM86.961 61.477c1.29-7.415 1.53-13.436 4.608-12.334.54-2.87 1.06-3.98 1.647-5.195 0 0-.275-.059-.854-.059-1.985 0-3.456 2.741-3.456 2.741l.396-2.517h-4.127L82.41 61.477zM114.519 43.682c-3.04 0-5.37.988-5.37.988l-.642 3.859s1.923-.79 4.83-.79c1.65 0 2.856.188 2.856 1.543 0 .824-.147 1.128-.147 1.128s-1.301-.11-1.905-.11c-3.832 0-7.859 1.653-7.859 6.638 0 3.928 2.641 4.83 4.278 4.83 3.127 0 4.475-2.051 4.547-2.058l-.145 1.712h3.902l1.74-12.337c.001-5.234-4.516-5.403-6.085-5.403zm.95 10.046c.085.753-.467 4.286-3.137 4.286-1.376 0-1.733-1.063-1.733-1.692 0-1.226.659-2.698 3.906-2.698.755.001.836.083.964.104 0 0-.128-.021 0 0zM124.172 61.477c1.29-7.415 1.53-13.436 4.607-12.334.54-2.87 1.06-3.98 1.648-5.195 0 0-.276-.059-.854-.059-1.985 0-3.456 2.741-3.456 2.741l.395-2.517h-4.126l-2.765 17.364zm0 0" fill="#ffffff" opacity="1" data-original="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                    <!-- UnionPay -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 120 76" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g transform="matrix(1.5000000000000009,0,0,1.5000000000000009,-30.000249862670984,-19.00000000000005)">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M111.999 0H8C3.582 0 0 3.59 0 8.008v59.984C0 72.415 3.591 76 8.001 76H112c4.419 0 8.001-3.59 8.001-8.008V8.008C120 3.585 116.409 0 111.999 0z" opacity="1" data-original="#f4f4f4" class=""></path>
                                                <path fill="#22abbb" d="m93.102 12.313-18.105-.005h-.004l-.042.003c-2.487.085-5.584 2.319-6.149 5.072L60.24 59.795c-.564 2.78.971 5.042 3.44 5.083H82.7c2.432-.134 4.794-2.342 5.349-5.064L96.61 17.4c.573-2.808-.999-5.088-3.509-5.088" opacity="1" data-original="#22abbb" class=""></path>
                                                <path fill="#227fbb" d="m61.538 59.796 8.708-42.408c.574-2.753 3.724-4.987 6.254-5.072l-7.321-.005-13.19-.003c-2.537.057-5.728 2.306-6.302 5.08l-8.71 42.408c-.576 2.78.987 5.04 3.497 5.082h20.563c-2.511-.041-4.072-2.303-3.499-5.082" opacity="1" data-original="#227fbb" class=""></path>
                                                <path fill="#e94b35" d="m41.41 59.796 8.622-42.404c.568-2.773 3.727-5.022 6.239-5.079l-16.728-.005c-2.525 0-5.763 2.274-6.34 5.084l-8.622 42.404a5.868 5.868 0 0 0-.1.761v.787c.17 2.025 1.561 3.5 3.561 3.534h16.83c-2.485-.041-4.033-2.303-3.462-5.082" opacity="1" data-original="#e94b35" class=""></path>
                                                <g fill="#fff">
                                                    <path d="M55.012 42.872h.331c.305 0 .51-.125.605-.372l.86-1.573h2.304l-.48 1.035h2.762l-.35 1.586h-3.287c-.379.696-.845 1.023-1.405.984H54.64l.372-1.66zm-.477 2.385h5.63l-.358 1.407h-2.265l-.345 1.359H59.4l-.359 1.407h-2.203l-.512 2.007c-.127.335.04.486.497.452h1.796l-.333 1.307H54.84c-.654 0-.878-.4-.673-1.205l.654-2.561h-1.408l.358-1.407h1.408l.346-1.359h-1.347l.358-1.407zm8.87-4.296-.086.889s1.034-.923 1.973-.923h3.47l-1.327 5.711c-.11.653-.582.978-1.416.978h-3.932l-.92 4.01c-.054.215.021.326.22.326h.773l-.284 1.244h-1.967c-.755 0-1.07-.27-.945-.812l2.603-11.423h1.839zm2.9 1.41h-3.29l-.393 1.443s.548-.415 1.463-.43c.913-.015 1.956 0 1.956 0zm-1.23 3.603c.251.024.392-.044.409-.205l.207-.512h-3.398l-.285.717zm-2.318 1.448h1.764l-.032 1.01h.47c.237 0 .355-.1.355-.298l.139-.654h1.466l-.195.953c-.166.794-.605 1.209-1.319 1.25h-.94l-.004 1.726c-.018.277.171.418.56.418h.884l-.285 1.367H63.5c-.593.037-.884-.337-.878-1.131l.135-4.64zM41.534 33.075c-.24 1.36-.796 2.405-1.66 3.148-.854.73-1.957 1.095-3.308 1.095-1.271 0-2.203-.374-2.797-1.123-.413-.533-.618-1.21-.618-2.027 0-.338.035-.702.105-1.093l1.439-8.027h2.173l-1.42 7.936c-.043.22-.06.424-.058.608-.002.407.085.74.262 1 .257.386.675.578 1.256.578.67 0 1.22-.19 1.648-.57.428-.38.707-.917.832-1.616l1.424-7.936h2.163zM51.075 30.1h1.723l-1.35 7.218h-1.72zm.785-2.887h1.552l-.29 2.166H51.57zM53.457 37.271c-.436-.518-.657-1.218-.659-2.106 0-.152.007-.325.024-.514a6.91 6.91 0 0 1 .065-.55c.198-1.226.62-2.2 1.27-2.918.648-.72 1.43-1.083 2.346-1.083.75 0 1.345.261 1.781.782.435.524.654 1.232.654 2.131 0 .154-.01.332-.026.524-.02.194-.042.38-.07.564-.193 1.207-.614 2.17-1.263 2.875-.65.71-1.43 1.064-2.34 1.064-.753 0-1.346-.256-1.782-.769m3.218-1.598c.308-.373.529-.938.663-1.69a3.631 3.631 0 0 0 .065-.698c0-.438-.1-.778-.3-1.018-.2-.242-.483-.362-.85-.362-.483 0-.878.19-1.187.57-.311.38-.532.955-.67 1.72-.02.118-.036.235-.05.35a2.84 2.84 0 0 0-.012.328c0 .435.1.77.3 1.007.2.238.481.355.852.355.487 0 .88-.187 1.189-.562M70.493 42.665l.416-1.738h2.098l-.09.638s1.072-.638 1.845-.638h2.595l-.413 1.738h-.408l-1.958 8.197h.409l-.389 1.628h-.408l-.17.706h-2.032l.17-.706h-4.01l.39-1.628h.402l1.96-8.197h-.407zm2.42.427-.468 2.165s.8-.407 1.49-.522c.153-.756.352-1.643.352-1.643h-1.374zM71.685 46.7l-.468 2.165s.884-.553 1.491-.6c.176-.836.351-1.565.351-1.565h-1.374zm.999 4.33.375-2.165h-1.464l-.378 2.165zm4.673-10.104h2.213l.094.939c-.014.239.11.353.372.353h.39l-.395 1.591h-1.627c-.621.037-.94-.236-.97-.825zm-.251 3.608h6.39l-.374 1.478h-2.035l-.35 1.374h2.034l-.378 1.476H80.13l-.512.865h1.108l.256 1.731c.03.172.168.256.402.256h.344l-.362 1.426h-1.218c-.632.035-.958-.202-.985-.712l-.293-1.58-1.009 1.681c-.238.476-.604.697-1.098.663H74.9l.362-1.426h.58c.239 0 .437-.119.616-.357l1.578-2.547h-2.035l.377-1.476h2.207l.351-1.374h-2.209zM43.561 30.279h1.488l-.17 1.016.214-.29c.482-.605 1.068-.905 1.76-.905.626 0 1.078.214 1.361.642.28.43.355 1.022.223 1.783l-.82 4.793h-1.529l.74-4.345c.077-.448.056-.783-.062-.999-.116-.215-.339-.322-.659-.322-.393 0-.725.144-.994.429-.271.287-.45.686-.538 1.194l-.682 4.043h-1.532zM61.366 30.279h1.49l-.17 1.016.212-.29c.483-.605 1.07-.905 1.76-.905.627 0 1.08.214 1.36.642.278.43.359 1.022.223 1.783l-.817 4.793h-1.531l.74-4.345c.076-.448.055-.783-.061-.999-.12-.215-.339-.322-.658-.322-.394 0-.724.144-.997.429-.27.287-.45.686-.535 1.194l-.685 4.043h-1.531l1.2-7.04M68.987 25.048h4.475c.86 0 1.526.238 1.983.704.456.473.684 1.15.684 2.033v.027c0 .168-.01.357-.022.562-.022.203-.05.408-.088.622-.197 1.168-.655 2.107-1.362 2.82-.71.709-1.55 1.066-2.517 1.066h-2.4l-.743 4.436H66.92l2.068-12.27m1.002 6.135h2.204c.574 0 1.03-.177 1.362-.526.33-.354.548-.893.67-1.625.018-.135.03-.257.045-.369.008-.106.017-.212.017-.314 0-.524-.14-.903-.422-1.14-.28-.241-.722-.356-1.333-.356h-1.871l-.672 4.33M85.445 38.711c-.643 1.622-1.255 2.567-1.614 3.007-.36.435-1.073 1.446-2.79 1.37l.147-1.238c1.445-.528 2.227-2.91 2.672-3.965l-.53-7.767 1.117-.018h.938l.1 4.873 1.758-4.873h1.78l-3.578 8.611M79.993 31.02l-.705.607c-.737-.721-1.41-1.168-2.709-.414-1.769 1.026-3.247 8.898 1.624 6.306l.277.411 1.916.062 1.259-7.153-1.662.181m-.958 3.809c-.336 1.174-1.085 1.95-1.672 1.73-.587-.216-.797-1.349-.457-2.526.335-1.177 1.09-1.95 1.672-1.73.587.216.799 1.349.457 2.526" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                    <!-- American Express -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <path d="M512 402.281c0 16.716-13.55 30.267-30.265 30.267H30.265C13.55 432.549 0 418.997 0 402.281V109.717c0-16.715 13.55-30.266 30.265-30.266h451.47c16.716 0 30.265 13.551 30.265 30.266v292.564z" style="" fill="#306fc5" data-original="#306fc5" class=""></path>
                                            <path d="M21.517 402.281V109.717c0-16.715 13.552-30.266 30.267-30.266h-21.52C13.55 79.451 0 93.001 0 109.717v292.565c0 16.716 13.55 30.267 30.265 30.267h21.52c-16.715 0-30.268-13.552-30.268-30.268z" style="opacity:0.15;enable-background:new ;" fill="#202121" data-original="#202121"></path>
                                            <path d="M74.59 220.748h15.298l-7.647-19.47zM155.946 286.107v9.041h25.729v9.737h-25.729v10.433h28.509l13.211-14.606-12.515-14.605zM356.898 201.278l-8.345 19.47h15.995zM230.348 320.875v-39.634l-18.08 19.471zM264.42 292.368c-.696-4.172-3.48-6.261-7.654-6.261h-14.599v12.516h15.299c4.171.001 6.954-2.084 6.954-6.255zM313.09 297.236c1.391-.697 2.089-2.785 2.089-4.867.696-2.779-.698-4.172-2.089-4.868-1.387-.696-3.476-.696-5.559-.696h-13.91v11.127h13.909c2.083 0 4.172 0 5.56-.696z" style="" fill="#ffffff" data-original="#ffffff" class=""></path>
                                            <path d="M413.217 183.198v8.344l-4.169-8.344H376.37v8.344l-4.174-8.344h-44.502c-7.648 0-13.909 1.392-19.469 4.173v-4.173h-31.289v4.173c-3.476-2.78-7.648-4.173-13.211-4.173h-111.95l-7.652 17.384-7.647-17.384H101.014v8.344l-3.477-8.344H66.942l-13.909 32.68-15.991 35.462-.294.697h36.201l.252-.697 4.174-10.428h9.039l4.172 11.125h40.326v-8.344l3.479 8.343h20.163l3.475-8.343v8.344h96.654v-18.08h1.394c1.389 0 1.389 0 1.389 2.087v15.297h50.065v-4.172c4.172 2.089 10.426 4.172 18.771 4.172h20.863l4.172-11.123h9.732l4.172 11.123h40.328v-10.428l6.261 10.428h32.68v-68.143h-31.293zm-235.716 58.411H166.375v-38.245l-.696 1.595v-.019l-16.176 36.669H139.255l-16.687-38.245v38.245h-23.64l-4.867-10.43H70.417l-4.868 10.43H53.326l20.57-48.675h17.382l19.469 46.587v-46.587h18.422l.328.697h.024l8.773 19.094 6.3 14.306.223-.721 13.906-33.375H177.5v48.674h.001zm47.98-38.245h-27.119v9.039h26.423v9.734h-26.423v9.738h27.119v10.427h-38.939v-49.367h38.939v10.429zm49.595 17.93c.018.016.041.027.063.042.263.278.488.557.68.824 1.332 1.746 2.409 4.343 2.463 8.151l.011.197c0 .038.007.071.007.11l-.002.06c.016.383.026.774.026 1.197v9.735h-10.428v-5.565c0-2.781 0-6.954-2.089-9.735a6.33 6.33 0 0 0-2.046-1.398c-1.042-.675-3.017-.686-6.295-.686h-12.52v17.384h-11.818v-48.675h26.425c6.254 0 10.428 0 13.906 2.086 3.407 2.046 5.465 5.439 5.543 10.812-.161 7.4-4.911 11.46-8.326 12.829 0 0 2.32.467 4.4 2.632zm23.415 20.315h-11.822v-48.675h11.822v48.675zm135.592 0h-15.3l-22.25-36.855v30.595l-.073-.072v6.362h-11.747v-.029h-11.822l-4.172-10.43H344.38l-4.172 11.123h-13.211c-5.559 0-12.517-1.389-16.687-5.561-4.172-4.172-6.256-9.735-6.256-18.773 0-6.953 1.389-13.911 6.256-19.472 3.474-4.175 9.735-5.562 17.382-5.562h11.128v10.429h-11.128c-4.172 0-6.254.693-9.041 2.783-2.082 2.085-3.474 6.256-3.474 11.123 0 5.564.696 9.04 3.474 11.821 2.091 2.089 4.87 2.785 8.346 2.785h4.867l15.991-38.243h17.385l19.472 46.587v-46.586h17.382l20.161 34.07v-34.07h11.826v47.977h.002v-.002z" style="" fill="#ffffff" data-original="#ffffff" class=""></path>
                                            <path d="M265.161 213.207c.203-.217.387-.463.543-.745.63-.997 1.352-2.793.963-5.244a3.884 3.884 0 0 0-.105-.634c-.013-.056-.011-.105-.026-.161l-.007.001c-.346-1.191-1.229-1.923-2.11-2.367-1.394-.693-3.48-.693-5.565-.693h-13.909v11.127h13.909c2.085 0 4.172 0 5.565-.697.209-.106.395-.25.574-.413l.002.009c.001-.001.072-.075.166-.183zM475.105 311.144c0-4.867-1.389-9.736-3.474-13.212v-31.289h-.032v-2.089h-33.483c-4.336 0-9.598 4.171-9.598 4.171v-4.171h-31.984c-4.87 0-11.124 1.392-13.909 4.171v-4.171h-57.016v4.17c-4.169-3.474-11.824-4.171-15.298-4.171h-37.549v4.17c-3.476-3.474-11.824-4.171-15.998-4.171H215.05l-9.737 10.431-9.04-10.431h-62.578v70.233h61.19l10.054-10.057 8.715 10.057h38.942v-15.992h3.479c4.863 0 11.124 0 15.991-2.089v18.776h31.291V317.4h1.387c2.089 0 2.089 0 2.089 2.086v15.994h94.563c6.263 0 12.517-1.394 15.993-4.175v4.175h29.902c6.254 0 12.517-.695 16.689-3.478 6.402-3.841 10.437-10.64 11.037-18.749.028-.24.063-.48.085-.721l-.041-.039c.026-.45.044-.895.044-1.349zm-219.029-4.171h-13.91v18.077h-22.855l-13.302-15.299-.046.051-.65-.748-15.297 15.996h-44.501v-48.673h45.197l12.348 13.525 2.596 2.832.352-.365 14.604-15.991h36.852c7.152 0 15.161 1.765 18.196 9.042.365 1.441.577 3.043.577 4.863 0 13.906-9.735 16.69-20.161 16.69zm69.533-.697c1.389 2.081 2.085 4.867 2.085 9.041v9.732h-11.819v-6.256c0-2.786 0-7.65-2.089-9.739-1.387-2.081-4.172-2.081-8.341-2.081H292.93v18.077h-11.82v-49.369h26.421c5.559 0 10.426 0 13.909 2.084 3.474 2.088 6.254 5.565 6.254 11.128 0 7.647-4.865 11.819-8.343 13.212 3.478 1.385 5.563 2.78 6.258 4.171zm47.98-20.169h-27.122v9.04h26.424v9.737h-26.424v9.736h27.122v10.429H334.65V275.68h38.939v10.427zm29.202 38.943h-22.252v-10.429h22.252c2.082 0 3.476 0 4.87-1.392.696-.697 1.387-2.085 1.387-3.477 0-1.394-.691-2.778-1.387-3.475-.698-.695-2.091-1.391-4.176-1.391-11.126-.696-24.337 0-24.337-15.296 0-6.954 4.172-14.604 16.689-14.604h22.945v11.819h-21.554c-2.085 0-3.478 0-4.87.696-1.387.697-1.387 2.089-1.387 3.478 0 2.087 1.387 2.783 2.778 3.473 1.394.697 2.783.697 4.172.697h6.259c6.259 0 10.43 1.391 13.211 4.173 2.087 2.087 3.478 5.564 3.478 10.43 0 10.427-6.258 15.298-18.078 15.298zm59.799-4.871c-2.778 2.785-7.648 4.871-14.604 4.871H425.74v-10.429h22.245c2.087 0 3.481 0 4.87-1.392.693-.697 1.391-2.085 1.391-3.477 0-1.394-.698-2.778-1.391-3.475-.696-.695-2.085-1.391-4.172-1.391-11.122-.696-24.337 0-24.337-15.295 0-6.609 3.781-12.579 13.106-14.352a25.917 25.917 0 0 1 3.583-.253h22.948v11.819H442.426c-2.087 0-3.476 0-4.865.696-.7.697-1.396 2.089-1.396 3.478 0 2.087.696 2.783 2.785 3.473 1.389.697 2.78.697 4.172.697h6.256c3.039 0 5.337.375 7.44 1.114 1.926.697 8.302 3.549 9.728 10.994.124.78.215 1.594.215 2.495 0 4.173-1.391 7.649-4.171 10.427z" style="" fill="#ffffff" data-original="#ffffff" class=""></path>
                                        </g>
                                    </svg>

                                </div> <!-- Card Images End -->

                            </div>
                        </div>

                        <!-- CVV -->
                        <div class="col-md-3">
                            <div class="cs-field">
                                <label for="payment_CardCvv">
                                    <input type="text" name="payment_card_cvv" id="payment_CardCvv" placeholder="Card CVV No">
                                </label>
                            </div>
                        </div>

                        <!-- Expiration Date -->

                        <!--        Choose Expiration Month        -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <select class="cs-custom-select" id="month" name="payment_exp_month" class="col-50" required>
                                    <option value="" class="d-none">Expiration Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>

                        <!--        Choose Expiration Year        -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <select class="cs-custom-select" id="year" name="payment_exp_year" class="col-50" required>
                                    <option value="" class="d-none">Expiration Year</option>
                                    <?php
                                    $start_year = date("Y");
                                    for ($x = $start_year; $x <= $start_year + 10; $x++) {
                                    ?>
                                        <option value="<?php echo $x; ?>">
                                            <?php echo $x; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!--        Choose Card Type        -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <select class="cs-custom-select" id="cardType" name="payment_choose_type" required>
                                    <option value="" class="d-none">Card Type</option>
                                    <option value="MasterCard">MasterCard</option>
                                    <!-- <option value="American Express">American Express</option> -->
                                    <option value="Visa">Visa</option>
                                    <option value="Discover">Discover</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div> <!-- Pay using Card *END* -->

            </div>




            <!-- <div class="btn_wrap">
                <button class="cs-button-outline" onclick="prevPaymentPage()"> Previous</button>

                <button class="cs-primary-button" onclick="submitForm(this)"> Pay Now</button>
            </div> -->


        </div>
        <!-- cs-body ends -->

    </div>

    <div class="col-md-12 checkbox-wrap">
        <div class="row row-additional-driver">
            <div class="checkbox-wrapper-33">
                <label class="checkbox" for="cbTermsAndConditions">
                    <input class="checkbox__trigger visuallyhidden" type="checkbox" id="cbTermsAndConditions" />
                    <span class="checkbox__symbol" id="checkboxSymbol">
                        <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 14l8 7L24 7"></path>
                        </svg>
                    </span>
                    <p class="checkbox__textwrapper">I have read and accept the rental information and <a target="_blank" href="https://seychellesdream.com/wp-content/uploads/2024/03/Courtesy-Car-Ver-6-March-2024.pdf">terms and conditions</a></p>
                </label>
            </div>
        </div>
    </div>

    <button class="btn-summary-next cs-hidden" onclick="submitForm(this)" id="btnSecBookNow">
        Book Now<i class="fa fa-arrow-right" aria-hidden="true"></i>
    </button>









</section>