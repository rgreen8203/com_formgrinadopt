 
/* 
----------------------------------------------------
  formgrinadopt.js
----------------------------------------------------
 
*/

/* Call to PHP */

function submitForm() {
  
  if ( validForm() ) {
    _("grinform").method = "post";
    _("grinform").action = "index.php";
    _("grinform").submit();
  } 
}

/* short hand for getElementById */

function _(x) {
	return document.getElementById(x);
}

function showobj(id){
	_(id).style.display = "block";
}

function hideobj(id){
	_(id).style.display = "none";
}

function iagree() {
  hideobj('tg_agreement');
  showobj('wholeform');
}

function memberNever() {
  hideobj('tg_prevmemdate');
  showobj('tg_hmethod');
}

function memberCurr() {
  hideobj('tg_prevmemdate');
  hideobj('tg_hmethod');
}

function memberPrev() {
  showobj('tg_prevmemdate');
  hideobj('tg_hmethod');
}


function pfence()
{
  hideobj('tg_fenceE');
  hideobj('tg_nofence');
  showobj('tg_fenceP');
}

function efence()
{
  hideobj('tg_nofence');
  hideobj('tg_fenceP');
  showobj('tg_fenceE');
}

function nofence()
{
  hideobj('tg_fenceE');
  hideobj('tg_fenceP');
  showobj('tg_nofence');
}

function collaryes() 
{
  hideobj('tg_nocollardesc')
  showobj('tg_collardesc')
}

function collarno() 
{
  hideobj('tg_collardesc')
  showobj('tg_nocollardesc')
}

  // remove all non-numeric values from field
  function numOnly(el) {
        
    var ival      = el.value;  
    var toCheck  = ival.split("");
    var toReturn = "";
    
    for ( i=0; i < ival.length; i++ ) {
      if (toCheck[i] < "0") { continue; }
      if (toCheck[i] > "9") { continue; }
      toReturn += toCheck[i];
    }
    
    el.value = toReturn;
  }
  
  // Validate form before allowing it to be submitted
  function validForm() {
    
    var toReturn = true;
    
    _("showstuff").innerHTML = "";
    
    if ( applicantErrors() ) { toReturn = false; }
    if ( coApplicantErrors() ) { toReturn = false; }
       
    return toReturn;
  }
  
  // Check applicant information
  function applicantErrors() { 
  
    var toReturn = false;
    
    if ( noValue("r1name", 3, "Your Name") ) { toReturn=true; }
    if ( noValue("r1address1", 6, "Your Address") ) { toReturn=true; }
    if ( noValue("r1city", 3, "Your City") ) { toReturn=true; }
    if ( noValue("r1zip", 5, "Your Zipcode") ) { toReturn=true; }
    if ( noValue("r1phone1", 10, "Your Phone Number") ) { toReturn=true; }
    
    return toReturn;  
  }
  
  
    // Check co-applicant information
  function coApplicantErrors() { 
    
    var toReturn = false;
    
    var coapp = document.querySelector('input[name="coap"]:checked').value;
    if (coapp == "No") { return toReturn; }
    
    reportError("*** Co-applicant indicated ***");
    
    if ( noValue("r2name", 3, "Co-applicant Name") ) { toReturn=true; }
    if ( noValue("r2address1", 6, "Co-applicant Address") ) { toReturn=true; }
    if ( noValue("r2city", 3, "Co-applicant City") ) { toReturn=true; }
    if ( noValue("r2zip", 5, "Co-applicant Zipcode") ) { toReturn=true; }
    if ( noValue("r2phone1", 10, "Co-applicant Phone") ) { toReturn=true; }
    
    return toReturn;  
  }
  
  // check for missing value or too little information
  function noValue(id, minsize, desc) {  
    
    var fullValue = _(id).value;
    var trimValue = fullValue.trim();
    var trimSize  = trimValue.length;
    
    if (trimSize < 1 ) {  
       reportError(desc + " is required");
       return true; 
    }
     
    if (trimSize < minsize ) {  
       reportError("Additional information needed for " + desc);
       return true; 
    }
    
    return false;
  }
  
  
  // write to message textarea
  function reportError(emsg) {
    var ss = _("showstuff").value;
    _("showstuff").innerHTML = ss + " " + emsg + "\n";
  }

