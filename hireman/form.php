<?php
$email_message .= '<img src="http://lannister.info/hireman/img/44.png" alt="Query" >';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Company:</strong> </td><td>" . $name . "</td></tr>";
$email_message .= "<tr><td><strong>Contact:</strong> </td><td>" . $contact . "</td></tr>";
$email_message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>". $phone ."</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . $email_from . "</td></tr>";
$email_message .= "</table>";
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Invoice/Contract:</strong> </td><td>" . ($invNo[$i]) . "</td></tr>";
$email_message .= "<tr><td><strong>Type of Query:</strong> </td><td>" . ($queryType[$i]) . "</td></tr>";
$email_message .= "<tr><td><strong>Details:</strong> </td><td>" . ($details[$i]) . "</td></tr>";
$email_message .= "</table>";    
    $email_message .= "<tr style='background: #eee;'><td><strong>Details:</strong> </td><td>" . $generalDetails . "</td></tr>";   
    $email_message .= "<tr><td><strong>I need:</strong> </td><td>" . $hireRatesCB . "</td></tr>";  
    $email_message .= "<tr><td><strong></strong> </td><td>" . $salesmanVistCB . "</td></tr>";
    $email_message .= "</table>";
// Other possible header content
 //  $headers .= "Reply-To: ". $email_from . "\r\n";
   $headers .= "CC: david.porter@thehireman.co.uk, chris.lannister@thehireman.co.uk\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//	$email_message .= '<img src="http://lannister.info/hireman/img/44.png" style="float:left;"><h1 style="float:left; margin: 20px 0 0px 40px; font-family:cabinRegular, sans-serif;">Query Form</h1> </div><div style="clear:both; margin:0 0 40px 0"></div>';
//	$email_message .= '';
//	$email_message .= '<h1 style="float:left;">Customer Details</h1>';

//$email_message .= '<ul>';
//$email_message .= '<li>Company Name:         '.($name).'</li>';
//$email_message .= '<li>Contact:                          '.($contact).'</li>';
// $email_message .= '<li>Phone:                            '.($phone).'</li>';
//  $email_message .= '<li>Email:                               '.($email_from).'</li>';
//  $email_message .

// $email_message .= "Invoice No/Contract No:   " . ($invNo[$i]) . "\n";
// $email_message .= "Type of Query:                      " . ($queryType[$i]) . "\n";
// $email_message .= "Details: \n" . ($details[$i]) . "\n\n\n";
//} //Because we can have multiple enquires, we need loop for the amount in the array.
      
