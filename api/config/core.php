<?php
    // show error reporting
    error_reporting(E_ALL);
    
    // set your default time-zone
    date_default_timezone_set('Asia/Manila');
    
    // variables used for jwt
    $key = "srhdp_key";
    $issued_at = time();
    $expiration_time = $issued_at + (60 * 60); // valid for 1 hour
    $issuer = "http://localhost/php-api/api/";

    //=========================for simple====================
    // show error reporting
    ini_set('display_errors', 1);
    
    // home page url
    $home_url="http://localhost/api/";
    
    // page given in URL parameter, default page is one
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    
    // set number of records per page
    $records_per_page = 5;
    
    // calculate for the query LIMIT clause
    $from_record_num = ($records_per_page * $page) - $records_per_page;
?>