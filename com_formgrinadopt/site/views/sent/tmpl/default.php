<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_mailto
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



if (isset($_POST["r1name"])) {
  mailSuccess();
} else {
  mailFailure();
}

function mailFailure() {
  echo "<div style='padding: 10px;'>";
  echo "<h2>Sorry, Mail failed to send</h2>";
  echo "</div>";
}

function mailSuccess()
{
  $reportOrder = buildReportOrder();
  buildBody($reportOrder);
  
  // $mailTextHtml = buildBodyHtml($reportOrder);
   // deliverMail($mailTextHtml); 
  
  $mailText=buildBodyOfMessage($reportOrder);
  deliverMail($mailText); 
}


function deliverMail($iText) 
{
  $subject = "GRIN Adoption Form";
  $body = $iText;
  $user = JFactory::getUser();
  $to = "example@yahoo.com";
  $from = array("example@outlook.com", "John Smith");

  # Invoke JMail Class
  $mailer = JFactory::getMailer();

  # Set sender array so that my name will show up neatly in your inbox
  $mailer->setSender($from);

  # Add a recipient -- this can be a single address (string) or an array of addresses
  $mailer->addRecipient($to);

  $mailer->setSubject($subject);
  $mailer->setBody($body);

  # If you would like to send as HTML, include this line; otherwise, leave it out
  // $mailer->isHTML();

  # Send once you have set all of your options
  $mailer->send();  
}


function buildBody($iOrder) 
{
  echo "<div style='padding: 10px;'>";
  echo "<h2>Your Application has been Mailed</h2>";
  echo "</br></br>";
  echo "<h2>Thank You!</h2>";
  
 /*  foreach($iOrder as $name => $description)
  {
    
    if (isSectionTag($name)) {
      echo "</br></br>" . $description;
    } else {
      echo "</br>" . $description .  ": [ " . $_POST[$name] . " ]";
    }
  } */
  echo "</br></div>";
}


function buildBodyHtml($iOrder) 
{
  $toReturn="GRIN Adopt/Foster Request\n\n";
  
  foreach($iOrder as $name => $description)
  {
    if (isSectionTag($name)) { 
      $toReturn .= "</br></br>" . $description;
    } else {
      $toReturn .= "</br>" . $description .  ": [ " . $_POST[$name] . " ]";
    }    
  }
  
  $toReturn .= "\n";
  return $toReturn;
}

function buildBodyOfMessage($iOrder) 
{
  $toReturn="GRIN Adopt/Foster Request\n\n";
  
  foreach($iOrder as $name => $description)
  {
    if (isSectionTag($name)) { 
      $toReturn .= "\n\n" . $description;
    } else {
      $toReturn .= "\n" . $description .  ": [ " . $_POST[$name] . " ]";
    }    
  }
  
  $toReturn .= "\n";
  return $toReturn;
}


// Check for section title instead of form parm
function isSectionTag($iName) {
  
  $tagged = substr($iName,0,3);
  
  if ($tagged == "sec") {
    return true;
  } else {
    return false;
  }
}


function buildReportOrder() 
{

// Keys starting with 'sec' are treated as section headers
// instead of parm names
   $toReturn = array( 'sec000' => "****** APPLICATION TYPE ******",
                      'apptype' => "Application Type",
                      'sec001' => "****** APPLICANT INFORMATION ******",
                      'r1name' => "Name",
                      'r1address1' => "Address Line 1",
                      'r1address2' => "Address Line 2",
                      'r1city' => "City",
                      'r1state' => "State",
                      'r1zip' => "Zip",
                      'r1age' => "Age",
                      'r1employer' => "Employer",
                      'r1occupation' => "Occupation",
                      'r1workhours' => "Work Hours",
                      'r1phone1' => "Phone 1st",
                      'r1phonetype' => "Primary Phone Type",
                      'r1phone2' => "Phone 2nd",
                      'r1phone3' => "Phone 3rd",
                      'athome' => "Is anyone home during the day",
                      'coap' => "Do you have a co-applicant",
                      
                      'sec002' => "****** CO-APPLICANT INFORMATION ******",
                      'r2name' => "Co-applicant Name",
                      'r2address1' => "Address Line 1",
                      'r2address2' => "Address Line 2",
                      'r2city' => "City",
                      'r2state' => "State",
                      'r2zip' => "Zip",
                      'r2age' => "Age",
                      'r2employer' => "Employer",
                      'r2occupation' => "Occupation",
                      'r2workhours' => "Work Hours",
                      'r2phone1' => "Phone 1st",
                      'r2phonetype' => "Primary Phone Type",                      
                      'r2phone2' => "Phone 2nd",
                      'r2phone3' => "Phone 3rd",
                      
                      'sec003' => "****** MORE APPLICANT INFORMATION ******",
                      'appBefore' => "Have you applied to GRIN before",
                      'r1income' => "What is your household income",
                      'memhist' => "GRIN member",
                      'prevmemdate' => "Last Membership year",
                      'hmethod' => "How did you hear about GRIN",
                      'fosterBefore' => "Have you ever fostered for GRIN before",
                      'appliedOther' => "Have you currently applied to another rescue",
                      'appliedOtherdesc' => "When did you apply and what is the status",
                      'afwhen' => "When will you be ready to adopt/foster",
                      
                      'sec004' => "****** ABOUT YOUR PERFECT MATCH ******",
                      'afage' => "What age range will you consider",
                      'mixBreed' => "Will you consider a mix",
                      'afgender' => "Gender Preference",
                      'afcolor' => "Color Preference",
                      'afspecial' => "Will you consider a 'special needs' Golden",
                      'afmix' => "Will you consider a Golden Mix",
                      'afpair' => "Will you consider a pair of Goldens (usually surrendered together)",
                      'afowned' => "Have you owned a dog before as an adult",
                      'afbehavior' => "Has any dog you owned had behavior, temperament, or medical issues",
                      'afbehaviortext' => "Briefly describe the issue",
                      'ownedgolden' => "Have you owned a Golden Retriever before as an adult",
                      'afresearch' => "Describe the research you have done about the breed",
                      'afrescue' => "Have you ever rescued a dog before",
                      'rescuedesc' => "Explain the rescue type",
                      'afactivitylevel' => "What activity level are you looking for",
                      'afactivities' => "What activities are you planning on doing with your Golden",
                      
                      'sec005' => "****** ABOUT YOUR FAMILY AND HOUSEHOLD ******",
                      'afindividuals' => "Individuals in your household",
                      'afvisits' => "Young children who visit",
                      'raisedwith' => "Have your children or those that visit your home been raised with a dog",
                      'respectdog' => "Have your children or those that visit your home been taught to respect a dog",
                      'childbehavior' => "Please describe your children's behavior around dogs",
                      'disability' => "Does anyone in your family have a physical or mental disability",
                      'disabilitydesc' => "Please describe the disability",
                      'allergies' => "Does anyone in your family have allergies",
                      'allergiesdesc' => "Please describe the allergies",
                      'rundaycare' => "Do you run an in-home child day care",
                      'daycarenum' => "How many children are in your day care",
                      'runpetcare' => "Do you run an in-home dog day care",
                      'petcarenum' => "How many dogs are in your pet care",
                      'currPets' => "Do you currently have pets in your home",
                      'petdesc' => "Names, ages and types of all pets",
                      'cspayed' => "Are your current pets spayed or neutered",
                      'cspayeddesc' => "Why no spay/neuter",
                      'cvac' => "Current pets up to date on their vaccinations",
                      'cvacdesc' => "Why no vaccinations",
                      'chwtest' => "Current pets up to date on their heartworm testing",
                      'chwtestdesc' => "Why no heartworm testing",
                      'chwreg' => "Current pets up to date on their heartworm preventative regimen",
                      'chwregdesc' => "Why no heartworm preventative regimen",
                      'cspecneeds' => "Current pets have special needs",
                      'cspecneedsdesc' => "Explain the special needs",
                      
                      'sec006' => "****** ABOUT YOUR HOME ******",
                      'homedesc' => "Residence type",
                      'renter' => "Do you rent or own",
                      'currhomeyrs' => "Length at current residence",
                      'yardW' => "Yard width",
                      'yardL' => "Yard Length",
                      'havefence' => "Fence type",
                      'fenceb' => "Completely fenced-in back yard",
                      'fencef' => "Completely fenced-in front yard",
                      'fencesize' => "Fence type and height",
                      'efencetype' => "Electronic/Hidden Fence type",
                      'fencebrand' => "Fence brand",
                      'outsidemanage' => "How will the dog be managed without a fence",
                      'fenceadd' => "Are you willing to install a fence",
                      
                      'sec007' => "****** ABOUT YOUR PET HISTORY ******",
                      'prevPets' => "Have you had previous pets",
                      'prevpetdesc' => "Describe your previous pets",
                      'pspayed' => "Previous pets spayed or neutered",
                      'pspayeddesc' => "Why no spay/neuter",
                      'pvac' => "Previous pets up to date on their vaccinations",
                      'pvacdesc' => "Why no vaccinations",
                      'phwtest' => "Previous pets up to date on their heartworm testing",
                      'phwtestdesc' => "Why no heartworm testing",
                      'phwreg' => "Previous pets up to date on their heartworm preventative regimen",
                      'phwregdesc' => "Why no heartworm preventative regimen",
                      'pspecneeds' => "Did any of your previous pets have special needs",
                      'pspecneedsdesc' => "Explain the special needs",
                      'prevrescue' => "Previous pets rescued",
                      'prevrescuedesc' => "Explain the rescue type",
                      'soldpet' => "Have you ever sold, given away, or put a pet into a shelter",
                      'soldpetdesc' => "Why the pet was sold, given away, or put a pet into a shelter",
                      'breddog' => "Have you ever bred a dog",
                      'breddogdesc' => "Explain the dogs you have bred",
                      
                      'sec008' => "****** ABOUT YOUR ADOPTION ******",
                      'collar' => "Will you keep a collar on your dog",
                      'collardesc' => "Describe the type of collar you will use",
                      'nocollardesc' => "Why you will not use a collar",
                      'wherekept' => "Where will the dog be kept during the day when you are not at home",
                      'wheresleep' => "Where will the dog sleep at night",
                      'onfurniture' => "Will your dog be allowed on the furniture",
                      'onbed' => "Will your dog be allowed on the bed",
                      'runofhouse' => "Will your dog have the run of the house",
                      'usecrate' => "Will you use a crate",
                      'usecratedesc' => "Where will the crate be placed",
                      'onvacation' => "What will you do with your dog when on vacation",
                      'grooming' => "How much grooming will you do",
                      'groomingwho' => "Who will do your grooming",
                      'exercise' => "How will you provide the exercise that this dog requires",
                      'trainingrequired' => "I accept the training requirement stated above",
                      'trainer' => "Have you chosen a formal trainer",
                      'trainerdesc' => "Please provide your trainer's information",
                      'otherinfo' => "Is there any additional information you would like to add",
                      'otherinfodesc' => "Other information",
                      
                      'sec009' => "****** YOUR VETERINARY INFORMATION ******",
                      'currrentvet' => "Please list your current veterinarian",
                      'vetyears' => "How long have you been a client of your current vet",
                      'histname' => "Is your vet history under a different last name",
                      'histnamedesc' => "What is the last name under which it is listed",
                      'prevvet' => "Do you have a previous veterinarian",
                      'prevvetdesc' => "Please list your previous veterinarian",
                      'contactVet' => "May these individuals be contacted regarding past or present pets",
                      'contactVetGrin' => "May these individuals be contacted regarding any dog you may obtain through G.R.I.N.");
                      
  return $toReturn;
}


?>
