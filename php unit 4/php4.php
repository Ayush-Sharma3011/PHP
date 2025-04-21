<?php
$check=mail("To: kartikchoudhary0543@gmail.com","Test Email", "This is a test email", "From: sharmaayush300424@gmail.com");
if($check){
    echo "Email sent successfully";
}else{
    echo "Email sending failed";
}   



?>