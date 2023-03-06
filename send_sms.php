 <?php
     // create a new cURL resource
     
    class Sms
    {
        public function send_sms($message,$mobile)
        {
            $message = urlencode($message);
            $ch = curl_init();
          
           

              // curl_setopt($ch, CURLOPT_URL, "http://app2.smsmarathwada.com/vendorsms/pushsms.aspx?clientid=956f3dce-96aa-4459-a672-7b52371db53d&apikey=3d0911e6-fe73-4247-b8a0-cbc3b8c249f9&msisdn=$mobile&sid=SPACEY&msg=$message&fl=0&gwid=2");
                curl_setopt($ch, CURLOPT_URL, "http://app.smsmarathwada.com:6005/api/v2/SendSMS?ApiKey=3txfN/pNHzXHQYLnHX/7Dotk6l4rWXYZElfcTwnYCSg=&ClientId=9296eb51-4a4e-4782-9a3d-b96738701095&SenderId=SPACEY&Message=$message&MobileNumbers=$mobile");
              

            //curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            
            curl_exec($ch);
            curl_close($ch);
            // echo $result;
        }
    }
    /*$obj=new Sms();
     $number="8308850803";
     $message="Welcome to smartpacey sunil. You have apply for career improvement project .please visit our near branch for more information. Smartpacey Department";
     $data=$obj->send_sms($message,$number);*/
?>