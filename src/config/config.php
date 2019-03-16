<?php

return [

    /*
    |--------------------------------------------------------------------------
    | gondapay Service Config
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo / ZapakPay / Mocker
    |   view    = File
    */

    'gateway' => 'Mocker',                // Replace with the name of default gateway you want to use

    'testMode'  => true,                   // True for Testing the Gateway [For production false]

    'ccavenue' => [                         // CCAvenue Parameters
        'merchantId'  => env('INDIPAY_MERCHANT_ID', ''),
        'accessCode'  => env('INDIPAY_ACCESS_CODE', ''),
        'workingKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'gondapay/response'),
        'cancelUrl' => env('INDIPAY_CANCEL_URL', 'gondapay/response'),

        'currency' => env('INDIPAY_CURRENCY', 'INR'),
        'language' => env('INDIPAY_LANGUAGE', 'EN'),
    ],

    'payumoney' => [                         // PayUMoney Parameters
        'merchantKey'  => env('INDIPAY_MERCHANT_KEY', ''),
        'salt'  => env('INDIPAY_SALT', ''),
        'workingKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'successUrl' => env('INDIPAY_SUCCESS_URL', 'gondapay/response'),
        'failureUrl' => env('INDIPAY_FAILURE_URL', 'gondapay/response'),
    ],

    'ebs' => [                         // EBS Parameters
        'account_id'  => env('INDIPAY_MERCHANT_ID', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'return_url' => env('INDIPAY_SUCCESS_URL', 'gondapay/response'),
    ],

    'citrus' => [                         // Citrus Parameters
        'vanityUrl'  => env('INDIPAY_CITRUS_VANITY_URL', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'returnUrl' => env('INDIPAY_SUCCESS_URL', 'gondapay/response'),
        'notifyUrl' => env('INDIPAY_SUCCESS_URL', 'gondapay/response'),
    ],

    'instamojo' =>  [
        'api_key' => env('INSTAMOJO_API_KEY',''),
        'auth_token' => env('INSTAMOJO_AUTH_TOKEN',''),
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'gondapay/response'),
    ],

    'mocker' =>  [
        'service' => env('MOCKER_SERVICE','default'),
        'redirect_url' => env('MOCKER_REDIRECT_URL', 'gondapay/response'),
    ],

    'zapakpay' =>  [
        'merchantIdentifier' => env('ZAPAKPAY_MERCHANT_ID',''),
        'secret' => env('ZAPAKPAY_SECRET', ''),
        'returnUrl' => env('ZAPAKPAY_RETURN_URL', 'gondapay/response'),
    ],

    // Add your response link here. In Laravel 5.2 you may use the api middleware instead of this.
    'remove_csrf_check' => [
        'gondapay/response'
    ],





];
