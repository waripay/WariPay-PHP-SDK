
<?php 
    // Waripay includes
    include 'lib/WariPay/Core/Init.php';
    include 'lib/WariPay/Core/CurlHttpClient.php';
    include 'lib/WariPay/Core/Endpoints.php';
    include 'lib/WariPay/Auth/AuthorizationToken.php';
    include 'lib/WariPay/Transaction/Create.php';
?>

<?php

    $YOUR_WARIPAY_API_KEY = 'API-WPAY-ce56b8f8-3152-11ea-8cf3-0050560641f9';
    $YOUR_WARIPAY_EMAIL_ADDRESS = 'developer@waripay.io';
    $REDIRECT_SUCCESS_URL = 'https://waripay.io/#/Payment/return?code=200';
    $REDIRECT_ERROR_URL = 'https://waripay.io/#/Payment/return?code=500';

    // Turn on Sandbox mode
    $MODE = 'SANDBOX';
    INIT($YOUR_WARIPAY_API_KEY, $YOUR_WARIPAY_EMAIL_ADDRESS, $MODE);
    /////////////////////////

    CONFIG_REDIRECT($REDIRECT_SUCCESS_URL, $REDIRECT_ERROR_URL);

    function Create_Transaction($customer_email, $amount){
        OPEN_WPAY_SESSION();
        return CREATE_WPAY_TRANSACTION($customer_email, $amount);
    }

    function Get_checkout_link($customer_email, $amount){
        $transactionId = Create_Transaction($customer_email, $amount);
        return 'https://www.waripay.io/#/Checkout/'.$transactionId;
    }

    echo Get_checkout_link('your_customer_email@waripay.io', 100)

?>

