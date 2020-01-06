<?php

    $GLOBALS['BASE_URL_SANDBOX'] = 'https://api.waripay.io/sandbox/api/v1/';
    $GLOBALS['BASE_URL_PRODUCTION'] = 'https://api.waripay.io/api/v1/';

    $GLOBALS['BASE_URL_REDIRECT'] = 'https://waripay.io/#/Payment/return?code=';
    $GLOBALS['SUCCESS_REDIRECT'] = $GLOBALS['BASE_URL_REDIRECT'].'200';
    $GLOBALS['ERROR_REDIRECT'] = $GLOBALS['BASE_URL_REDIRECT'].'500';

    $GLOBALS['APIKEY'] = '';
    $GLOBALS['ACCOUNT_EMAIL_ADDRESS'] = '';
    $GLOBALS['MODE'] = '';
    $GLOBALS['BASE_URL'] = '';
    $GLOBALS['SESSION_TOKEN'] = '';

    function INIT($apikey, $email, $mode='PROD'){
        $GLOBALS['APIKEY'] = $apikey;
        $GLOBALS['ACCOUNT_EMAIL_ADDRESS'] = $email;
        $GLOBALS['MODE'] = $mode;
        if($GLOBALS['MODE'] == 'PROD' || $GLOBALS['MODE'] == 'PRODUCTION'){
            $GLOBALS['BASE_URL'] = $GLOBALS['BASE_URL_PRODUCTION'];
        }else {
            $GLOBALS['BASE_URL'] = $BASE_URL_SANDBOX;
        }
    }

    function CONFIG_REDIRECT($SUCCESS_URL, $ERROR_URL){
        $GLOBALS['SUCCESS_REDIRECT'] = $SUCCESS_URL;
        $GLOBALS['ERROR_REDIRECT'] = $ERROR_URL;
    }

?>