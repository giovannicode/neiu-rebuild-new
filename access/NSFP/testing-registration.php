<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/includes/banner.html');
include($root . '/includes/mainNavigation.html');
include($root . '/access/NSFP/includes/departmentBanner.html');
include($root . '/access/NSFP/includes/sidebar.html');
?>

     <!--**************************************************************************************
 
                               MAIN CONTENT
 
     ***************************************************************************************-->
         <!--AAA__MAINCONTENT START-->
     <div class="departmentMainContent">           
  
	            
  <div class="subPageBanner">
	        
	        <!--CCC_LANDINDPAGEHEADER START-->
	        <h2 class="departmentPageHeader">Testing</h2>
	        <!--CCC_LANDINDPAGEHEADER END-->
	        
	     
	     </div>
	     <!--BBB__SUBPAGEBANNER_ END--> 
	        
	        <span width="500px" height="1px" style="border-bottom: 2px solid #00437a; display: block; clear: both; margin-top: 40px;"></span>
	        <span width="300px" height="1px" style="border-bottom: 2px solid #fdb900; display: block; clear: both; margin-top: 5px;"></span>
        
           



        <!--BBB__SUBPAGECONTENT START-->
        <div class="subPageContent">
  <h3>Testing Registration Form</h3>


<p>Please fill out the top portion of the form completely and then choose a testing date.</p>

     
     
<script src="http://cdn.jotfor.ms/static/jotform.js?3.1.832" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"field":"53","visibility":"Show"}],"index":"0","link":"Any","priority":"0","terms":[{"field":"51","operator":"equals","value":"Yes"}],"type":"field"}]);
   JotForm.init(function(){
      JotForm.description('input_1', 'Your student ID number is a six-digit number that can be found on your acceptance letter.');
      $('input_10').hint('ex: myname@example.com');
   });
</script>
<link href="http://cdn.jotfor.ms/static/formCss.css?3.1.832" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/nova.css?3.1.832" />
<link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.1.832" />
<style type="text/css">
    .form-label{
        width:165px !important;
    }
    .form-label-left{
        width:165px !important;
    }
    .form-line{
        padding-top:6px;
        padding-bottom:6px;
    }
    .form-label-right{
        width:165px !important;
    }
    .form-all{
        width:600px;
        color:#282828 !important;
        font-family:'Verdana';
        font-size:12px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:#282828;
    }

    /* Injected CSS Code */
.form-line{
padding-left: 1px;
}
.form-dropdown {
font-size: 1em !important;
}
.heading{
color:white;
background-color:#0A5397;
font-size:14px;
padding: 3px 0 3px 3px;
margin-bottom:2px;
margin-top:2px;
}
#label_54 {display:none;}
/** Table Styles **/
table {width:300px;}
td {
width:50%;
vertical-align:top;
}
    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="http://jotformpro.com/css/styles/buttons/form-submit-button-book_blue2.css?3.1.832"/>
<form class="jotform-form" action="http://submit.jotformpro.com/submit/23535129329960/" method="post" name="form_23535129329960" id="23535129329960" accept-charset="utf-8">
  <input type="hidden" name="formID" value="23535129329960" />
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line form-line-column form-line-column-clear" id="id_1">
        <label class="form-label-left" id="label_1" for="input_1">
          Student ID Number<span class="form-required">*</span>
        </label>
        <div id="cid_1" class="form-input">
          <input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_1" name="q1_studentId" size="9" maxlength="6" />
        </div>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-left" id="label_5" for="input_5">
          Full Name<span class="form-required">*</span>
        </label>
        <div id="cid_5" class="form-input"><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="q5_fullName5[first]" id="first_5" />
            <label class="form-sub-label" for="first_5" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="q5_fullName5[middle]" id="middle_5" />
            <label class="form-sub-label" for="middle_5" id="sublabel_middle"> Middle Name </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="15" name="q5_fullName5[last]" id="last_5" />
            <label class="form-sub-label" for="last_5" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line" id="id_9">
        <label class="form-label-left" id="label_9" for="input_9">
          Phone Number<span class="form-required">*</span>
        </label>
        <div id="cid_9" class="form-input"><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="tel" name="q9_phoneNumber9[area]" id="input_9_area" size="3">
            -
            <label class="form-sub-label" for="input_9_area" id="sublabel_area"> Area Code </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="tel" name="q9_phoneNumber9[phone]" id="input_9_phone" size="8">
            <label class="form-sub-label" for="input_9_phone" id="sublabel_phone"> Phone Number </label></span>
        </div>
      </li>
      <li class="form-line" id="id_50">
        <label class="form-label-left" id="label_50" for="input_50">
          Mailing Address<span class="form-required">*</span>
        </label>
        <div id="cid_50" class="form-input">
          <table summary="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-line" type="text" name="q50_mailingAddress[addr_line1]" id="input_50_addr_line1" />
                  <label class="form-sub-label" for="input_50_addr_line1" id="sublabel_50_addr_line1"> Street Address </label></span>
              </td>
            </tr>
            <tr>
              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox form-address-line" type="text" name="q50_mailingAddress[addr_line2]" id="input_50_addr_line2" size="46" />
                  <label class="form-sub-label" for="input_50_addr_line2" id="sublabel_50_addr_line2"> Street Address Line 2 </label></span>
              </td>
            </tr>
            <tr>
              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-city" type="text" name="q50_mailingAddress[city]" id="input_50_city" size="21" />
                  <label class="form-sub-label" for="input_50_city" id="sublabel_50_city"> City </label></span>
              </td>
              <td><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-state" type="text" name="q50_mailingAddress[state]" id="input_50_state" size="22" />
                  <label class="form-sub-label" for="input_50_state" id="sublabel_50_state"> State / Province </label></span>
              </td>
            </tr>
            <tr>
              <td width="50%" function zip(){var iterator=Prototype.K,args=$A(arguments);if(Object.isFunction(args.last())) iterator=args.pop();var collections=[this].concat(args).map($A);return this.map(function(value,index){return iterator(collections.pluck(index));});}><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-postal" type="text" name="q50_mailingAddress[postal]" id="input_50_postal" size="10" />
                  <label class="form-sub-label" for="input_50_postal" id="sublabel_50_postal"> Postal / Zip Code </label></span>
              </td>
              <td><span class="form-sub-label-container"><select class="form-dropdown validate[required] form-address-country" name="q50_mailingAddress[country]" id="input_50_country">
                    <option value="" selected> Please Select </option>
                    <option selected="selected" value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="People's Republic of China"> People's Republic of China </option>
                    <option value="Republic of China"> Republic of China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="Swaziland"> Swaziland </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_50_country" id="sublabel_50_country"> Country </label></span>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" id="id_10">
        <label class="form-label-left" id="label_10" for="input_10">
          E-mail<span class="form-required">*</span>
        </label>
        <div id="cid_10" class="form-input">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_10" name="q10_email10" size="30" />
        </div>
      </li>
      <li class="form-line" id="id_51">
        <label class="form-label-left" id="label_51" for="input_51"> Do you need wheelchair access?<span class="form-required">*</span> 
		</label>
        <div id="cid_51" class="form-input">
          <select class="form-dropdown" style="width:65px" id="input_51" name="q51_willYou51">
            <option value="">  </option>
            <option value="Yes"> Yes </option>
            <option value="No"> No </option>
          </select>
        </div>
      </li>
      <li class="form-line" id="id_53">
        <label class="form-label-top" id="label_53" for="input_53"> Please contact Student Disability Services at (773) 442-4595 or sds@neiu.edu if you require additional accommodations. </label>
        <div id="cid_53" class="form-input-wide">
          <textarea id="input_53" class="form-textarea" name="q53_pleaseExplain" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" id="id_55">
        <div id="cid_55" class="form-input-wide">
          <div id="text_55" class="form-html">
            <p>
              <strong>Please select a date:</strong>
            </p>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_54">
        <label class="form-label-top" id="label_54" for="input_54">
          Testing Date<span class="form-required">*</span>
        </label>
        <div id="cid_54" class="form-input-wide">
          <select class="form-dropdown validate[required]" style="width:450px" id="input_54" name="q54_pleaseSelect">
            <option value="">  </option>
            <!--<option value="Wednesday, June 5, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Wednesday, June 5, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <option value="Saturday, June 15, 2013 (Math: 9:00 am/English: 10:20 am - LWH 1001)"> Saturday, June 15, 2013 (Math: 9:00 am/English: 10:20 am - LWH 1001) </option>-->
            <option value="Wednesday, June 26, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Wednesday, June 26, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <option value="Friday, June 28, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Friday, June 28, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <option value="Monday, July 8, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Monday, July 8, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <option value="Wednesday, July 17, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Wednesday, July 17, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <option value="Saturday, July 20, 2013 (Math: 9:00 am/English: 10:20 am - LWH 1001)"> Saturday, July 20, 2013 (Math: 9:00 am/English: 10:20 am - LWH 1001) </option>
            <option value="Friday, July 26, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Friday, July 26, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <!--<option value="Friday, August 2, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Friday, August 2, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>
            <option value="Wednesday, August 14, 2013 (Math: Noon/English: 1:20 pm - LWH 1001)"> Wednesday, August 14, 2013 (Math: Noon/English: 1:20 pm - LWH 1001) </option>-->
          </select>
        </div>
      </li>
      <li class="form-line" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-book_blue2">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="23535129329960" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "23535129329960-23535129329960";
  </script>
</form>


   
        </div> 
        <!--__SUBPAGECONTENT END -->
   
     </div>
     <!--AAA__MAINCONTENT END-->
     
    </div>
     <!-- marginerD -->
     


<?php

include($root . '/includes/footer.html');

?>