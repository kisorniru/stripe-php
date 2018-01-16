<?php

	$minimum_ammount = 10000;
	$sended_ammount = $_POST['send_ammount'];

	if ($sended_ammount < $minimum_ammount)
	{
		return header('Location: index.php?error_msg=ammount must be more than 1000.');
	}
	
	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	require_once("vendor/autoload.php");

	\Stripe\Stripe::setApiKey("sk_test_gs3LyGJ9ebz8h63iK01wFgDc");

	// Token is created using Checkout or Elements!
	// Get the payment token ID submitted by the form:
	$token = $_POST['stripeToken'];

	// Charge the user's card:
	$charge = \Stripe\Charge::create(array(
	  "amount" => $sended_ammount,
	  "currency" => "usd",
	  "description" => "Example charge",
	  "source" => $token,
	));

	// return header('Location: ' . $_SERVER['HTTP_REFERER']);
	return header('Location: index.php?success_msg=Payment successfully paid.');

?>