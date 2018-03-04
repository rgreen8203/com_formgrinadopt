<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_formgrinadopt
 *
 * @copyright
 * @license 
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.core');
JHtml::_('behavior.keepalive');
?>




<form id="grinform" onsubmit="return false">

 
<!---------------------------------------- 
    SECTION START
------------------------------------------> 
 <!-- start show hide agreement -->
<div id="tg_agreement">

<div class="sectionarea">
Agreement</div> 

<div class="pleasenote">

<div class="questionarea">
<p class="question">
<ol>
	<li>I am at least 21 years of age</li>
	<li>I have read the adoption policy</li>
	<li>I am in the adoption area</li>
</ol>
</p>
</div> <!-- end questionarea -->

</div> <!-- end pleasenote -->

<div class="buttonarea" id="okwithme">
<div class="button" onclick="iagree()">I Agree</div>
</div>

<br><br>
<!-- instructions if JavaScript is not enabled -->
<noscript>
<div class="pleasenote">
 For full functionality of this site it is necessary to enable JavaScript.
 Here are the <a href="https://www.wikihow.com/Enable-JavaScript" target="_blank">
  instructions </a> to enable JavaScript in your web browser.
  </div>
</noscript>
</div>
<!-- end show hide agreement -->


<!-- start show hide until agreement is confirmed -->
<div id="wholeform">

<!---------------------------------------- 
    SECTION START
------------------------------------------>

<br>
<div class="pleasenote">
<div class="questionarea">
<label for="apptype" class="lbltag">Request Type</label>
<input type="radio" name="apptype" value="Adopt" checked>Adopt
<input type="radio" name="apptype" value="Foster">Foster
</div>
</div> <!-- end pleasenote -->

<div class="sectionarea">
About You</div> 

<div class="questionarea">
<label for="r1name" class="lbltag">Name</label>
<input type="text" name="r1name" id="r1name"  size="50"><br>
</div>

<div class="questionareasub">
<label for="r1address1" class="lbltag">Address1</label>
<input type="text" name="r1address1" id="r1address1"   size="50">
</div>

<div class="questionareasub">
<label for="r1address2" class="lbltag">Address2</label>
<input type="text" name="r1address2" id="r1address2"  size="50">
</div>

<div class="questionareasub">
<label for="r1city" class="lbltag">City</label>
<input type="text" name="r1city" id="r1city"   size="20">
</div>

<div class="questionareasub">
<label for="r1state" class="lbltag">State</label>
<select id="r1state" name="r1state">
<option value="OH">OH</option>
<option value="PA">PA</option>
<option value="NY">NY</option>
</select>
</div>

<div class="questionareasub">
<label for="r1zip" class="lbltag">Zip Code</label>
<input type="text" name="r1zip" id="r1zip" onblur="numOnly(this)"  size="5">
</div>


<div class="questionareasub">
<label for="r1age" class="lbltag">Age</label>
<input type="text" name="r1age" id="r1age"  size="3">
</div>

<div class="questionareasub">
<label for="r1employer" class="lbltag">Employer</label>
<input type="text" name="r1employer" id="r1employer"  size="50">
</div>

<div class="questionareasub">
<label for="r1occupation" class="lbltag">Occupation</label>
<input type="text" name="r1occupation" id="r1occupation"  size="50">
</div>

<div class="questionareasub">
<label for="r1workhours" class="lbltag">Work Hours</label>
<input type="text" class="inputstl" name="r1workhours" id="r1workhours" size="50">
</div>

<div class="questionareasub">
<label for="r1phone1" class="lbltag">Phone 1st</label>
<input type="text" class="inputstl" name="r1phone1" id="r1phone1" onblur="numOnly(this)" size="15">
</div>

<div class="questionareasub">
<label for="r1phonetype" class="lbltag">Phone 1 Type</label>
<select id="r1phonetype" name="r1phonetype">
<option value="Home">Home</option>
<option value="Cell">Cell</option>
<option value="Work">Work</option>
</select>
</div>


<div class="questionareasub">
<label for="r1phone2" class="lbltag">Phone 2nd</label>
<input type="text" class="inputstl" name="r1phone2" id="r1phone2" onblur="numOnly(this)" size="15">
</div>

<div class="questionareasub">
<label for="r1phone3" class="lbltag">Phone 3rd</label>
<input type="text" class="inputstl" name="r1phone3" id="r1phone3" onblur="numOnly(this)" size="15">
</div>

<div class="questionarea">
<p class="question">Is anyone home during the day?</p>
<input type="radio" name="athome" value="Yes" checked>Yes
<input type="radio" name="athome" value="No" >No
</div>

<div class="questionarea">
<p class="question">Do you have a co-applicant?</p>
<input type="radio" name="coap" value="Yes" onclick="showobj('tg_coapplicant')" >Yes
<input type="radio" name="coap" value="No"  onclick="hideobj('tg_coapplicant')" checked>No
</div>

  <p class="showmore">+++</p>

<!---------------------------------------- 
    SECTION START
------------------------------------------>

 <!-- start show hide co-ap -->
<div id="tg_coapplicant"> 

<div class="sectionarea">
About Your Co-applicant</div>
 
<div class="questionarea">
<label for="r2name" class="lbltag">Name</label>
<input type="text" name="r2name" id="r2name"  size="50"><br>
</div>

<div class="questionareasub">
<label for="r2address1" class="lbltag">Address1</label>
<input type="text" name="r2address1" id="r2address1"   size="50">
</div>

<div class="questionareasub">
<label for="r2address2" class="lbltag">Address2</label>
<input type="text" name="r2address2" id="r2address2"  size="50">
</div>

<div class="questionareasub">
<label for="r2city" class="lbltag">City</label>
<input type="text" name="r2city" id="r2city"   size="20">
</div>

<div class="questionareasub">
<label for="r2state" class="lbltag">State</label>
<select id="r2state" name="r2state">
<option value="OH">OH</option>
<option value="PA">PA</option>
<option value="NY">NY</option>
</select>
</div>

<div class="questionareasub">
<label for="r2zip" class="lbltag">Zip Code</label>
<input type="text" name="r2zip" id="r2zip" onblur="numOnly(this)"  size="5">
</div>


<div class="questionareasub">
<label for="r2age" class="lbltag">Age</label>
<input type="text" name="r2age" id="r2age"  size="3">
</div>

<div class="questionareasub">
<label for="r2employer" class="lbltag">Employer</label>
<input type="text" name="r2employer" id="r2employer"  size="50">
</div>

<div class="questionareasub">
<label for="r2occupation" class="lbltag">Occupation</label>
<input type="text" name="r2occupation" id="r2occupation"  size="50">
</div>

<div class="questionareasub">
<label for="r2workhours" class="lbltag">Work Hours</label>
<input type="text" class="inputstl" name="r2workhours" id="r2workhours" size="50">
</div>

<div class="questionareasub">
<label for="r2phone1" class="lbltag">Phone 1st</label>
<input type="text" class="inputstl" name="r2phone1" id="r2phone1" onblur="numOnly(this)" size="15">
</div>

<div class="questionareasub">
<label for="r2phonetype" class="lbltag">Phone 1 Type</label>
<select id="r2phonetype" name="r2phonetype">
<option value="Home">Home</option>
<option value="Cell">Cell</option>
<option value="Work">Work</option>
</select>
</div>


<div class="questionareasub">
<label for="r2phone2" class="lbltag">Phone 2nd</label>
<input type="text" class="inputstl" name="r2phone2" id="r2phone2" onblur="numOnly(this)" size="15">
</div>

<div class="questionareasub">
<label for="r2phone3" class="lbltag">Phone 3rd</label>
<input type="text" class="inputstl" name="r2phone3" id="r2phone3" onblur="numOnly(this)" size="15">
</div>

</div>
<!-- end show hide co-ap -->

<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
Background Information</div> 



<div class="questionarea">
<p class="question">Have you applied to GRIN before?</p>
 <input type="radio" name="appBefore" value="Yes" >Yes
   <input type="radio" name="appBefore" value="No" checked>No
</div>


<div class="pleasenote">
Bear in mind that the expense of maintaining a Golden Retriever is at least $800 per year
</div>



<div class="questionarea">
<p class="question">What is your household income?</p>
<select id="r1income" name="r1income">
<option value="blank"></option>
<option value="$5,000 to $20,000">$5,000 to $20,000</option>
<option value="$20,001 to $50,000">$20,001 to $50,000</option>
<option value="$50,001 to $100,000">$50,001 to $100,000</option>
<option value="Over $100,000">Over $100,000</option>
</select>
</div>

<div class="questionarea">
  <p class="question"> Are you a GRIN member?</p>
  <input type="radio" name="memhist" value="Never" onclick="memberNever()" checked>Never
  <input type="radio" name="memhist" value="Current" onclick="memberCurr()" >Current
  <input type="radio" name="memhist" value="Previous" onclick="memberPrev()">Previous
</div>  
  
  <!-- start show hide previous membership  -->
<div id="tg_prevmemdate"> 
  
<?php
$yearsBack=0;
$currYear = date("Y");

echo '<div class="questionarea">';
echo '<p class="question"> Last Membership year:</p>';
echo '  <select id="prevmemdate" name="prevmemdate">';
echo '<option value="blank"></option>';
 
while ($yearsBack < 5 )
{
  echo '<option value="' . $currYear . '">' . $currYear . '</option>';
  $yearsBack++;
  $currYear = ($currYear - 1);
}

echo '  <option value="other">other</option>';
echo '</select>';
echo '</div>';
?>

</div>
  <!-- end show hide previous membership  -->
  
 <!-- start show hide How did you hear  -->  
<div id="tg_hmethod">
<div class="questionarea">
<p class="question">How did you hear about GRIN?</p>
<select class="inputstl" id="hmethod" name="hmethod">
	<option value="blank"></option>
	<option value="From a friend">From a friend</option>
	<option value="Found our website">Found our website</option>
  <option value="Saw GRIN members at an event">Saw GRIN members at an event</option>
	<option value="Received GRIN promotional materials">Received GRIN promotional materials</option>	
	<option value="Other not listed">Other not listed</option>	
	</select>
</div>
</div>
  <!-- end show hide How did you hear  -->

<div class="questionarea">
<p class="question">Have you ever fostered for GRIN before?</p>
 <input type="radio" name="fosterBefore" value="Yes" checked>Yes
    <input type="radio" name="fosterBefore" value="No">No
</div>

<div class="questionarea">
<p class="question">Have you currently applied to another rescue (Golden Retriever or other)?</p>
<input type="radio" name="appliedOther" value="Yes" onclick="showobj('tg_appliedOther')">Yes
  <input type="radio" name="appliedOther" value="No" onclick="hideobj('tg_appliedOther')" checked>No
</div>

  <p class="showmore">+++</p>

 <!-- start show hide behavior issues -->
 <div id="tg_appliedOther"> 
<div class="questionarea">
<p class="question">When did you apply and what is the status?</p>
 <textarea name="appliedOtherdesc" id="appliedOtherdesc" rows="4"></textarea>
</div>
</div>
 <!-- end show hide behavior issues -->
 
 
<div class="questionarea">
<p class="question">When will you be ready to adopt/foster?</p>
<select id="afwhen" name="afwhen">
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
	</select>
</div>

<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
About Your Perfect Match</div> 


<div class="questionarea">
<p class="question">What age range will you consider?</p>
<select id="afage" name="afage">
	<option value="Any Age<">Any Age</option>
	<option value="Puppy to 4 years">Puppy to 4 years</option>
	<option value="4 - 8 Eight Years">4 - 8 Eight Years</option>
	<option value="Senior (8 years or older)">Senior (8 years or older)</option>
	</select>
</div>

<div class="questionarea">
<p class="question">Will you consider a mix?</p>
 <input type="radio" name="mixBreed" value="Yes" checked>Yes
  <input type="radio" name="mixBreed" value="No" >No
</div>

<div class="questionarea">
<p class="question">Gender Preference?</p>
 <input type="radio" name="afgender" value="Any" checked>Any
	<input type="radio" name="afgender" value="Female">Female
	<input type="radio" name="afgender" value="Male">Male
</div>

<div class="questionarea">
<p class="question">Color Preference?</p>
<input type="radio" name="afcolor" value="Any" checked>Any
	<input type="radio" name="afcolor" value="Gold">Gold
	<input type="radio" name="afcolor" value="Red">Red
</div>

<div class="questionarea">
<p class="question">Will you consider a 'special needs' Golden?</p>
 <input type="radio" name="afspecial" value="Yes" >Yes
	<input type="radio" name="afspecial" value="No">No
	<input type="radio" name="afspecial" value="Maybe" checked>Maybe
</div>

<div class="questionarea">
<p class="question">Will you consider a Golden Mix?</p>
<input type="radio" name="afmix" value="Yes" >Yes
	<input type="radio" name="afmix" value="No">No
	<input type="radio" name="afmix" value="Maybe" checked>Maybe
</div>

<div class="questionarea">
<p class="question">Will you consider a pair of Goldens (usually surrendered together)?</p>
<input type="radio" name="afpair" value="Yes" >Yes
	<input type="radio" name="afpair" value="No">No
	<input type="radio" name="afpair" value="Maybe" checked>Maybe
</div>

<div class="questionarea">
<p class="question">Have you owned a dog before as an adult?</p>
<input type="radio" name="afowned" value="Yes">Yes
	<input type="radio" name="afowned" value="No"  checked>No
</div>

<div class="questionarea">
<p class="question">Has any dog you owned had behavior, temperament, or medical issues?</p>
<input type="radio" name="afbehavior" value="Yes"  onclick="showobj('tg_afbehavior')" >Yes
	<input type="radio" name="afbehavior" value="No" onclick="hideobj('tg_afbehavior')" checked>No
</div>

  <p class="showmore">+++</p>


 <!-- start show hide behavior issues -->
 <div id="tg_afbehavior"> 
 
<div class="questionarea">
<p class="question">Briefly describe the issue:</p>
 <textarea name="afbehaviortext" id="afbehaviortext" rows="4"></textarea>
</div>
</div>
 <!-- end show hide behavior issues -->
 



<div class="questionarea">
  <p class="question">Have you owned a Golden Retriever before as an adult?</p>
  <input type="radio" name="ownedgolden" value="Yes" onclick="hideobj('tg_afresearch')" checked>Yes
  <input type="radio" name="ownedgolden" value="No"  onclick="showobj('tg_afresearch')">No
</div>

 <p class="showmore">+++</p>


 <!-- start show hide owned a golden -->
 <div id="tg_afresearch"> 
 
<div class="questionarea">
<p class="question">If you have NOT owned a Golden Retriever before, please briefly describe the research you have done about the breed and let us know why you have chosen to rescue a Golden</p>
<textarea name="afresearch" id="afresearch" rows="4"></textarea>
</div>

</div>
 <!-- end show hide owned a golden -->
 
 

<div class="questionarea">
<p class="question">Have you ever rescued a dog before?</p>
<input type="radio" name="afrescue" value="Yes" onclick="showobj('tg_rescue')">Yes
	<input type="radio" name="afrescue" value="No" onclick="hideobj('tg_rescue')" checked>No
</div>

 <p class="showmore">+++</p>
 
<!-- start show hide previous rescue --> 
<div id="tg_rescue">
<div class="questionarea">
<p class="question">Please explain the rescue type</p>
 <textarea name="rescuedesc" id="rescuedesc" rows="4">
Shelter, Rescue Organization, Self, etc
 </textarea>
</div>
</div>
<!-- end show hide previous rescue --> 

<div class="questionarea">
<p class="question">What activity level are you looking for?</p>
<select id="afactivitylevel" name="afactivitylevel">
	<option value="5_High">   High</option>
  <option value="4_MedHigh">Medium-High</option>
  <option value="3_Med">    Medium</option>
  <option value="2_MedLow"> Medium-Low</option>
  <option value="1_Low">    Low</option>
	</select>
</div>

<div class="questionarea">
<p class="question">What activities are you planning on doing with your Golden?</p>
 <textarea name="afactivities" id="afactivities" rows="4">
 Walking, running, hiking, agility, therapy, etc.</textarea>
</div>


<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
About Your Family and Household</div> 


<div class="questionarea">
  <p class="question">Please state the names, relationships and ages of all individuals in your household (excluding yourself and your co-applicant)</p>
 <textarea name="afindividuals" id="afindividuals" rows="4"></textarea> 
</div>

<div class="questionarea">
  <p class="question">If you do not have young children (under 10) in your household but there are young children who visit regularly, please give their ages and the frequency of their visits</p>
  <textarea name="afvisits" id="afvisits" rows="4"></textarea>
</div>

<div class="pleasenote">
Due to the many unknowns relative to rescue dogs, we do not place dogs in foster homes with children under 10 years old.
</div>

<div class="questionarea">
  <p class="question">Have your children or those that visit your home been raised with a dog?</p>
  <input type="radio" name="raisedwith" value="Yes" checked>Yes
  <input type="radio" name="raisedwith" value="No" >No
  <input type="radio" name="raisedwith" value="Not Applicable" checked>Not Applicable
</div>

<div class="questionarea">
  <p class="question">Have your children or those that visit your home been taught to respect a dog?</p>
  <input type="radio" name="respectdog" value="Yes" checked>Yes
  <input type="radio" name="respectdog" value="No" >No
  <input type="radio" name="respectdog" value="Not Applicable" checked>Not Applicable
</div>

<div class="questionarea">
<p class="question">Please describe your children's behavior around dogs (are they afraid of jumping, do they play rough, etc)</p>
  <textarea name="childbehavior" id="childbehavior" rows="4"></textarea>
  </div>


<div class="questionarea">
<p class="question">Does anyone in your family have a physical or mental disability?</p>
  <input type="radio" name="disability" value="Yes" onclick="showobj('tg_disabilitydesc')" >Yes
  <input type="radio" name="disability" value="No"  onclick="hideobj('tg_disabilitydesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
 <!-- start show hide disability -->
<div id="tg_disabilitydesc">

<div class="questionarea">
<p class="question">Please describe the disability</p>
   <textarea name="disabilitydesc" id="disabilitydesc" rows="4"></textarea>
</div>

</div>
 <!-- end show hide disability -->
 
 

<div class="questionarea">
<p class="question">Does anyone in your family have allergies?</p>
<input type="radio" name="allergies" value="Yes"  onclick="showobj('tg_allergiesdesc')" >Yes
  <input type="radio" name="allergies" value="No"  onclick="hideobj('tg_allergiesdesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
 <!-- start show hide allergies -->
 <div id="tg_allergiesdesc">
 
<div class="questionarea">
<p class="question">Please describe the allergies</p>
  <textarea name="allergiesdesc" id="allergiesdesc" rows="4"></textarea>
</div>
</div>

 <!-- end show hide allergies -->
 
 

<div class="questionarea">
<p class="question">Do you run an in-home child day care?</p>
  <input type="radio" name="rundaycare" value="Yes" onclick="showobj('tg_daycarenum')" >Yes
  <input type="radio" name="rundaycare" value="No"  onclick="hideobj('tg_daycarenum')" checked>No
</div>

  <p class="showmore">+++</p>
  
 <!-- start show hide day care -->
  <div id="tg_daycarenum">
<div class="questionarea">
<p class="question">How many children are in your day care?</p>
 <input type="text" name="daycarenum" id="daycarenum" size="3">
</div>
</div>

 <!-- start show hide day care -->
 
 
<div class="questionarea">
  <p class="question">Do you run an in-home dog day care?</p>
  <input type="radio" name="runpetcare" value="Yes" onclick="showobj('tg_petcarenum')" >Yes
  <input type="radio" name="runpetcare" value="No"  onclick="hideobj('tg_petcarenum')" checked>No
</div>


  <!-- start show hide dog day care -->
  <div id="tg_petcarenum">  
<div class="questionarea">
  <p class="question">How many dogs are in your pet care?</p>
  <input type="text" name="petcarenum" id="petcarenum" size="3">
</div>
</div>
  <!-- end show hide dog day care -->
  
  <p class="showmore">+++</p>  
  
<div class="questionarea">
<p class="question">Do you currently have pets in your home?</p>
  <input type="radio" name="currPets" value="Yes" onclick="showobj('tg_petdesc')" >Yes
  <input type="radio" name="currPets" value="No"  onclick="hideobj('tg_petdesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
  <!-- start show hide pets in home -->
<div id="tg_petdesc"> 

<div class="questionarea">
<p class="question">Please state the names, ages and types of all pets that are currently in your home, as well as describing their personalities and activity levels</p>
 <textarea name="petdesc" id="petdesc" rows="4"></textarea>
</div>


<div class="questionarea">
<p class="question">Are your current pets (dogs and cats only) spayed or neutered?</p>
  <input type="radio" name="cspayed" value="Yes"  onclick="hideobj('tg_cspayeddesc')" checked>Yes
    <input type="radio" name="cspayed" value="No" onclick="showobj('tg_cspayeddesc')">No
</div>
<!-- start show hide explaination -->
<div id="tg_cspayeddesc">
<div class="questionarea">
<p class="question">Please explain why no spay/neuter:</p>
 <textarea name="cspayeddesc" id="cspayeddesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->


<div class="questionarea">
<p class="question">Are your current pets up to date on their vaccinations?</p>
  <input type="radio" name="cvac" value="Yes" onclick="hideobj('tg_cvacdesc')" checked>Yes
  <input type="radio" name="cvac" value="No"  onclick="showobj('tg_cvacdesc')">No
</div>
<!-- start show hide explaination -->
<div id="tg_cvacdesc">
<div class="questionarea">
<p class="question">Please explain why no vaccinations:</p>
 <textarea name="cvacdesc" id="cvacdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->

<div class="questionarea">
<p class="question">Are your current pets up to date on their heartworm testing?</p>
  <input type="radio" name="chwtest" value="Yes" onclick="hideobj('tg_chwtestdesc')" checked>Yes
  <input type="radio" name="chwtest" value="No"  onclick="showobj('tg_chwtestdesc')">No
</div>
<!-- start show hide explaination -->
<div id="tg_chwtestdesc">
<div class="questionarea">
<p class="question">Please explain  why no heartworm testing:</p>
 <textarea name="chwtestdesc" id="chwtestdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->

<div class="questionarea">
<p class="question">Are your current pets up to date on their heartworm preventative regimen?</p>
  <input type="radio" name="chwreg" value="Yes" onclick="hideobj('tg_chwregdesc')" checked>Yes
  <input type="radio" name="chwreg" value="No"  onclick="showobj('tg_chwregdesc')" >No
</div>
  <!-- start show hide explaination -->
  <div id="tg_chwregdesc">
<div class="questionarea">
<p class="question">Please explain  why no heartworm preventative regimen:</p>
 <textarea name="chwregdesc" id="chwregdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->

<div class="questionarea">
<p class="question">Do any of your current pets have special needs?</p>
  <input type="radio" name="cspecneeds" value="Yes" onclick="showobj('tg_cspecneedsdesc')" >Yes
  <input type="radio" name="cspecneeds" value="No"  onclick="hideobj('tg_cspecneedsdesc')"  checked >No
</div>

  <p class="showmore">+++</p>

  <!-- start show hide special needs  -->
<div id="tg_cspecneedsdesc">   
<div class="questionarea">
<p class="question">Please explain the special needs:</p>
 <textarea name="cspecneedsdesc" id="cspecneedsdesc" rows="4"></textarea>
</div>
</div>

  <!-- end show hide special needs  -->

</div>
  <!-- end show hide pets in home -->
  
  
<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
About Your Home</div> 


<div class="questionarea">
<p class="question">Please describe your residence:</p>
 <select id="homedesc" name="homedesc">
	<option value="singlefamily">Single Family</option>
  <option value="condo">Condo</option>
  <option value="duplex">Duplex</option>
  <option value="multifamily">Multiple Family</option>
  <option value="apartment">Apartment</option>
  <option value="other">Other</option>
	</select>
</div>

<div class="questionarea">
<p class="question">Do you rent or own?</p>
  <input type="radio" name="renter" value="Rent" onclick="showobj('tg_renter')" >Rent
  <input type="radio" name="renter" value="Own"  onclick="hideobj('tg_renter')" checked>Own
</div>


  <!-- start show hide renter -->
<div id="tg_renter">
<div class="pleasenote">
If you are currently renting your home, your application will not be processed without a letter from your landlord stating that you have permission to have a Golden Retriever.<br><br>
Please send a letter to:<br>
GRIN Applications<br>
PO Box 24365<br>
Cleveland, OH 44124<br><br>
Without it, your application WILL NOT be considered<br>
</div>
</div>
  <!-- end show hide renter -->
  
  
<div class="questionarea">
<p class="question">How long have you lived in your current home</p>
  <select id="currhomeyrs" name="currhomeyrs">
	<option value="Less than 1 yr">Less than a year</option>
	<option value="1-5 years">1-5 years</option>
	<option value="More than 5 years">More than 5 years</option>
	</select>
</div>  

  
<div class="pleasenote">
Fencing is required if you are looking to adopt a dog 5 years old or younger. The fence may be a traditional fence (48 inches or higher and made of a sturdy material such as wood, chain link, vinyl, etc) or electronic if purchased from an established company that offers formal training as part of the purchase. Also, in keeping with GRIN's belief that all dogs must be supervised when out of doors, potential GRIN adopters who have doggy doors at their homes will be asked to agree to disable the doors whenever they are away from home. All doggy doors must open into fenced areas.
</div>

<div class="questionarea">
<p class="question">Approximate yard size</p>
<div class="labeledselect selectvalue">
<select id="yardW" name="yardW">
	<option value="10 feet">10 feet</option>
	<option value="15 feet">15 feet</option>
	<option value="20 feet">20 feet</option>
	<option value="25 feet">25 feet</option>
	<option value="30 feet">30 feet</option>
	<option value="35 feet">35 feet</option>
	<option value="40 feet">40 feet</option>
	<option value="45 feet">45 feet</option>
	<option value="50 feet">50 feet</option>
	<option value="Over_50 feet">Over 50 feet</option>
	<option value="Under_10 feet">Less than 10 feet</option>
	</select>
</div>
<div class="labeledselect">Width</div>
<div class="labeledselect selectvalue">
   <select id="yardL" name="yardL">
	<option value="10 feet">10 feet</option>
	<option value="15 feet">15 feet</option>
	<option value="20 feet">20 feet</option>
	<option value="25 feet">25 feet</option>
	<option value="30 feet">30 feet</option>
	<option value="35 feet">35 feet</option>
	<option value="40 feet">40 feet</option>
	<option value="45 feet">45 feet</option>
	<option value="50 feet">50 feet</option>
	<option value="Over_50 feet">Over 50 feet</option>
	<option value="Under_10 feet">Less than 10 feet</option>
	</select>
</div>
  <div class="labeledselect">Length  </div>
</div>
<br>
  
<div class="questionarea">
<p class="question">What type of fence do you have?</p>
  <input type="radio" name="havefence" value="Physical"  onclick="pfence()" checked>Physical
  <input type="radio" name="havefence" value="Electrical"  onclick="efence()" >Electronic/Hidden
  <input type="radio" name="havefence" value="None" onclick="nofence()" >None
</div>  

<!-- start show hide physical -->
<div id="tg_fenceP">

<div class="questionarea">
<p class="question">Do you have a completely fenced-in back yard?</p>
  <input type="radio" name="fenceb" value="Yes" >Yes
  <input type="radio" name="fenceb" value="No" checked>No
</div>

<div class="questionarea">
<p class="question">Do you have a completely fenced-in front yard?</p>
  <input type="radio" name="fencef" value="Yes" >Yes
  <input type="radio" name="fencef" value="No" checked>No
</div>

<div class="questionarea">
<p class="question">Please describe the fence type and height</p>
 <textarea name="fencesize" id="fencesize" rows="2"></textarea>
</div>
</div>
 <!-- end show hide physical -->
 
 

<!-- start show hide electric -->
<div id="tg_fenceE">
<div class="questionarea">
<p class="question">Electronic/Hidden Fence type?</p>
  <select id="efencetype" name="efencetype">
	<option value="Commercial">Commercial</option>
	<option value="Self-installed">Self-installed</option>
	<option value="Not Sure">Not Sure</option>
	</select>
</div> 


<div class="questionarea">
<p class="question">What brand is the fence?</p>
 <input type="text" name="fencebrand" id="fencebrand">
</div>

</div>
<!-- end show hide electric --> 


    
    <!-- start show hide nofence -->
<div id="tg_nofence">    
<div class="questionarea">
<p class="question">With no fence, how will the dog be managed when outside?</p>
 <textarea name="outsidemanage" id="outsidemanage" rows="4"></textarea>
</div>

<div class="questionarea">
<p class="question">Are you willing to install a fence?</p>
  <input type="radio" name="fenceadd" value="Yes" >Yes
  <input type="radio" name="fenceadd" value="No" checked>No
</div>
</div> 
<!-- end show hide nofence -->





<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
About your pet history</div>

<div class="questionarea">
  <p class="question">Have you had previous pets?</p>
  <input type="radio" name="prevPets" value="Yes" onclick="showobj('tg_prevpets')" >Yes
  <input type="radio" name="prevPets" value="No"  onclick="hideobj('tg_prevpets')" checked>No
</div>

  <p class="showmore">+++</p>

<!-- start show hide previous pets --> 
<div id="tg_prevpets">

<div class="questionarea">
<p class="question">Describe your previous pets</p>
 <textarea name="prevpetdesc" id="prevpetdesc" rows="4">
Please state the names and types of pets you have previously owned
Indicate the dates you owned the pets (years are fine)
What happened to the pet (ran away, put to sleep, hit by car, etc)
 </textarea>
</div>


<div class="questionarea">
<p class="question">Were your previous pets (dogs and cats only) spayed or neutered?</p>
  <input type="radio" name="pspayed" value="Yes"  onclick="hideobj('tg_pspayeddesc')" checked>Yes
    <input type="radio" name="pspayed" value="No" onclick="showobj('tg_pspayeddesc')">No
</div>
<!-- start show hide explaination -->
<div id="tg_pspayeddesc">
<div class="questionarea">
<p class="question">Please explain why no spay/neuter:</p>
 <textarea name="pspayeddesc" id="pspayeddesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->


<div class="questionarea">
<p class="question">Were your previous pets up to date on their vaccinations?</p>
  <input type="radio" name="pvac" value="Yes" onclick="hideobj('tg_pvacdesc')" checked>Yes
  <input type="radio" name="pvac" value="No"  onclick="showobj('tg_pvacdesc')">No
</div>
<!-- start show hide explaination -->
<div id="tg_pvacdesc">
<div class="questionarea">
<p class="question">Please explain why no vaccinations:</p>
 <textarea name="pvacdesc" id="pvacdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->

<div class="questionarea">
<p class="question">Were your previous pets up to date on their heartworm testing?</p>
  <input type="radio" name="phwtest" value="Yes" onclick="hideobj('tg_phwtestdesc')" checked>Yes
  <input type="radio" name="phwtest" value="No"  onclick="showobj('tg_phwtestdesc')">No
</div>
<!-- start show hide explaination -->
<div id="tg_phwtestdesc">
<div class="questionarea">
<p class="question">Please explain why no heartworm testing:</p>
 <textarea name="phwtestdesc" id="phwtestdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->

<div class="questionarea">
<p class="question">Were your previous pets up to date on their heartworm preventative regimen?</p>
  <input type="radio" name="phwreg" value="Yes" onclick="hideobj('tg_phwregdesc')" checked>Yes
  <input type="radio" name="phwreg" value="No"  onclick="showobj('tg_phwregdesc')" >No
</div>
  <!-- start show hide explaination -->
  <div id="tg_phwregdesc">
<div class="questionarea">
<p class="question">Please explain why no heartworm preventative regimen:</p>
 <textarea name="phwregdesc" id="phwregdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide explaination -->  

  
<div class="questionarea">
<p class="question">Did any of your previous pets have special needs?</p>
  <input type="radio" name="pspecneeds" value="Yes" onclick="showobj('tg_pspecneedsdesc')">Yes
  <input type="radio" name="pspecneeds" value="No"  onclick="hideobj('tg_pspecneedsdesc')" checked >No
</div>
  <!-- start show hide special needs -->
<div id="tg_pspecneedsdesc">
<div class="questionarea">
<p class="question">Please explain the special needs:</p>
 <textarea name="pspecneedsdesc" id="pspecneedsdesc" rows="4"></textarea>
</div>
</div>
  <!-- end show hide special needs -->


<div class="questionarea">
  <p class="question">Were your previous pets rescued?</p>
  <input type="radio" name="prevrescue" value="Yes" onclick="showobj('tg_prevrescue')" >Yes
  <input type="radio" name="prevrescue" value="No"  onclick="hideobj('tg_prevrescue')" checked>No
</div>

  <p class="showmore">+++</p>

<!-- start show hide previous rescue --> 
<div id="tg_prevrescue">
<div class="questionarea">
<p class="question">Please explain the rescue type</p>
 <textarea name="prevrescuedesc" id="prevrescuedesc" rows="4">
Shelter, Rescue Organization, Self, etc
 </textarea>
</div>
</div>
<!-- end show hide previous rescue --> 


<div class="questionarea">
  <p class="question">Have you ever sold, given away, or put a pet into a shelter?</p>
  <input type="radio" name="soldpet" value="Yes" onclick="showobj('tg_soldpetdesc')">Yes
  <input type="radio" name="soldpet" value="No"  onclick="hideobj('tg_soldpetdesc')"checked>No
</div>

  <p class="showmore">+++</p>

<!-- start show hide sold --> 
<div id="tg_soldpetdesc">
<div class="questionarea">
<p class="question">Please explain why the pet was sold, given away, or put a pet into a shelter?</p>
 <textarea name="soldpetdesc" id="soldpetdesc" rows="4">
 </textarea>
</div>
</div>
<!-- end show hide sold --> 

</div>
<!-- end show hide previous pets -->


<div class="questionarea">
  <p class="question">Have you ever bred a dog?</p>
  <input type="radio" name="breddog" value="Yes" onclick="showobj('tg_breddogdesc')" >Yes
  <input type="radio" name="breddog" value="No"  onclick="hideobj('tg_breddogdesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
<!-- start show hide bred dog --> 
<div id="tg_breddogdesc">
<div class="questionarea">
<p class="question">Please explain the dogs you have bred</p>
 <textarea name="breddogdesc" id="breddogdesc" rows="4">
Include breed and dates
 </textarea>
</div>
</div>
<!-- end show hide bred dog --> 


<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
After Your Adoption</div>

<div class="questionarea">
  <p class="question">Will you keep a collar on your dog</p>
  <input type="radio" name="collar" value="Yes" onclick="collaryes()" checked>Yes
  <input type="radio" name="collar" value="No"  onclick="collarno()" >No
</div>



<!-- start show hide collardesc --> 
<div id="tg_collardesc">
<div class="questionarea">
<p class="question">Describe the type of collar you will use</p>
 <textarea name="collardesc" id="collardesc" rows="4">
 Collar type
 </textarea>
</div>
</div>
<!-- end show hide collardesc --> 

<!-- start show hide no collar --> 
<div id="tg_nocollardesc">
<div class="questionarea">
<p class="question">Please explain why you will not use a collar</p>
 <textarea name="nocollardesc" id="nocollardesc" rows="4">
Why not?
 </textarea>
</div>
</div>
<!-- end show hide no collar --> 



<div class="questionarea">
<p class="question">Where will the dog be kept during the day when you are not at home?</p>
 <textarea name="wherekept" id="wherekept" rows="2">
 </textarea>
</div>

<div class="questionarea">
<p class="question">Where will the dog sleep at night?</p>
 <textarea name="wheresleep" id="wheresleep" rows="2">
 </textarea>
</div>


<div class="questionarea">
<p class="question">Will your dog be allowed on the furniture?</p>
  <input type="radio" name="onfurniture" value="Yes" checked>Yes
  <input type="radio" name="onfurniture" value="No">No
</div>

<div class="questionarea">
<p class="question">Will your dog be allowed on the bed?</p>
  <input type="radio" name="onbed" value="Yes" checked>Yes
  <input type="radio" name="onbed" value="No">No
</div>

<div class="questionarea">
<p class="question">Will your dog have the run of the house?</p>
 <input type="radio" name="runofhouse" value="Yes" checked>Yes
  <input type="radio" name="runofhouse" value="No">No
</div>

<div class="questionarea">
<p class="question">Will you use a crate?</p>
  <input type="radio" name="usecrate" value="Yes" onclick="showobj('tg_usecratedesc')" >Yes
  <input type="radio" name="usecrate" value="No"  onclick="hideobj('tg_usecratedesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
<!-- start show hide crate placement -->
<div id="tg_usecratedesc"> 
<div class="questionarea">
<p class="question">Where will the crate be placed?</p>
 <textarea name="usecratedesc" id="usecratedesc" rows="2">
 </textarea>
</div>
</div>
<!-- end show hide crate placement -->

<div class="questionarea">
<p class="question">What will you do with your dog when on vacation?</p>
 <textarea name="onvacation" id="onvacation" rows="2">
 </textarea>
</div>

<div class="questionarea">
<p class="question">How much grooming will you do?</p>
  <select id="grooming" name="grooming">
	<option value="none">None</option>
	<option value="daily">Daily</option>
	<option value="weekly">Weekly</option>
	<option value="monthly">Monthly</option>
	</select>
</div>  


<div class="questionarea">
<p class="question">Who will do your grooming?</p>
 <textarea name="groomingwho" id="groomingwho" rows="2">
 </textarea>
</div>

<div class="questionarea">
<p class="question">How will you provide the exercise that this dog requires?</p>
   <textarea name="exercise" id="exercise" rows="4">
 </textarea>
</div>

<div class="pleasenote">
All dogs ages 4 and under, and any others at GRIN's discretion, will be required to enroll in formal obedience training within 30 days of adoption. Please indicate that you accept this requirement.
</div>

<div class="questionarea">
<p class="question">I accept the training requirement stated above:</p>
  <input type="radio" name="trainingrequired" value="Yes" >Yes
  <input type="radio" name="trainingrequired" value="No" checked>No
</div>

<div class="pleasenote">
All of our rescue dogs would greatly benefit from training. Formal training (i.e. enroll the dog in a class, send the dog to a trainer, bring a trainer to your home) is the best form of training. Self training at home will also work in some cases.
</div>



<div class="questionarea">
<p class="question">Have you chosen a formal trainer?</p>
  <input type="radio" name="trainer" value="Yes" onclick="showobj('tg_trainerdesc')" >Yes
  <input type="radio" name="trainer" value="No"  onclick="hideobj('tg_trainerdesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
<!-- start show hide trainer --> 
<div id="tg_trainerdesc"> 
<div class="questionarea">
<p class="question">Please provide your trainer's information:</p>
 <textarea name="trainerdesc" id="trainerdesc" rows="2">
 Name or organization...
 </textarea>
</div>
</div>
<!-- end show hide trainer -->


<div class="questionarea">
<p class="question">Is there any additional information you would like to add</p>
  <input type="radio" name="otherinfo" value="Yes" onclick="showobj('tg_otherinfodesc')" >Yes
  <input type="radio" name="otherinfo" value="No"  onclick="hideobj('tg_otherinfodesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
<!-- start show hide other info -->
<div id="tg_otherinfodesc"> 
<div class="questionarea">
<p class="question">Other information:</p>
 <textarea name="otherinfodesc" id="otherinfodesc" rows="2">
 </textarea>
</div>
</div>
<!-- end show hide other info -->



<!---------------------------------------- 
    SECTION START
------------------------------------------>
<div class="sectionarea">
Veterinary Information</div> 
 
<div class="pleasenote"> 
Veterinary reference checks are done on every application. Your dogs and cats must be current in their vaccinations and preventions consistent with your beterinarian's recommendations for your application to be considered. In addition, without complete veterinarian information, we will not be able to process your application.
</div>


<div class="questionarea">
<p class="question">Please list your current veterinarian:</p>
 <textarea name="currrentvet" id="currrentvet" rows="4">
 Name, Address, Phone Number...
 </textarea>
</div>

<div class="pleasenote"> 
You must call your vet and authorize them to release your history. If this is not done, it will cause delays in the processing of your application.
</div>


<div class="questionarea">
<p class="question">How long have you been a client of your current vet?</p>
  <select id="vetyears" name="vetyears">
	<option value="Less than 1 year">Less 1 one year</option>
	<option value="1-2 years">1-2 years</option>
	<option value="2-3 years">2-3 years</option>
	<option value="3-4 years">3-4 years</option>
	<option value="4+ years">4+ years</option>
	</select>
</div>  


<div class="questionarea">
<p class="question">Is your vet history under a different last name?</p>
  <input type="radio" name="histname" value="Yes" onclick="showobj('tg_histnamedesc')" >Yes
  <input type="radio" name="histname" value="No"  onclick="hideobj('tg_histnamedesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
<!-- start show hide last name -->
<div id="tg_histnamedesc"> 
<div class="questionarea">
<p class="question">What is the last name under which it is listed?</p>
 <input type="text" name="histnamedesc" id="histnamedesc">
</div>
</div>
<!-- end show hide hide last name -->



<div class="questionarea">
<p class="question">Do you have a previous veterinarian?</p>
  <input type="radio" name="prevvet" value="Yes" onclick="showobj('tg_prevvetdesc')" >Yes
  <input type="radio" name="prevvet" value="No"  onclick="hideobj('tg_prevvetdesc')" checked>No
</div>

  <p class="showmore">+++</p>
  
<!-- start show hide previous vet -->
<div id="tg_prevvetdesc"> 
<div class="questionarea">
<p class="question">Please list your previous veterinarian:</p>
 <textarea name="prevvetdesc" id="prevvetdesc" rows="7">
 Name
 Address
 Phone Number
 year from
 year to
 why you no longer use them
 </textarea>
</div>
</div>
<!-- end show hide previous vet -->

<div class="questionarea">
<p class="question">May these individuals be contacted regarding past or present pets?</p>
<input type="radio" name="contactVet" value="Yes" checked>Yes
  <input type="radio" name="contactVet" value="No">No
</div>

<div class="questionarea">
<p class="question">May these individuals be contacted regarding any dog you may obtain through G.R.I.N.?</p>
<input type="radio" name="contactVetGrin" value="Yes" checked>Yes
  <input type="radio" name="contactVetGrin" value="No">No
</div>

<div class="pleasenote"> 
To avoid delays in the processing of your application, please take a few moments to look over what you have filled out. Make sure you have indicated the phone numbers of your current and previous veterinarians.
</div>


<div class="pleasenote"> 
We will be in touch with you periodically to answer any questions that you might have and to ensure that both you and the pet are getting along well.
</div>
  
<div class="buttonarea">
<div class="button" onclick="submitForm()">SUBMIT</div>
</div>

<!-- start show hide Messages -->
<div id="tg_errors"> 
 <br/>
 <br/>
<div class="questionarea">
<p class="question">Error messages will display here.</p>
 <textarea readonly rows="5"  name="" id="showstuff"></textarea>
</div>
</div>
<!-- end show hide Messages -->

</div> <!-- wholeform hidden until agreement confirmation -->
<!-- end show hide until agreement is confirmed -->

  
  <!-- input type="submit" value="Submit" -->
  <input type="hidden" name="option" value="com_formgrinadopt" />
  <input type="hidden" name="task" value="send" />
  <?php echo JHtml::_('form.token'); ?>
</form>



