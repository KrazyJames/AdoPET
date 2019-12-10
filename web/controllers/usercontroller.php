<?php
    class usercontroller{
        public $url = 'http://adopet.test/AdoPetWS/public/';

        public function login($coreo, $contrasena){
            $login_url = $this->url . 'users/login';
    
            //Initiate cURL.
            $ch = curl_init($login_url);
            
            //The JSON data.
            $jsonData = array(
                'correo' => $coreo,
                'contrasena' => $contrasena
            );
            
            //Encode the array into JSON.
            $jsonDataEncoded = json_encode($jsonData);
            
            //Tell cURL that we want to send a POST request.
            curl_setopt($ch, CURLOPT_POST, 1);
            
            //Attach our encoded JSON string to the POST fields.
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
            
            //Set the content type to application/json
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
            
            //Execute the request
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }
    }
    