@extends('welcome')

@section('content')
 <h1>index</h1>
 <?php
    $countries = array(
    "AF" => "Afghanistan",
    "AX" => "Aland Islands",
    "AL" => "Albania",
    "DZ" => "Algeria",
    "AS" => "American Samoa",
    "AD" => "Andorra",
    "AO" => "Angola",
    "AI" => "Anguilla",
    "AQ" => "Antarctica",
    "AG" => "Antigua and Barbuda",
    "AR" => "Argentina",
    "AM" => "Armenia",
    "AW" => "Aruba",
    "AU" => "Australia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BS" => "Bahamas",
    "BH" => "Bahrain",
    "BD" => "Bangladesh",
    "BB" => "Barbados",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BZ" => "Belize",
    "BJ" => "Benin",
    "BM" => "Bermuda",
    "BT" => "Bhutan",
    "BO" => "Bolivia",
    "BQ" => "Bonaire, Sint Eustatius and Saba",
    "BA" => "Bosnia and Herzegovina",
    "BW" => "Botswana",
    "BV" => "Bouvet Island",
    "BR" => "Brazil",
    "IO" => "British Indian Ocean Territory",
    "BN" => "Brunei Darussalam",
    "BG" => "Bulgaria",
    "BF" => "Burkina Faso",
    "BI" => "Burundi",
    "KH" => "Cambodia",
    "CM" => "Cameroon",
    "CA" => "Canada",
    "CV" => "Cape Verde",
    "KY" => "Cayman Islands",
    "CF" => "Central African Republic",
    "TD" => "Chad",
    "CL" => "Chile",
    "CN" => "China",
    "CX" => "Christmas Island",
    "CC" => "Cocos (Keeling) Islands",
    "CO" => "Colombia",
    "KM" => "Comoros",
    "CG" => "Congo",
    "CD" => "Congo, the Democratic Republic of the",
    "CK" => "Cook Islands",
    "CR" => "Costa Rica",
    "CI" => "Cote D'Ivoire",
    "HR" => "Croatia",
    "CU" => "Cuba",
    "CW" => "Curacao",
    "CY" => "Cyprus",
    "CZ" => "Czech Republic",
    "DK" => "Denmark",
    "DJ" => "Djibouti",
    "DM" => "Dominica",
    "DO" => "Dominican Republic",
    "EC" => "Ecuador",
    "EG" => "Egypt",
    "SV" => "El Salvador",
    "GQ" => "Equatorial Guinea",
    "ER" => "Eritrea",
    "EE" => "Estonia",
    "ET" => "Ethiopia",
    "FK" => "Falkland Islands (Malvinas)",
    "FO" => "Faroe Islands",
    "FJ" => "Fiji",
    "FI" => "Finland",
    "FR" => "France",
    "GF" => "French Guiana",
    "PF" => "French Polynesia",
    "TF" => "French Southern Territories",
    "GA" => "Gabon",
    "GM" => "Gambia",
    "GE" => "Georgia",
    "DE" => "Germany",
    "GH" => "Ghana",
    "GI" => "Gibraltar",
    "GR" => "Greece",
    "GL" => "Greenland",
    "GD" => "Grenada",
    "GP" => "Guadeloupe",
    "GU" => "Guam",
    "GT" => "Guatemala",
    "GG" => "Guernsey",
    "GN" => "Guinea",
    "GW" => "Guinea-Bissau",
    "GY" => "Guyana",
    "HT" => "Haiti",
    "HM" => "Heard Island and Mcdonald Islands",
    "VA" => "Holy See (Vatican City State)",
    "HN" => "Honduras",
    "HK" => "Hong Kong",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IN" => "India",
    "ID" => "Indonesia",
    "IR" => "Iran, Islamic Republic of",
    "IQ" => "Iraq",
    "IE" => "Ireland",
    "IM" => "Isle of Man",
    "IL" => "Israel",
    "IT" => "Italy",
    "JM" => "Jamaica",
    "JP" => "Japan",
    "JE" => "Jersey",
    "JO" => "Jordan",
    "KZ" => "Kazakhstan",
    "KE" => "Kenya",
    "KI" => "Kiribati",
    "KP" => "Korea, Democratic People's Republic of",
    "KR" => "Korea, Republic of",
    "XK" => "Kosovo",
    "KW" => "Kuwait",
    "KG" => "Kyrgyzstan",
    "LA" => "Lao People's Democratic Republic",
    "LV" => "Latvia",
    "LB" => "Lebanon",
    "LS" => "Lesotho",
    "LR" => "Liberia",
    "LY" => "Libyan Arab Jamahiriya",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MO" => "Macao",
    "MK" => "Macedonia, the Former Yugoslav Republic of",
    "MG" => "Madagascar",
    "MW" => "Malawi",
    "MY" => "Malaysia",
    "MV" => "Maldives",
    "ML" => "Mali",
    "MT" => "Malta",
    "MH" => "Marshall Islands",
    "MQ" => "Martinique",
    "MR" => "Mauritania",
    "MU" => "Mauritius",
    "YT" => "Mayotte",
    "MX" => "Mexico",
    "FM" => "Micronesia, Federated States of",
    "MD" => "Moldova, Republic of",
    "MC" => "Monaco",
    "MN" => "Mongolia",
    "ME" => "Montenegro",
    "MS" => "Montserrat",
    "MA" => "Morocco",
    "MZ" => "Mozambique",
    "MM" => "Myanmar",
    "NA" => "Namibia",
    "NR" => "Nauru",
    "NP" => "Nepal",
    "NL" => "Netherlands",
    "AN" => "Netherlands Antilles",
    "NC" => "New Caledonia",
    "NZ" => "New Zealand",
    "NI" => "Nicaragua",
    "NE" => "Niger",
    "NG" => "Nigeria",
    "NU" => "Niue",
    "NF" => "Norfolk Island",
    "MP" => "Northern Mariana Islands",
    "NO" => "Norway",
    "OM" => "Oman",
    "PK" => "Pakistan",
    "PW" => "Palau",
    "PS" => "Palestinian Territory, Occupied",
    "PA" => "Panama",
    "PG" => "Papua New Guinea",
    "PY" => "Paraguay",
    "PE" => "Peru",
    "PH" => "Philippines",
    "PN" => "Pitcairn",
    "PL" => "Poland",
    "PT" => "Portugal",
    "PR" => "Puerto Rico",
    "QA" => "Qatar",
    "RE" => "Reunion",
    "RO" => "Romania",
    "RU" => "Russian Federation",
    "RW" => "Rwanda",
    "BL" => "Saint Barthelemy",
    "SH" => "Saint Helena",
    "KN" => "Saint Kitts and Nevis",
    "LC" => "Saint Lucia",
    "MF" => "Saint Martin",
    "PM" => "Saint Pierre and Miquelon",
    "VC" => "Saint Vincent and the Grenadines",
    "WS" => "Samoa",
    "SM" => "San Marino",
    "ST" => "Sao Tome and Principe",
    "SA" => "Saudi Arabia",
    "SN" => "Senegal",
    "RS" => "Serbia",
    "CS" => "Serbia and Montenegro",
    "SC" => "Seychelles",
    "SL" => "Sierra Leone",
    "SG" => "Singapore",
    "SX" => "Sint Maarten",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "SB" => "Solomon Islands",
    "SO" => "Somalia",
    "ZA" => "South Africa",
    "GS" => "South Georgia and the South Sandwich Islands",
    "SS" => "South Sudan",
    "ES" => "Spain",
    "LK" => "Sri Lanka",
    "SD" => "Sudan",
    "SR" => "Suriname",
    "SJ" => "Svalbard and Jan Mayen",
    "SZ" => "Swaziland",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "SY" => "Syrian Arab Republic",
    "TW" => "Taiwan, Province of China",
    "TJ" => "Tajikistan",
    "TZ" => "Tanzania, United Republic of",
    "TH" => "Thailand",
    "TL" => "Timor-Leste",
    "TG" => "Togo",
    "TK" => "Tokelau",
    "TO" => "Tonga",
    "TT" => "Trinidad and Tobago",
    "TN" => "Tunisia",
    "TR" => "Turkey",
    "TM" => "Turkmenistan",
    "TC" => "Turks and Caicos Islands",
    "TV" => "Tuvalu",
    "UG" => "Uganda",
    "UA" => "Ukraine",
    "AE" => "United Arab Emirates",
    "GB" => "United Kingdom",
    "US" => "United States",
    "UM" => "United States Minor Outlying Islands",
    "UY" => "Uruguay",
    "UZ" => "Uzbekistan",
    "VU" => "Vanuatu",
    "VE" => "Venezuela",
    "VN" => "Viet Nam",
    "VG" => "Virgin Islands, British",
    "VI" => "Virgin Islands, U.s.",
    "WF" => "Wallis and Futuna",
    "EH" => "Western Sahara",
    "YE" => "Yemen",
    "ZM" => "Zambia",
    "ZW" => "Zimbabwe"
    )
    ?>
<html>
<head>

</head>
<body>
    {{Form::open(['method' => 'get'])}}
    <div class="personalInformation">
        <h2 id="personal">I. Personal Information</h2>
        <div class="card1">
            {{-- Form for name --}}
            {{Form::label('surname','SURNAME')}}
            {{Form::text('surname')}}<br>

            {{Form::label('firstname','FIRST NAME')}}
            {{Form::text('firstname')}}
            {{Form::text('nameExt','name ext')}}<br>

            {{Form::label('midname','MIDDLE NAME')}}
            {{Form::text('midname')}} <br>

            {{Form::label('birthdate','BIRTHDATE')}}
            {{Form::date('birthdate')}}

            {{Form::label('sex','SEX')}}
            {{Form::select('sex', ['male' => 'MALE', 'female' => 'FEMALE'],null, ['placeholder' => ''])}}<br>

            {{Form::label('placeofBirth','PLACE OF BIRTH')}}
            {{Form::text('placeofBirth')}} <br>

            {{Form::label('civilStatus','CIVIL STATUS')}}
            {{Form::select('sex', ['single' => 'SINGLE', 'widowed' => 'Widowed', 'married' => 'Married', 'separated' => 'Separated', 'others' => 'Other/s'],null, ['placeholder' => ''])}}<br>

            {{Form::label('height','HEIGHT')}}
            {{Form::number('height')}}

            {{Form::label('weight','WEIGHT')}}
            {{Form::number('weight')}}<br>

            {{Form::label('bloodType','BLOODTYPE')}}
            {{Form::text('placeofBirth')}}
        </div>
        <div class="card2">
            {{-- Form for government id's --}}
            {{Form::label('gsisno','GSIS No.')}}
            {{Form::number('gsisno')}}<br>

            {{Form::label('pagibigno','PAG-IBIG No.')}}
            {{Form::number('pagibigno')}}<br>

            {{Form::label('philhealthno','PHILHEALTH No.')}}
            {{Form::number('philhealthno')}}<br>

            {{Form::label('sssno','PAG-IBIG No.')}}
            {{Form::number('sssno')}}<br>

            {{Form::label('tinno','TIN No.')}}
            {{Form::number('tinno')}}<br>

            {{Form::label('agencyemp','AGENCY EMPLOYEE No.')}}
            {{Form::number('agencyemp')}}<br>

        </div>
        <div class="card3">
            {{-- 3rd card for c1 form --}}
            {{Form::label('citizenship','CITIZENSHIP')}}

            {{Form::radio('filipino', 'Filipino')}}
            {{Form::label('filipino','FILIPINO')}}

            {{Form::radio('dualCitizen', 'Dual Citizenship') }}
            {{Form::label('dualCitizen','DUAL CITIZENSHIP')}}<br>

            {{Form::radio('byBirth', 'By Birth') }}
            {{Form::label('byBirth','BY BIRTH')}}

            {{Form::radio('byNaturalization', 'By Naturalization') }}
            {{Form::label('byNaturalization','BY NATURALIZATION')}}<Br>

            {{Form::label('Pls. indicate country')}}
            {{Form::select('country',  $countries, null, ['class' => 'form-control', 'placeholder' => 'Select Country...'])}}<br>

            {{-- residential address --}}
            <b>{{Form::label('residential-address', 'Residential Address')}}<br></b>
            {{Form::text('resitdential-address', null, array('class' => 'form-control','id' => 'houseno-R','placeholder' => 'House/Block/Lot No.')) }}
            {{Form::text('resitdential-address', null, array('class' => 'form-control','id' => 'street-R','placeholder' => 'Street')) }}
            {{Form::text('resitdential-address', null, array('class' => 'form-control','id' => 'subdivillage-R','placeholder' => 'Subdivision/Village')) }} <br>
            {{Form::text('resitdential-address', null, array('class' => 'form-control','id' => 'barangay-R','placeholder' => 'Barangay')) }}
            {{Form::text('resitdential-address', null, array('class' => 'form-control','id' => 'City/Municipality-R','placeholder' => 'City/Municipality')) }}
            {{Form::text('resitdential-address', null, array('class' => 'form-control','id' => 'province-R','placeholder' => 'Province')) }}<br>
            {{Form::number('resitdential-address', null, array('class' => 'form-control','id' => 'zipcode-R','placeholder' => 'Zip Code')) }}<BR>

            <b>{{Form::label('permanent-address', 'Permanent Address')}}<br></b>
            {{Form::text('permanent-address', null, array('class' => 'form-control','id' => 'houseno-P','placeholder' => 'House/Block/Lot No.')) }}
            {{Form::text('permanent-address', null, array('class' => 'form-control','id' => 'street-P','placeholder' => 'Street')) }}
            {{Form::text('permanent-address', null, array('class' => 'form-control','id' => 'subdivillage-P','placeholder' => 'Subdivision/Village')) }} <br>
            {{Form::text('permanent-address', null, array('class' => 'form-control','id' => 'barangay-P','placeholder' => 'Barangay')) }}
            {{Form::text('permanent-address', null, array('class' => 'form-control','id' => 'City/Municipality-P','placeholder' => 'City/Municipality')) }}
            {{Form::text('permanent-address', null, array('class' => 'form-control','id' => 'province-P','placeholder' => 'Province')) }}<br>
            {{Form::number('permanent-address', null, array('class' => 'form-control','id' => 'zipcode-P','placeholder' => 'Zip Code')) }}<br>

            {{-- contact information --}}
            <b>{{Form::label('telno','Tel No.')}}
            {{Form::label('mobno', 'Mobile No.')}}
            {{Form::label('email', 'E-mail Address')}}<br>
            </b>
            {{Form::text('telno')}}
            {{Form::text('mobno')}}
            {{Form::email('email')}}

            <h2 id="family">II. Family Background</h2>




        </div>
    </div>


    {{Form::submit('NEXT PAGE')}}
    {{Form::close()}}
</body>
</html>
