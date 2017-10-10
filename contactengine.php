<?php

$EmailFrom = Trim(stripslashes($_POST['Email'])); 
$EmailTo = "4mcroberts@gmail.com";
//$EmailTo2 = "james.mcroberts@mlb.com";
$Subject = "Mary Luke | Website Message";
$Name = Trim(stripslashes($_POST['Name']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 
$City = Trim(stripslashes($_POST['City']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($Email, $Subject, "Thanks for reaching out with your inquiry. We will review your comment and follow up as necessary. Below is a copy of the comment for your records:

$Body", "From: noreply@maryluke.com");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>