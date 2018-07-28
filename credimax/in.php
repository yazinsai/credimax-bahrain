<?php
/*
 * This script receives the response from the Credimax server. It performs all of the
 * necessary duties (saving the entire response, processing for successful/failed
 * transactions) and then redirects to the 'done.php' page for display to the user.
 */
require_once "./_config.php";
?>
<?php
// Retrieve the results from the Credimax page
unset($_GET["vpc_SecureHash"]);

// Standard Receipt Data
$_title                   = @$_GET["Title"];
$_amount                  = @$_GET["vpc_Amount"];
$_locale                  = @$_GET["vpc_Locale"];
$_batchno                 = @$_GET["vpc_BatchNo"];
$_command                 = @$_GET["vpc_Command"];
$_message                 = @$_GET["vpc_Message"];
$_version                 = @$_GET["vpc_Version"];
$_card                    = @$_GET["vpc_Card"];
$_orderinfo               = @$_GET["vpc_OrderInfo"];
$_receiptno               = @$_GET["vpc_ReceiptNo"];
$_merchant                = @$_GET["vpc_Merchant"];
$_authorizeid             = @$_GET["vpc_AuthorizeId"];
$_merchtxnref             = @$_GET["vpc_MerchTxnRef"]; # = 'unique payment id'
$_transactionno           = @$_GET["vpc_TransactionNo"];
$_acqresponsecode         = @$_GET["vpc_AcqResponseCode"];
$_txnresponsecode         = @$_GET["vpc_TxnResponseCode"];
// 3-D Secure Data
$_vertype                 = @$_GET["vpc_VerType"];
$_verstatus               = @$_GET["vpc_VerStatus"];
$_vertoken                = @$_GET["vpc_VerToken"];
$_versecuritylevel        = @$_GET["vpc_VerSecurityLevel"];
$_3dsenrolled             = @$_GET["vpc_3DSenrolled"];
$_3dsxid                  = @$_GET["vpc_3DSXID"];
$_3dseci                  = @$_GET["vpc_3DSECI"];
$_3dsstatus               = @$_GET["vpc_3DSstatus"];

// Store the results in your Database

// Redirect to the relevant page
if($success) {
	htmlRedirect($CONFIG['root']."pay/complete/?pid={$_merchtxnref}&success=1");
}
else {
	// Failed. Include an error message
	htmlRedirect($CONFIG['root']."pay/complete/?pid={$_merchtxnref}&success=0&error=".strtolower(urlencode($_message)));
}
?>
