<?php

return [
    'name' => 'paypal',
    'description' => 'PayPal - Safe, Secured and Easy to pay online!',
    'account_id' => env('PP_ACCOUNT_ID', 'abdelmoneim.payment-facilitator@gmail.com'),
    'client_id' => 'AU-Q7HJRwqpcACLhW-9YITL-rBO1VGOtLU4ATipdYjJronLcQx6SHbhZz_DiWdNt8-PuVbMkAGp0DaYd',
    'client_secret' =>'EIN7XqVnyKryWe21RpNOs8dBJQ73G6S8_C-inJyzcnlWhzJISi7H2Eu8AhWRB_kNKEhkDHVZ7A70AT4p',
    'api_url' => env('PP_API_URL', 'https://api.sandbox.paypal.com'),
    'redirect_url' => env('PP_REDIRECT_URL', 'xxxx'),
    'cancel_url' => env('PP_CANCEL_URL', 'xxxx'),
    'failed_url' => env('PP_FAILED_URL', 'xxxx'),
    'mode' => env('PP_MODE', 'xxxx')
];