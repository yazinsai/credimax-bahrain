<?php
// Pull in the configuration parameters
require_once "./_config.php"; // Now we can access the $CONFIG params

// Get the amount (if set)
$amount = @$_REQUEST['amount']; // in BHD
if(!empty($amount)){
	// Send the request to the payment script

	// Generate the request first
	$credimax = array(
		"vpc_Merchant"            =>$CONFIG['merchant'],
		"vpc_Amount"              =>$amount*1000, // convert to fils
		"vpc_AccessCode"          =>$CONFIG['access_code'],
		"vpc_ReturnURL"           =>$CONFIG['return_url'],
		"vpc_MerchTxnRef"         =>rand(1,100), // Use a unique ID [that's stored in your DB], Max Length = 40
		"Title"                   =>"PHP Payment Script",
		"vpc_OrderInfo"           =>"Order checkout", // Put anything, Max Length = 34
		"virtualPaymentClientURL" =>"https://migs.mastercard.com.au/vpcpay",
		"vpc_Version"             =>"1",
		"vpc_Command"             =>"pay",
		"vpc_Locale"              =>"en",
		"vpc_TicketNo"            =>"", // optional
		"vpc_TxSourceSubType"     =>"" // optional; allowed values are SINGLE | INSTALLMENT | RECURRING
    );

  // Encode the credimax array into a GET string
  $gluedurl="{$CONFIG['script-out']}?";
  $arrindex=0;
  foreach($credimax as $key=>$value) {
    // If not first item, add the '&'
    if($arrindex>0) $gluedurl.="&";
    // Encode the key/value pair
    $gluedurl.=urlencode($key)."=".urlencode($value);
    // Increment index
    $arrindex++;
  }

  // Redirect to the credimax-out sript
  Header("Location: {$gluedurl}");
  die();
}
?>
<html>
<head>
	<title>Main Page</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<h1>Set the amount</h1>
				<form action='./' method='post'>
					Amount to charge: <input type='text' name='amount'>
					<button type='submit' class='btn btn-primary'>Pay now</button>
				</form>
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</html>