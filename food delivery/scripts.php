<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $query=$_POST['query'];
  $to='vinayak8rai@gmail.com';
  $subject='Form submission from: '.$name;
  $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the following message: \n\n".query;
  $headers="From: ".$email;
  if(mail($to,$subject,$message,$headers)){
    echo "<script>alert("Form Submitted! We will contact you shortly.")</script>';"
  }
  else{
    echo "<script>alert("Something went wrong. Try again.")</script>';"
  }
}