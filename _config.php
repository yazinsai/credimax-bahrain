<?php
/**
 * These parameters need to be configured before the script can
 * work. You would receive these paramters from Credimax when you
 * submit the application for an online credit card processing
 * account.
 */

$CONFIG = array(
	"merchant"		=> "EXXXXXXXX", // Replace this with your Merchant key from Credimax
	"access_code"	=> "XXXXXXXX", // Replace this with your Access Code from Credimax
	"return_url"	=> "http://your-doma.in/callback.php" // Replace this with the return URL
	);
?>