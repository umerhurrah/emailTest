<?php
if($_POST['sendEmail'] || isset($_FILES['attachment']))
{
    $recipient_email    = filter_var($_POST['mailTo']); //recepient
    $from_email         = "umerhurrah@kwiqpick.com"; //from email using site domain.
    $subject            = $_POST['mailSub']; //email subject line
    $sender_name = "Kwiqpick";
    $sender_email = "umerhurrah@kwiqpick.com";
    $sender_message = filter_var($_POST['mailBody'], FILTER_SANITIZE_STRING); //capture message
    $file_count = count($attachments['name']); //count total files attached
    $boundary = md5(uniqid(time()));      
            if(!empty($_FILES["attachment"]["name"])){
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "From: <".$from_email.">"."\r\n"; 
                $headers .= "Reply-To: <".$sender_email.">" . "\r\n";
                $headers .= "Content-Type: multipart/mixed; boundary = ".$boundary."\r\n\r\n"; 

                //message text
                $body = "--$boundary\r\n";
                $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
                $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
                $body .= chunk_split(base64_encode($sender_message)); 
                //get file info
                $file_name = $_FILES["attachment"]["name"];
                $file_size = $_FILES["attachment"]["size"];
                $file_type = $_FILES["attachment"]["type"];

                //read file 
                $handle = fopen($_FILES["attachment"]["tmp_name"], "r");
                $content = fread($handle, $file_size);
                fclose($handle);
                $encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)

                $body .= "--$boundary\r\n";
                $body .="Content-Type: $file_type; name=".$file_name."\r\n";
                $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
                $body .="Content-Transfer-Encoding: base64\r\n";
                $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
                $body .= $encoded_content; 
            }
    else{ //send plain email otherwise
       $headers = "From:".$from_email."\r\n".
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
        $body = $sender_message;
    }

     $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {   
        $msgS = " Thank you for your email";
        header("Location:index.php?msgS=$msgS");
    }else{
        $msgF = "Could not send mail! Please check your PHP mail configuration.";
        header("Location:index.php?msgF=$msgF");
    }
}
?>