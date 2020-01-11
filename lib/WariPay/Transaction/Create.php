<?php
    function CREATE_WPAY_TRANSACTION($CUSTOMER_EMAIL, $AMOUNT){
        // define header
        $header = [
            'Content-Type: application/json',
            'Authorization: Bearer '.$GLOBALS['SESSION_TOKEN']];
            
        // make request
        $response = json_decode(http(GET_TRANSACTION_CREATE_ENDPOINT(),$header,json_encode([
            "destination"=> $GLOBALS['ACCOUNT_EMAIL_ADDRESS'],
            "email"=> $CUSTOMER_EMAIL,
            "nbToken"=> $AMOUNT,
            "type"=> "PAYMENT",
            "options"=> '{"success": "'.$GLOBALS["SUCCESS_REDIRECT"].'","error": "'.$GLOBALS["ERROR_REDIRECT"].'"}'
        ]),'post'), true);

        return $response['wpayId'];
    }
?>