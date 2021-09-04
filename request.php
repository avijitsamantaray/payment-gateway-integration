<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = $_POST['phn_no'];
    $amount = $_POST['amount'];

        session_start();

        $ch = curl_init();
        

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:test_deee3e2660ec4edd5fd787633e1",
                        "X-Auth-Token:test_cfa733f2d59dfe108f0121e296d"));
        $payload = Array(
            'purpose' => 'Donation for ABC Orphanage',
            'amount' => $amount,
            'phone' => $contact_no,
            'buyer_name' => $name,
            'redirect_url' => 'http://localhost:3000/redirect.php',
            'send_email' => true, 
            'send_sms' => true,
            'email' => $email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 
        $response = json_decode($response);
        $_SESSION['TID'] = $response->payment_request->id;

        header('location:'.$response->payment_request->longurl);
        
       
        die();
}
?>
