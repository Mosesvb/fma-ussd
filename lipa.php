<?php
	session_start();
	require_once 'configureCyclos.php';
	header('Content-Type: text/xml');
	print '<?xml version="1.0" encoding="UTF-8"?>';



//Perform the payment from user c1 to c2
Cyclos\Configuration::setAuthentication($_SESSION["phonenumber"], $_SESSION["pin"]);

$transactionService = new Cyclos\TransactionService();
$paymentService     = new Cyclos\PaymentService();

try {
	$data = $transactionService->getPaymentData(
		array('username' => $_SESSION["username"]),
		array('username' => $_SESSION["payee_username"]));

	$parameters              = new stdclass();
	$parameters->from        = $data->from;
	$parameters->to          = $data->to;
	$parameters->type        = $data->paymentTypes[0];
	$parameters->amount      = $_SESSION["amount_paid"];
	$parameters->description = "Test payment to user";

	$paymentResult = $paymentService->perform($parameters);
	if ($paymentResult->authorizationStatus == 'PENDING_AUTHORIZATION') {
		// echo ("Not yet authorized\n");
		$_SESSION['muamala_msg'] = "Wewe Hauruhusiwi usirudie tena";
	} else {
		// echo ("Succesfull with id $paymentResult->id\n");
		$_SESSION['muamala_msg'] = "Hongera Muamala umefanikiwa na kumbukumbu namba $paymentResult->id\n";
	}
} catch (Cyclos\ServiceException $e) {
	switch ($e->errorCode) {
		case "VALIDATION":
			// echo ("Some of the parameters is invalid\n");
			$_SESSION['muamala_msg']= "Samahani kuna tatizo la kiufundi wasiliana na huduma kwa mteja";
			break;
		case "INSUFFICIENT_BALANCE":
			// echo ("Insufficient balance to perform the payment\n");
			$_SESSION['muamala_msg'] = "Samahani salio lako halitoshi ongeza salio kulipia ankara zako.";
			break;
		case "MAX_AMOUNT_PER_DAY_EXCEEDED":
			// echo ("Maximum amount exeeded today\n");
			$_SESSION['muamala_msg'] = "Samahani Umefikia kiwango cha mwisho kuhamisha hela kwa siku";
			break;
		default:
			// echo ("Error with code $e->errorCode while performing the payment\n");
			$_SESSION['muamala_msg'] = "Samahani Muamala haujakamilika jaribu tena mpenzi";
			break;
	}
}
?>

<page version="2.0">
<title protocol="wap java">Taarifa kuhusu muamala</title>
<div protocol="ussd">
	<?php echo $_SESSION['muamala_msg'] ?>
</div>
	<navigation>
		 <link pageId="end_session.php">Asante</link>
	</navigation>
</page>