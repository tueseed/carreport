<?php
    function reply_msg($txtin,$replyToken)//สร้างข้อความและตอบกลับ
    {
        $access_token = '64mToyVw4+za6kVL11w3Y1prvzNOwP9M9n7pg4i4KT4dwc7LBQitl8IePRlDFSx0YwnsOkyaE37OS6OQTsBVRxzaMht89WQecqH9K2EONo1dBn8kMK8QgoTQoE5oQ5Uw18RxzsGum86qi5O/p8G92lGUYhWQfeY8sLGRXgo3xvw=';
        $messages = ['type' => 'text','text' => $txtin];//สร้างตัวแปร 
        $url = 'https://api.line.me/v2/bot/message/reply';
        $data = [
                'replyToken' => $replyToken,
                'messages' => [$messages],
            ];
        $post = json_encode($data);
        $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result . "\r\n";
    }

$content = file_get_contents('php://input');//รับข้อมูลจากไลน์
$events = json_decode($content, true);//แปลง json เป็น php
if (!is_null($events['events'])) //check ค่าในตัวแปร $events
{
    foreach ($events['events'] as $event) {
        if ($event['type'] == 'message' && $event['message']['type'] == 'text')
        {
            $replyToken = $event['replyToken']; //เก็บ reply token เอาไว้ตอบกลับ
            $txtin = $event['message']['text'];//เอาข้อความจากไลน์ใส่ตัวแปร $txtin
            reply_msg($txtin,$replyToken);      
        }
    }
}
echo "BOT OK";