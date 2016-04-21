<?php

$to='kiran.chinna12520@gmail.com';
$sub='Test email only...';
$body='junk junky';
$headers='From:ambatikirankumar4@gmail.com';

if(mail($to,$sub,$body,$headers))
	echo 'Successful...';
else
	echo 'Failed.'
?>
