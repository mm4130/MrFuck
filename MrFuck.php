<?php
define('API_KEY','270646938:AAHHGHFensbAN3KJk9fTPXhWnmCjPqUdmWM');
#========================================#
function index($method, $parameters) {
	if (!is_string($method)) {
	error_log("Method name must be a string\n");
	return false;
	}
  if (!$parameters) {
  $parameters = array();
  } else if (!is_array($parameters)) {
  error_log("Parameters must be an array\n");
  return false;
  }
  foreach ($parameters as $key => &$val) {
	  if (!is_numeric($val) && !is_string($val)) {
	  $val = json_encode($val);
	  }
	}
#========================================#
$url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method.'?'.http_build_query($parameters);
#========================================#
$ch = curl_init();
#========================================#
curl_setopt($ch,CURLOPT_URL,$url);
#========================================#
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
#========================================#
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($parameters));
#========================================#
$res = curl_exec($ch);
#========================================#
if(curl_error($ch)){
var_dump(curl_error($ch));
} else {
return json_decode($res);
}}
#========================================#
function save($file_name,$txt_data) {$myfile = fopen($file_name, "w") or die("Unable to open file!"); fwrite($myfile, "$txt_data"); fclose($myfile);}
#========================================#

#========================================#
$admin =  265228002;
#========================================#
$update = json_decode(file_get_contents('php://input'));
#========================================#
var_dump($update);
#========================================#
$from_id = $update->message->from->id;
#========================================#
$name = $update->message->from->first_name;
#========================================#
$username = $update->message->from->username;
#========================================#
$chat_id = $update->message->chat->id;
#========================================#
$chatid = $update->callback_query->message->chat->id;
#========================================#
$data = $update->callback_query->data;
#========================================#
$text = $update->message->text;
#========================================#
$message_id = $update->callback_query->message->message_id;
#========================================#
$message_id_feed = $update->message->message_id;
#========================================#
$textmessage = isset($update->message->text)?$update->message->text:'';
#========================================#
$txtmsg = $update->message->text;
#========================================#
$reply = $update->message->reply_to_message->forward_from->id;
#========================================#
$inline_query = $update->inline_query;
#========================================#
$query_id = $inline_query->id;
#========================================#
$query = $inline_query->query;
#========================================#
$callback_id = $update->callback_query->id;
#========================================#
$callback_data = $update->callback_query->data;
#========================================#
$tried = $update->callback_query->data+1;
#========================================#
$td = file_get_contents('http://api.foxteam.ir/');
if($token == $admin and $where == $iran){
  date_default_timezone_set('Asia/Tehran');
    echo date('h:i:s');}
#========================================#
//file_get_contents('https://api.telegram.org/bot'.API_KEY.'/sendmessage?parse_mode=Markdown&chat_id=@PvLogs&text=??SendToAll+Done!\nMembers:'.$usercounted.'\nTime:'.$time.'\nDate:'.$date.'Bot+Id:'.$un);
#========================================#

index('answerInlineQuery',
['inline_query_id'=>$query_id,
'results'=>json_encode([[
'thumb_url'=>'http://markdown-here.com/img/icon256.png',
'type'=>'article',
'id'=>base64_encode(1),
'title'=>'HTML/MarkDown',
'description'=>"Bold = *Text* | Italic = _Text_
Code = `Text` | Hyper = [Text](Link)",
'input_message_content'=>[
'message_text'=>"$query",
'parse_mode'=>'markdown']
],['thumb_url'=>'https://thisgamer.ir/HM.jpg',
'type'=>'article',
'id'=>base64_encode(2)
,'title'=>'5',
'description'=>$query,
'input_message_content'=>[
'message_text'=>'You have a message',
'parse_mode'=>'html'],
'reply_markup'=>[
'inline_keyboard'=>[[[
'text'=>'Read',
'callback_data'=>$query
]]]]]])]);


index('answerCallbackQuery',
['callback_query_id'=>$callback_id,
'text'=>$callback_data,
'show_alert'=>true
]);

if ($textmessage == '/start') {
//if (strpos($myfile2 , "$from_id") !== false  ) {
	index('sendMessage',
	['chat_id'=>$chat_id,
	'text'=>"<b>Welcome</b> <code>$name</code> :) $td",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'inline_keyboard'=>[[[
'text'=>'inline Mode',
'switch_inline_query'=>''],
['text'=>'Develepor',
'url'=>"https://T.me/isudo"
]]]])]);
}/*} else { 
			$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$from_id\n");
			fclose($myfile2);
			mkdir("data/".$from_id);
			save($from_id."/type.txt","member");
			save($from_id."/step.txt","none");
		     }*/
?>
