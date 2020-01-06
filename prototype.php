
<?php 
    // Waripay includes
    include 'lib/WariPay/Core/Init.php';
    include 'lib/WariPay/Core/CurlHttpClient.php';
    include 'lib/WariPay/Core/Endpoints.php';
    include 'lib/WariPay/Auth/AuthorizationToken.php';
    include 'lib/WariPay/Transaction/Create.php';
?>

<?php
 
    Init('API-WPAY-9b1763d8-2906-11ea-980b-e470b80f3a7e', 'hcamara8@outlook.com');

    function Create_Transaction($customer_email, $amount){
        OPEN_WPAY_SESSION();
        return CREATE_WPAY_TRANSACTION($customer_email, $amount);
    }

    echo Create_Transaction('hamadi.camara@outlook.com', 100)

?>
