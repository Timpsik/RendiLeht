<?php

if(isset($_POST['Add person']))
{
	$email_id=$_POST['email'];
	$pass=$_POST['password'];
	$code=substr(md5(mt_rand()),0,15);
	mysql_connect('localhost','mikk','parool');
	mysql_select_db('andmebaas');
	
	$insert=mysql_query("insert into verify values('','$email','$pass','$code')");
	$db_id=mysql_insert_id();

	$message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject="Activation Code For rendileht";
    $from = 'rendileht@gmail.com';
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verification.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);
	
	echo "An Activation Code Is Sent To You Check You Emails";
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id=$_GET['id'];
	$code=$_GET['id'];
	mysql_connect('localhost','mikk','parool');
	mysql_select_db('andmebaas');
	$select=mysql_query("select email,password from verify where id='$id' and code='$code'");
	if(mysql_num_rows($select)==1)
	{
		while($row=mysql_fetch_array($select))
		{
			$email=$row['email'];
			$password=$row['password'];
		}
		$insert_user=mysql_query("'INSERT INTO `inimesed` (`Id`, `Nimi`, `Elukoht`, `Telefon`, `Isikukood`, `Meil`, `Pangakonto`) 
	VALUES (NULL, $passowrd, NULL, NULL, NULL, $email, NULL)'););
		$delete=mysql_query("delete from verify where id='$id' and code='$code'");
	}
}

?>