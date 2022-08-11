<?php

////////HackElite//////

//CHANNEL:- T.ME/HACKELITE01////

error_reporting(0);

set_time_limit(0);

flush();

$API_KEY = $_ENV['BOT_TOKEN']; 

##------------------------------##

define('API_KEY',$API_KEY);

function bot($method,$datas=[]){

    $url = "https://api.telegram.org/bot".API_KEY."/".$method;

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);

    $res = curl_exec($ch);

    if(curl_error($ch)){

        var_dump(curl_error($ch));

    }else{

        return json_decode($res);

    }

}

 function sendmessage($chat_id, $text, $model){

	bot('sendMessage',[	'chat_id'=>$chat_id,

	'text'=>$text,

	'parse_mode'=>$mode

	]);

	}

	function sendaction($chat_id, $action){

	bot('sendchataction',[

	'chat_id'=>$chat_id,

	'action'=>$action

	]);

	}

//==============BENCHAM======================//

$update = json_decode(file_get_contents('php://input'));

$message = $update->message;

$message_id = $update->message->id;

$chat_id = $message->chat->id;

$name = $from_id = $message->from->first_name;

$from_id = $message->from->id;

$text = $message->text;

$fromid = $update->callback_query->from->id;

$username = $update->message->from->username;

$chatid = $update->callback_query->message->chat->id;

$callback_query = $update->callback_query->data;

$messageid = $update->callback_query->message->message_id;

$reply = $update->message->reply_to_message->message_id;

$START_MESSAGE = $_ENV['START_MESSAGE'];

//===============BENCHAM=============//

if ($text == "/start") {

            bot ("sendmessage" ، [

                'chat_id' => chat_id دولار ،

                'text' => "*** $ START_MESSAGE

استخدم *** `/ bin xxxxx` *** للتحقق من الحاوية في bin-su. ***" ،

'parse_mode' => 'MarkDown' ،

            

        ]) ؛

} إذا (strpos ($ text، "/ bin")! == false) {

$ bin = trim (str_replace ("/ bin"، ""، $ text))؛

$ data = json_decode (file_get_contents ("https://bins-su-api.now.sh/api/$bin") ، صحيح) ؛

$ bank = بيانات $ ['data'] ['bin']؛

بائع $ = بيانات دولار ['بيانات'] ['بائع'] ؛

$ type = $ data ['data'] ['type']؛

مستوى الدولار = بيانات دولار ['بيانات'] ['مستوى'] ؛

$ bank = بيانات $ ['data'] ['bank'] ؛

$ country = $ data ['data'] ['country']؛

إذا ($ data ['data']) {

bot ("sendmessage" ، [

                'chat_id' => chat_id دولار ،

                'text' => "*** VALID BIN✅

               

➤ Bɪɴ: $ بن

➤ Tʏᴘᴇ: نوع $

➤ Bʀᴀɴᴅ: بائع دولار

➤ Bᴀɴᴋ: بنك بالدولار

➤ Cᴏᴜɴᴛʀʏ: $ country

➤ Cʀᴇᴅɪᴛ / Dᴇʙɪᴛ: نوع $

🔺 تم التحقق من BIN من قاعدة بيانات BIN-SU🔻 *** "،

'parse_mode' => "MarkDown" ،

]) ؛

    }

آخر {

bot ("sendmessage" ، [

                'chat_id' => chat_id دولار ،

                'text' => "INVALID BIN❌" ،

               

]) ؛

}

}

؟>
