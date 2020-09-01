@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url(/uploads/banner_customer_panel.jpg)">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Edit Profile Information</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile Information</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">				
                    <div class="user-sidebar">
                        <ul>
                            <li><a href="{{ route('Dashboard') }}" class="btn btn-md btn-block btn-dark">{{ __('Dashboard') }}</a></li>
                            <li><a href="/customer-order" class="btn btn-md btn-block btn-dark">Orders</a></li>
                            <li><a href="/customer-delivery-track" class="btn btn-md btn-block btn-dark">Delivery Track</a></li>
                            <li><a href="/customer-edit-profile" class="btn btn-md btn-block btn-dark">Edit Profile</a></li>
                            <li><a href="/customer-edit-password" class="btn btn-md btn-block btn-dark">Edit Password</a></li>
                            <li><a href="{{ route('logout') }}" class="btn btn-md btn-block btn-dark" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            </li>
                        </ul>				
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name *</label>
                                    <input type="text" class="form-control" value="John Doe" name="customer_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email Address *</label>
                                    <input type="email" class="form-control" value="customer@gmail.com" name="" disabled="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone *</label>
                                    <input type="text" class="form-control" value="111-222-3333" name="customer_phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Country *</label>
                                    <select name="customer_country_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="16">Bahamas</option>
                                        <option value="17">Bahrain</option>
                                        <option value="18">Bangladesh</option>
                                        <option value="19">Barbados</option>
                                        <option value="20">Belarus</option>
                                        <option value="21">Belgium</option>
                                        <option value="22">Belize</option>
                                        <option value="23">Benin</option>
                                        <option value="24">Bermuda</option>
                                        <option value="25">Bhutan</option>
                                        <option value="26">Bolivia</option>
                                        <option value="27">Bosnia and Herzegovina</option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island</option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean Territory</option>
                                        <option value="32">Brunei Darussalam</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
                                        <option value="39">Cape Verde</option>
                                        <option value="40">Cayman Islands</option>
                                        <option value="41">Central African Republic</option>
                                        <option value="42">Chad</option>
                                        <option value="43">Chile</option>
                                        <option value="44">China</option>
                                        <option value="45">Christmas Island</option>
                                        <option value="46">Cocos (Keeling) Islands</option>
                                        <option value="47">Colombia</option>
                                        <option value="48">Comoros</option>
                                        <option value="49">Democratic Republic of the Congo</option>
                                        <option value="50">Republic of Congo</option>
                                        <option value="51">Cook Islands</option>
                                        <option value="52">Costa Rica</option>
                                        <option value="53">Croatia (Hrvatska)</option>
                                        <option value="54">Cuba</option>
                                        <option value="55">Cyprus</option>
                                        <option value="56">Czech Republic</option>
                                        <option value="57">Denmark</option>
                                        <option value="58">Djibouti</option>
                                        <option value="59">Dominica</option>
                                        <option value="60">Dominican Republic</option>
                                        <option value="61">East Timor</option>
                                        <option value="62">Ecuador</option>
                                        <option value="63">Egypt</option>
                                        <option value="64">El Salvador</option>
                                        <option value="65">Equatorial Guinea</option>
                                        <option value="66">Eritrea</option>
                                        <option value="67">Estonia</option>
                                        <option value="68">Ethiopia</option>
                                        <option value="69">Falkland Islands (Malvinas)</option>
                                        <option value="70">Faroe Islands</option>
                                        <option value="71">Fiji</option>
                                        <option value="72">Finland</option>
                                        <option value="73">France</option>
                                        <option value="74">France, Metropolitan</option>
                                        <option value="75">French Guiana</option>
                                        <option value="76">French Polynesia</option>
                                        <option value="77">French Southern Territories</option>
                                        <option value="78">Gabon</option>
                                        <option value="79">Gambia</option>
                                        <option value="80">Georgia</option>
                                        <option value="81">Germany</option>
                                        <option value="82">Ghana</option>
                                        <option value="83">Gibraltar</option>
                                        <option value="84">Guernsey</option>
                                        <option value="85">Greece</option>
                                        <option value="86">Greenland</option>
                                        <option value="87">Grenada</option>
                                        <option value="88">Guadeloupe</option>
                                        <option value="89">Guam</option>
                                        <option value="90">Guatemala</option>
                                        <option value="91">Guinea</option>
                                        <option value="92">Guinea-Bissau</option>
                                        <option value="93">Guyana</option>
                                        <option value="94">Haiti</option>
                                        <option value="95">Heard and Mc Donald Islands</option>
                                        <option value="96">Honduras</option>
                                        <option value="97">Hong Kong</option>
                                        <option value="98">Hungary</option>
                                        <option value="99">Iceland</option>
                                        <option value="100">India</option>
                                        <option value="101">Isle of Man</option>
                                        <option value="102">Indonesia</option>
                                        <option value="103">Iran (Islamic Republic of)</option>
                                        <option value="104">Iraq</option>
                                        <option value="105">Ireland</option>
                                        <option value="106">Israel</option>
                                        <option value="107">Italy</option>
                                        <option value="108">Ivory Coast</option>
                                        <option value="109">Jersey</option>
                                        <option value="110">Jamaica</option>
                                        <option value="111">Japan</option>
                                        <option value="112">Jordan</option>
                                        <option value="113">Kazakhstan</option>
                                        <option value="114">Kenya</option>
                                        <option value="115">Kiribati</option>
                                        <option value="116">Korea, Democratic People's Republic of</option>
                                        <option value="117">Korea, Republic of</option>
                                        <option value="118">Kosovo</option>
                                        <option value="119">Kuwait</option>
                                        <option value="120">Kyrgyzstan</option>
                                        <option value="121">Lao People's Democratic Republic</option>
                                        <option value="122">Latvia</option>
                                        <option value="123">Lebanon</option>
                                        <option value="124">Lesotho</option>
                                        <option value="125">Liberia</option>
                                        <option value="126">Libyan Arab Jamahiriya</option>
                                        <option value="127">Liechtenstein</option>
                                        <option value="128">Lithuania</option>
                                        <option value="129">Luxembourg</option>
                                        <option value="130">Macau</option>
                                        <option value="131">North Macedonia</option>
                                        <option value="132">Madagascar</option>
                                        <option value="133">Malawi</option>
                                        <option value="134">Malaysia</option>
                                        <option value="135">Maldives</option>
                                        <option value="136">Mali</option>
                                        <option value="137">Malta</option>
                                        <option value="138">Marshall Islands</option>
                                        <option value="139">Martinique</option>
                                        <option value="140">Mauritania</option>
                                        <option value="141">Mauritius</option>
                                        <option value="142">Mayotte</option>
                                        <option value="143">Mexico</option>
                                        <option value="144">Micronesia, Federated States of</option>
                                        <option value="145">Moldova, Republic of</option>
                                        <option value="146">Monaco</option>
                                        <option value="147">Mongolia</option>
                                        <option value="148">Montenegro</option>
                                        <option value="149">Montserrat</option>
                                        <option value="150">Morocco</option>
                                        <option value="151">Mozambique</option>
                                        <option value="152">Myanmar</option>
                                        <option value="153">Namibia</option>
                                        <option value="154">Nauru</option>
                                        <option value="155">Nepal</option>
                                        <option value="156">Netherlands</option>
                                        <option value="157">Netherlands Antilles</option>
                                        <option value="158">New Caledonia</option>
                                        <option value="159">New Zealand</option>
                                        <option value="160">Nicaragua</option>
                                        <option value="161">Niger</option>
                                        <option value="162">Nigeria</option>
                                        <option value="163">Niue</option>
                                        <option value="164">Norfolk Island</option>
                                        <option value="165">Northern Mariana Islands</option>
                                        <option value="166">Norway</option>
                                        <option value="167">Oman</option>
                                        <option value="168">Pakistan</option>
                                        <option value="169">Palau</option>
                                        <option value="170">Palestine</option>
                                        <option value="171">Panama</option>
                                        <option value="172">Papua New Guinea</option>
                                        <option value="173">Paraguay</option>
                                        <option value="174">Peru</option>
                                        <option value="175">Philippines</option>
                                        <option value="176">Pitcairn</option>
                                        <option value="177">Poland</option>
                                        <option value="178">Portugal</option>
                                        <option value="179">Puerto Rico</option>
                                        <option value="180">Qatar</option>
                                        <option value="181">Reunion</option>
                                        <option value="182">Romania</option>
                                        <option value="183">Russian Federation</option>
                                        <option value="184">Rwanda</option>
                                        <option value="185">Saint Kitts and Nevis</option>
                                        <option value="186">Saint Lucia</option>
                                        <option value="187">Saint Vincent and the Grenadines</option>
                                        <option value="188">Samoa</option>
                                        <option value="189">San Marino</option>
                                        <option value="190">Sao Tome and Principe</option>
                                        <option value="191">Saudi Arabia</option>
                                        <option value="192">Senegal</option>
                                        <option value="193">Serbia</option>
                                        <option value="194">Seychelles</option>
                                        <option value="195">Sierra Leone</option>
                                        <option value="196">Singapore</option>
                                        <option value="197">Slovakia</option>
                                        <option value="198">Slovenia</option>
                                        <option value="199">Solomon Islands</option>
                                        <option value="200">Somalia</option>
                                        <option value="201">South Africa</option>
                                        <option value="202">South Georgia South Sandwich Islands</option>
                                        <option value="203">South Sudan</option>
                                        <option value="204">Spain</option>
                                        <option value="205">Sri Lanka</option>
                                        <option value="206">St. Helena</option>
                                        <option value="207">St. Pierre and Miquelon</option>
                                        <option value="208">Sudan</option>
                                        <option value="209">Suriname</option>
                                        <option value="210">Svalbard and Jan Mayen Islands</option>
                                        <option value="211">Swaziland</option>
                                        <option value="212">Sweden</option>
                                        <option value="213">Switzerland</option>
                                        <option value="214">Syrian Arab Republic</option>
                                        <option value="215">Taiwan</option>
                                        <option value="216">Tajikistan</option>
                                        <option value="217">Tanzania, United Republic of</option>
                                        <option value="218">Thailand</option>
                                        <option value="219">Togo</option>
                                        <option value="220">Tokelau</option>
                                        <option value="221">Tonga</option>
                                        <option value="222">Trinidad and Tobago</option>
                                        <option value="223">Tunisia</option>
                                        <option value="224">Turkey</option>
                                        <option value="225">Turkmenistan</option>
                                        <option value="226">Turks and Caicos Islands</option>
                                        <option value="227">Tuvalu</option>
                                        <option value="228">Uganda</option>
                                        <option value="229">Ukraine</option>
                                        <option value="230">United Arab Emirates</option>
                                        <option value="231">United Kingdom</option>
                                        <option value="232" selected="">United States</option>
                                        <option value="233">United States minor outlying islands</option>
                                        <option value="234">Uruguay</option>
                                        <option value="235">Uzbekistan</option>
                                        <option value="236">Vanuatu</option>
                                        <option value="237">Vatican City State</option>
                                        <option value="238">Venezuela</option>
                                        <option value="239">Vietnam</option>
                                        <option value="240">Virgin Islands (British)</option>
                                        <option value="241">Virgin Islands (U.S.)</option>
                                        <option value="242">Wallis and Futuna Islands</option>
                                        <option value="243">Western Sahara</option>
                                        <option value="244">Yemen</option>
                                        <option value="245">Zambia</option>
                                        <option value="246">Zimbabwe</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 397.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-customer_country_id-2y-container"><span class="select2-selection__rendered" id="select2-customer_country_id-2y-container" title="United States">United States</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Address *</label>
                                    <input type="text" class="form-control" value="4706 Romrog Way" name="customer_address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">State *</label>
                                    <input type="text" class="form-control" value="NE" name="customer_state">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">City *</label>
                                    <input type="text" class="form-control" value="Kearney" name="customer_city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Zip Code *</label>
                                    <input type="text" class="form-control" value="68847" name="customer_zip">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="form1">Update Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection