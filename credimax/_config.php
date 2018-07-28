<?php
/**
 * These parameters need to be configured before the script can
 * work. You would receive these paramters from Credimax when you
 * submit the application for an online credit card processing
 * account.
 */

$CONFIG = array(
	"script-out"    => "http://domain.com/credimax/out.php", // The script that redirects the user out
	"script-in"	    => "http://domain.com/credimax/in.php", // The callback URL, once payment is complete
	"merchant"      => "EXXXXXXXX", // Replace this with your Merchant key from Credimax
	"access_code"  	=> "XXXXXXXX", // Replace this with your Access Code from Credimax
	"secure_secret" => "0961EDB23364DD6B4850A9EADA1C2038" // Replace this with your Secure Secret from Credimax
	);
?>
