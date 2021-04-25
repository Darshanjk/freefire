<?php//get data from form
$name= $_POST['first-name'];
$name= $_POST['last-name'];
$gender= $_POST['gender-choice'];
$ID= $_POST['ID'];
$USERNAME= $_POST['USERNAME'];
$Year= $_POST['Year'];
$Month= $_POST['Month'];
$Date= $_POST['Date'];
$Mobile= $_POST['Mobile'];

$to = "darshanvj21@gmail.com";

$submit = "Mail From JK_GAMER";
$txt="name=". $name."\r\n gender=".$gender."\r\n ID=" . $ID."\r\n USERNAME=" . 
$USERNAME . "\r\n Year" .$Year."\r\n Month".$month."\r\n Date".$Date.
"\r\n Mobile".$Mobile;
$headers = "From: darshanvjmass@gmail.com" ."\r\n" .
"CC; somebobyelse@example.com";
if($email!=NULL){
	  mail($to,$subject,$txt,$headers);
}
