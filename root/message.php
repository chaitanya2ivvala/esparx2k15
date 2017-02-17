<?php
$message = "";
$msg = preg_replace('#[^a-z 0-9.:_()]#i', '', $_GET['msg']);
if($msg == "activation_failure"){
	$message = '<h2>Activation Error</h2> Sorry there seems to have been an issue activating your account at this time. We have already notified ourselves of this issue and we will contact you via email when we have identified the issue.';
} else if($msg == "activation_success"){
	$message = '<h2>Payment</h2> Pay rs200/- to activate your account.<br><br> <div class="pm-button"><a href="https://www.payumoney.com/paybypayumoney/#/101293"><img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/112.png" /></a></div>';
} else {
	$message = $msg;
}
?>
<div><?php echo $message; ?></div>
