<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['Access-Control-Allow-Origin'. '*'],
    'allowedMethods' => ['Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
