<?php

if (isset($_POST["submit"])) {
  // $date = $_POST["date"] *This will eventually get the date from the log.html, and will be entered below in the $subject variable.
  $subject = "Today's Practice Log";
  $mailFrom = "praclog";
  $hours = $_POST["hours"];
  $progress = $_POST["progress"];
  $focus = $_POST["focus"];
  $efficient = $_POST["efficient"];
  $goals = $_POST["goals"];
  $key = $_POST["key"];
  $qhours = "Enter the amount of time (in hours) that you spent practicing during today's session: ";
  $qprogress = "What progress did you make? How did you achieve it? ";
  $qfocus = "How was your focus level today? ";
  $qefficient = "How efficient was your time? ";
  $qgoals = "How does this progress fit in to your long term goals? ";
  $qkey = "Log in key areas that you would like to improve upon in your next practice session: ";

  $mailTo = $_POST["email"];
  $headers = "From: ".$mailFrom;
  $text = "Here is today's practice log. Great work!"."\n\n".$qhours."\n".$hours."\n\n".$qprogress."\n".$progress."\n\n".$qfocus. "\n".$focus."\n\n".$qefficient."\n".$efficient."\n\n".$qgoals."\n".$goals."\n\n".$qkey."\n".$key;

  mail($mailTo, $subject, $text, $headers);
  header("Location: seeyou.html?mailsend");
}

?>