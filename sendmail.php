<?php 

	require 'vendor/autoload.php';

	class SendEmail{
		public static function mail($mailTo, $subject, $message){
			$key = SENDGRID_API_KEY;
			$email = new \SendGrid\Mail\Mail();
			$email->setFrom('mohitsshetty986@gmail.com','Mohit Shetty');
			$email->setSubject($subject);
			$email->addTo($mailTo);
			$email->addContent("text/plain",$message);

			$sendgrid=new \SendGrid($key);

			try{
				$response=$sendgrid->send($email);
			}
			catch(Exception $e){
				echo 'Email exception caught : '. $e->getMessage()."\n";
				return False;
			}
		}
	}

 ?>