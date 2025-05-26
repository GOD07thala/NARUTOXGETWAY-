<?php

function rando($length) {$characters = '1234567890QWERTYUIOPASDFGHJKLZXCVBNM1234567890';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)];
}return $randomString;}

$user=$_GET['s2'];
$refer=$_GET['s1']; 
$offer=$_GET['s3']; 
$event=$_GET['s4']; 
$token=$_GET['token'];

$json_object380 = file_get_contents("$token/gatew00/index1.json"); 
$data360 = json_decode($json_object380, true);
$guid=$data360['31'];
$mid=$data360['11'];
$mkey=$data360['21'];

$json_object= file_get_contents("$token/offer/$offer.json"); 
$data = json_decode($json_object, true);
$cname=$data['campname'];
$uam=$data['useramo'];
$aam=$data['referamo'];
$apc=$data['refercom'];
$upc=$data['usercom'];
$event1=$data['goal'];

$json_objectt= file_get_contents("$token/gatew00/tele.json"); 
$dataa = json_decode($json_objectt, true);
$tg=$dataa['tg'];

if(file_exists("$token/offer/$offer.json")){
if($event==$event1){


if(file_exists("$token/bannumber/$user.json") and file_exists("$token/bannumber/$refer.json")){
$outputr="This Number Banned";
$outputu="This Number Banned";
}else{

if(file_exists("$token/bannumber/$user.json")){

$upcd=urlencode($upc);$apcd=urlencode($apc);
$mid="$mid";
$mkey="$mkey";
$guid="$guid";

$url11="https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$refer&amount=$aam&info=$apcd";
$g[]='user-agent: HttpCanary/3.3.5';$g[]='Host: job2all.xyz';$g[]='accept: */*';$ch=curl_init();curl_setopt($ch, CURLOPT_URL,$url11);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$g);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS);curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$outputr=curl_exec($ch);$json=json_decode($outt,1);curl_close ($ch);
$outputu="This Number Banned";
}else{

if(file_exists("$token/bannumber/$refer.json")){
$upcd=urlencode($upc);$apcd=urlencode($apc);
$mid="$mid";
$mkey="$mkey";
$guid="$guid";

$url="https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$user&amount=$uam&info=$upcd";
$h[]='user-agent: HttpCanary/3.3.5';$h[]='Host: job2all.xyz';$h[]='accept: */*';$ch=curl_init();curl_setopt($ch, CURLOPT_URL,$url);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$h);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS);curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$outputu=curl_exec($ch);$json=json_decode($one3,1);curl_close ($ch);
$outputr="This Number Banned";
}else{

if($user==$refer){
$upcd=urlencode($upc);$apcd=urlencode($apc);
$mid="$mid";
$mkey="$mkey";
$guid="$guid";

$url="https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$user&amount=$uam&info=$upcd";
$h[]='user-agent: HttpCanary/3.3.5';$h[]='Host: job2all.xyz';$h[]='accept: */*';$ch=curl_init();curl_setopt($ch, CURLOPT_URL,$url);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$h);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS);curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$outputu=curl_exec($ch);$json=json_decode($one3,1);curl_close ($ch);
$outputr="User Try Self Refer";
}else{

$upcd=urlencode($upc);$apcd=urlencode($apc);
$mid="$mid";
$mkey="$mkey";
$guid="$guid";

$url11="https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$refer&amount=$aam&info=$apcd";
$g[]='Host: job2all.xyz';$g[]='accept: */*';$ch=curl_init();curl_setopt($ch, CURLOPT_URL,$url11);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$g);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS);curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$outputr=curl_exec($ch);$json=json_decode($outt,1);curl_close ($ch);

$url="https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$user&amount=$uam&info=$upcd";
$h[]='Host: job2all.xyz';$h[]='accept: */*';$ch=curl_init();curl_setopt($ch, CURLOPT_URL,$url);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$h);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS);curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$outputu=curl_exec($ch);$json=json_decode($one3,1);curl_close ($ch);

}}}}

echo"$one3<br>$outt";

$msgg="<b>🚀 New Conversion 🚀\n✅ Offer :</b> $cname <b>[</b><code>$offer</code><b>]\nEvent :</b> $event1\n\n<b>✅ User:</b> $user\n<b>✅ Amount</b> $uam\n<b>✳️ Status:</b> $outputu\n<b>✅ Refer:</b> $refer\n<b>✅ Amount</b> $aam\n<b>✳️ Status:</b> $outputr\n<b>⚡ Lead:</b> $cont\n<b>🔱 Devloped by SwatCampaign.xyz</b>";
$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot7588554746:AAHB-0BHIR96G3W0m6wK8cxB44Zugd3YUtU/sendMessage?chat_id=$tg&text=$mess&parse_mode=Html";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);
$file=file_get_contents("$token/counte/lead.txt"); 
 file_put_contents("$token/counte/lead.txt",''.$file.' {"campst":"","offer":"'.$name.'","id":"'.$offer.'","event":"'.$event.'","uamt":"'.$uamt.'","ramt":"'.$ramt.'","usta":"'.$outputu.'","rsta":"'.$outputr.'","cont":"'.$cont.'","user":"'.$user.'","refer":"'.$refer.'"}+');
 
$ci=file_get_contents("$token/Checkref/$offer/$refer.txt");
file_put_contents("$token/Checkref/$offer/$refer.txt",$ci+1);
}}
 ?>
