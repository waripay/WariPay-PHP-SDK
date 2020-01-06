
<?php 
    // Waripay includes
    include 'lib/WariPay/Core/Init.php';
    include 'lib/WariPay/Core/CurlHttpClient.php';
    include 'lib/WariPay/Core/Endpoints.php';
    include 'lib/WariPay/Auth/AuthorizationToken.php';
    include 'lib/WariPay/Transaction/Create.php';
?>

<?php
    $YOUR_WARIPAY_API_KEY = '...';
    $YOUR_WARIPAY_EMAIL_ADDRESS = '...';
    Init($YOUR_WARIPAY_API_KEY, $YOUR_WARIPAY_EMAIL_ADDRESS);

    function Create_Transaction($customer_email, $amount){
        OPEN_WPAY_SESSION();
        return CREATE_WPAY_TRANSACTION($customer_email, $amount);
    }

    echo Create_Transaction('your_customer_email@waripay.io', 100)

?>
