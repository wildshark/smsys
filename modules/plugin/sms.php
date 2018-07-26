<?php

class sms{

    public function __set($to, $msg){

        $respone = new stdClass();
        $bulksms = new stdClass();
            //username from SMSAPI
            $bulksms->username = 'bsgh-iquipe';
            //or 'password' => md5('open-text-password'),
            $bulksms->password = 'passwd82';
            //destination number
            $request->to = $_GET['to'];
            //sender name has to be active
            $request->from = $_GET['from'];
            //message content
            $request->message = $_GET['msg'];
            //API http

            $url = 'http://sms.bernsergsolutions.com:8080/bulksms/bulksms?';

            $c = curl_init();
            curl_setopt($c,CURLOPT_URL,$url);
            curl_setopt($c,CURLOPT_POST,true);
            curl_setopt($c,CURLOPT_POSTFIELDS, 'username='.$bulksms->username.'&password='.$bulksms->password.
                '&type=0&dlr=1&destination='.$request->to.'&source='.$request->from.'&message='.$request->message);
            curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
            $content = curl_exec($c);
            curl_close($c);

            $str_total = strlen($content);
            $text = 4 - $str_total;

            $msg = substr($content,0,$text);

            if ($msg == 1701){

                $respone->Status = "successful";
                $respone->code = "1701";
                $respone->to = $request->to;
                $respone->from = $request->from;
                
            }else{

                $respone->Status = "Failed";
                $respone->code = "1702";
                $respone->to = $request->to;
                $respone->from = $request->from;
                
            }

            header("Content-Type: application/json; charset=UTF-8");
            $my_json_output = json_encode($respone);
            echo $my_json_output;


    }
}

?>