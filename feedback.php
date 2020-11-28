<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $mailFrom = $_POST["email"];
  $feedback = $_POST["feedback"];

  $mailTo = "robroch1@depaul.edu";
  $headers = "From: ".$mailFrom;
  $text = "You have received an e-mail from ".$name.".\n\n".$feedback;

  mail($mailTo, $subject, $text, $headers);
  header("Location: thanks.html?mailsend");
}

?>