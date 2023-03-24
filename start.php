<?php 

    $amount = $_GET['amount'];

    $apikey = "63f46a28258ae"; //Your Api Key

    $clientkey = "63f46a28258ba"; //Your Client Key

    $secretkey = "1869388299"; //Your Secret Key

    $cus_name = $_GET['full_name'];

    $cus_email = $_GET['email_add'];

    //success url

    $success_url = "https://gamescityapps.xyz/EDokanPay/after_payment.php?amount=10";

    //cancel url

    $cancel_url = "https://gamescityapps.xyz/EDokanPay/cancel.php?amount=10";

    $hostname = "https://gamescityapps.xyz";

    $curl = curl_init();

    curl_setopt_array($curl, array(

    CURLOPT_URL => 'https://pay.edokanpay.com/checkout.php',

    CURLOPT_RETURNTRANSFER => true,

    CURLOPT_ENCODING => '',

    CURLOPT_MAXREDIRS => 10,

    CURLOPT_TIMEOUT => 0,

    CURLOPT_FOLLOWLOCATION => true,

    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    CURLOPT_CUSTOMREQUEST => 'POST',

    CURLOPT_POSTFIELDS => array('api' => $apikey,'client' => $clientkey,'secret' => $secretkey,'amount' => $amount,'position' => $hostname,'success_url' => $success_url,'cancel_url' => $cancel_url,'cus_name' => $cus_name,'cus_email' => $cus_email),

    ));

    $response = curl_exec($curl);

    curl_close($curl);

    echo $response;

?>
