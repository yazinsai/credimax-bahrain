<?php
/**
 * These parameters need to be configured before the script can
 * work. You would receive these paramters from Credimax when you
 * submit the application for an online credit card processing
 * account.
 */

$CONFIG = array(
	"domain"      => "http://your-doma.in/", // This is your domain
	"script-out"  => "http://your-doma.in/credimax-out.php", // The script that redirects the user out
	"script-in"	  => "http://your-doma.in/credimax-in.php", // The callback URL, once payment is complete
	"merchant"    => "EXXXXXXXX", // Replace this with your Merchant key from Credimax
	"access_code"	=> "XXXXXXXX" // Replace this with your Access Code from Credimax
	);
?>