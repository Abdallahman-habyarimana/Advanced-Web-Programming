!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
  <head> 
    <meta http-equiv="content-type" content="text/xhtml; charset=utf-8" /> 
    <title>Dynamic Select Statements</title> 
<script type="text/javascript">
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var countryLists = new Array(4) 
 countryLists["empty"] = ["Select a Country"]; 
 countryLists["KIGALI"] = ["KIGALI", "NYARUGENGE", "GASABO"]; 
 countryLists["EAST"] = ["NYAGATARE", "RWAMAGANA", "BUGESERA"]; 
 countryLists["Asia"] = ["Russia", "China", "Japan"]; 
 countryLists["Europe"]= ["Britain", "France", "Spain", "Germany"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("country"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>
</script>
</head>
<body>
  <noscript>This page requires JavaScript be available and enabled to function properly</noscript>
  <h1>Dynamic Select Statements</h1>
  <label for="continent">Select Continent</label>
  <select id="continent" onchange="countryChange(this);">
    <option value="empty">Select a Continent</option>
    <option value="KIGALI">KIGALI</option>
    <option value="EAST">EAST</option>
    <option value="SOUTH">SOUTH</option>
    <option value="NORTH">NORTH</option>
     <option value="WEST">WEST</option>
  </select>
  <br/>
  <label for="province">Select a country</label>
  <select id="district">
    <option value="0">Select a country</option>
  </select>
  <label for="country">Select a sector</label>
  <select id="country">
    <option value="0">Select a sector</option>
  </select>
</body>
 </html>