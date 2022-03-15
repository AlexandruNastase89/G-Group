<?php

session_start();

$page = "contact";

// define variables and set to empty values
$optionsErr = $firstNameErr = $lastNameErr = $emailErr = $messageErr = $securimageErr = "";
$options = $firstName = $lastName = $email = $message = $securimageValid = $mailSent = "";
// secondary variables
$title = $company = $telephone = $toEmail = $subject = $alertStatus = $body = $headers = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["options"] == "") {
    $optionsErr = "Please select a form of address!";
  } else {
    $options = test_input($_POST["options"]);
  }

  if (empty($_POST["firstname"])) {
    $firstNameErr = "Name is required!";
  } else {
    $firstName = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstNameErr = "Only letters and white space allowed!";
    }
  }

  if (empty($_POST["lastname"])) {
    $lastNameErr = "Name is required!";
  } else {
    $lastName = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastNameErr = "Only letters and white space allowed!";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required!";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format!";
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "Please write your message!";
  } else {
    $message = test_input($_POST["message"]);
  }

  // Secureimage integration
  include_once $_SERVER["DOCUMENT_ROOT"] . "/securimage/securimage.php";
  $securimage = new Securimage();

  // Secureimage validation
  if ($securimage->check($_POST["captcha_code"]) == false) {
    // the code was incorrect
    $alertStatus = "danger";
    $securimageErr = "Incorrect security code entered!";
  } else {
    if ($securimage->check($_POST["captcha_code"]) == true) {
      $securimageValid = true;
    }
  }

  if ($_POST["title"] == "") {  } else {
    $title = test_input($_POST["title"]);
  }

  if ($_POST["company"] == "") {  } else {
    $company = test_input($_POST["company"]);
  }

  if ($_POST["telephone"] == "") {
    //
  } else {
    $telephone = test_input($_POST["telephone"]);
  }

  echo "<script>
        if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
        </script>";

  if (!empty($options) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($message) && $securimageValid == true) {
    if (empty($optionsErr) && empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($messageErr) && empty($securimageErr)) {

      // Mail compose
      $toEmail = "juerg@email.com";
      $subject = "Contact request from ".$options." ".$lastName." ".$firstName;
      $body = "<h3>Contact request</h3>
              <h4>Full name: </h4><p>".$options." ".$lastName." ".$firstName."</p>";
      if (!empty($title)) {
        $body .= "<h4>Title: </h4><p>".$title."</p>";
      }
      $body .= "<h4>Email address: </h4><p>".$email."</p>";
      if (!empty($telephone)) {
        $body .= "<h4>Phone number: </h4><p>".$telephone."</p>";
      }
      if (!empty($company)) {
        $body .= "<h4>Company: </h4><p>".$company."</p>";
      }
      $body .= "<h4>Message: </h4><p>".$message."</p>";

      $headers  = "MIME-Version: 1.0"."\r\n";
      $headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
      $headers .= "From: ".$lastName." ".$firstName."<".$email.">"."\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        $status = "success";
        $mailSent = '<p class="uk-text-bold uk-text-large uk-text-center">Your message has been sent. Thank you!</p>';

        // Reset vars
        $optionsErr = $firstNameErr = $lastNameErr = $emailErr = $messageErr = $securimageErr = "";
        $options = $firstName = $lastName = $email = $message = $securimageValid = $mailSent = "";
        $title = $company = $telephone = $toEmail = $subject = $alertStatus = $body = $headers = $status = "";

      } else {
        $status = "danger";
        $mailSent = '<p class="uk-text-bold uk-text-large uk-text-center">Something went wrong. Please try again!</p>';

        // Reset vars
        $optionsErr = $firstNameErr = $lastNameErr = $emailErr = $messageErr = $securimageErr = "";
        $options = $firstName = $lastName = $email = $message = $securimageValid = $mailSent = "";
        $title = $company = $telephone = $toEmail = $subject = $alertStatus = $body = $headers = $status = "";
      }
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
