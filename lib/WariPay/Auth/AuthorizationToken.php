<?php
    function OPEN_WPAY_SESSION(){
        // define header
        $header = ['Content-Type: application/json'];
        // make request
        $response = json_decode(http(GET_AUTHORIZATION_TOKEN_ENDPOINT(),$header,json_encode([
            "email"=> $GLOBALS['ACCOUNT_EMAIL_ADDRESS'],
            "apikey"=> $GLOBALS['APIKEY']
        ]),'post'), true);
        $GLOBALS['SESSION_TOKEN'] = $response['token'];
    }
?>