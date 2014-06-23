<?php
// * * * * * * * *Get all the vars * * * * * * *
$name = filter_input(INPUT_POST, 'companyName', FILTER_SANITIZE_SPECIAL_CHARS); 
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$email_from = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

$invNo = $_POST['invNo'];
$queryType = $_POST['typeOfQueryDropDownBox'];
$details = $_POST['details'];

$generalDetails = filter_input(INPUT_POST, 'generalDetails', FILTER_SANITIZE_SPECIAL_CHARS);
$hireRatesCB = filter_input(INPUT_POST, 'hireRatesCB', FILTER_SANITIZE_SPECIAL_CHARS);
$supplyRatesCB = filter_input(INPUT_POST, 'supplyRatesCB', FILTER_SANITIZE_SPECIAL_CHARS);
$salesmanVistCB = filter_input(INPUT_POST, 'salesmanVistCB', FILTER_SANITIZE_SPECIAL_CHARS);
    $email_message = "---------- Customer Details ----------\n";
    $email_message .= "Company Name:         ".($name)."\n";
    $email_message .= "Contact:                          ".($contact)."\n";
    $email_message .= "Phone:                            ".($phone)."\n";
    $email_message .= "Email:                               ".($email_from)."\n\n";
        
    $email_message .= "---------- Invoice Query 1 ----------"."\n". "Invoice No/Contract No:       ".($invNo[0])."\n"
    . "Type of Query:                          ".($queryType[0])."\n" . "Details:"."\n".($details[0])."\n\n\n";

    $email_message .= "---------- Invoice Query 2 ----------"."\n". "Invoice No/Contract No:       ".($invNo[1])."\n"
    . "Type of Query:                          ".($queryType[1])."\n" . "Details:"."\n".($details[1])."\n\n\n"; 

    $email_message .= "---------- Invoice Query 3 ----------"."\n" . "Invoice No/Contract No:      ".($invNo[2])."\n"
    . "Type of Query:                          ".($queryType[2])."\n" . "Details:"."\n".($details[2])."\n\n\n"; 

    
  

  //  $email_message .= "---------- Invoice Query 1 ----------"."\n";

  //  $email_message .= "Invoice No/Contract No:         ".($invNo[0])."\n";

   // $email_message .= "Type of Query:    ".($queryType[0])."\n";

  //  $email_message .= "Details:                   ".($details[0])."\n\n\n";

    

  //  $email_message .= "---------- Invoice Query 2 ----------"."\n";

  //  $email_message .= "Invoice No/Contract No:         ".($invNo[1])."\n";

  //  $email_message .= "Type of Query:    ".($queryType[1])."\n";

  //  $email_message .= "Details:                   ".($details[1])."\n\n\n"; 

    

  //  $email_message .= "---------- Invoice Query 3 ----------"."\n";

  //  $email_message .= "Invoice No/Contract No:         ".($invNo[2])."\n";

 //   $email_message .= "Type of Query:    ".($queryType[2])."\n";

  //  $email_message .= "Details:                   ".($details[2])."\n\n\n"; 

    

  //  $email_message .= "---------- Invoice Query 4 ----------"."\n";

 //   $email_message .= "Invoice No/Contract No:         ".($invNo[4])."\n";

 //   $email_message .= "Type of Query:    ".($queryType[4])."\n";

 //   $email_message .= "Details:                   ".($details[4])."\n\n\n";

    

 //   $email_message .= "---------- Invoice Query 5 ----------"."\n";

 //   $email_message .= "Invoice No/Contract No:         ".($invNo[5])."\n";

  //  $email_message .= "Type of Query:    ".($queryType[5])."\n";

  //  $email_message .= "Details:                   ".($details[5])."\n\n\n";

    

    $email_message .= "---------- General Query ----------"."\n\n";
    $email_message .= "Details: ".($generalDetails)."\n\n";
    $email_message .= "---------- The Customer Needs... ----------"."\n\n";
    $email_message .= "Request hire rates:      ".($hireRatesCB)."\n\n";
    $email_message .= "Supply catalogues:        ".($supplyRatesCB)."\n\n";
    $email_message .= "Salesman visit:                ".($salesmanVistCB)."\n\n";


    $email_to = "chris.lannister@thehireman.co.uk";
    $email_subject = "QUERY form from - " . $name . ", has been filled in.";


// Mail Push
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message);  

?>

 <!-- Confirmation message -->

Thank you for contacting us. We will be in touch with you very soon.

 