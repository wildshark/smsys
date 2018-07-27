<?php
/****************************************************************************\

sms.php - SMS Alert from a single PHP file. MIT license.

Copyright (c) 2016 iQuipe Digital Software Integration.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.

$sms = new sms_alert();

$sms->sms_alert_sender($_to,$_from,$_msg);

\****************************************************************************/
$sms = new sms_alert();

$sms->sms_alert_sender($_to,$_from,$_msg);


class sms_alert{

    if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        if (isset($_POST['to']) && isset($_GET['msg']){
            $_to = $_POST['to'];
            $_msg = $_POST['msg'];
        }else{
            $_to = $_GET['to'];
            $_msg = $_GET['msg'];
        }
    }
   
    public function sms_alert_sender($_to,$_from,$_msg){

        $respone = new stdClass();
        $bulksms = new stdClass();
            //username from SMSAPI
            $bulksms->username = 'bsgh-iquipe';
            //or 'password' => md5('open-text-password'),
            $bulksms->password = 'passwd82';
            //destination number
            $request->to = $_to;
            //sender name has to be active
            $request->from = $_from;
            //message content
            $request->message = $_msg;
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