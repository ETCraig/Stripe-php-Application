<?php 
    // require('vender/autoload.php');

    \Stripe\Stripe::setApiKey('sk_YOURSERVERKEY');

    //Sanitize
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

    //Create Stripe Customer
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $email
    ));

    //Charge
    $charge = \Stripe\Charge::create(array(
        "amount" => 6000,
        "currency" => "usd",
        "description" => "Intro To php Course",
        "customer" => $customer->id
    ));

    //Redirect to Completed
    header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
?>