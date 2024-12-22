<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<?php

class reCaptcha {
    public function verify() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['g-recaptcha-response'])) {
                $token = $_POST['g-recaptcha-response'];
                $secretKey = 'YOUR_SITE_SECRET_KEY'; // Replace with your reCaptcha v2 secret key
                $url = 'https://www.google.com/recaptcha/api/siteverify';

                $data = array(
                    'secret' => $secretKey,
                    'response' => $token
                );

                $options = array(
                    'http' => array(
                        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                        'method' => 'POST',
                        'content' => http_build_query($data)
                    )
                );

                $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $response = json_decode($result);

                if ($response->success) {
                    return array('success' => true, 'message' => 'Verification successful');
                } else {
                    return array('success' => false, 'message' => 'Verification failed');
                }
            }
        }
        return array('success' => true, 'message' => 'Invalid request');
    }
}