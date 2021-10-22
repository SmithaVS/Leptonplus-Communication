<?php //get data from form
          $name = $_POST['name'];
          $number = $_POST['mobile'];
          $email = $_POST['emailaddress'];
          $message = $_POST['message'];
          $to = "leptoncommunications@gmail.com";
          $subject = "Mail from LeptonCommunications";
          $txt = "Name = ". $name . "\r\n Mobile number = ".$number . "\r\n Email = ".$email . "\r\n Message = ". $message;
          $headers = "From: noreply@leptoncommunications.com". "\r\n". "CC:info@leptoncommunications.com";
          if($email!=NULL){
            mail($to,$subject,$txt,$headers);
            header("Location:thankyou.html");
          }
          //redirect ?>
	
