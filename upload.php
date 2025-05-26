<?php 

$refer=$_GET['ref'];
$ref=base64_decode($refer);

//Enter your website name with folder where you uploaded php

$site='https://mr-campy.xyz/screenshot/';

//enter chat id or telegram user id

$chat_id='6722166633';

//enter your bot token here


$token='7588554746:AAHB-0BHIR96G3W0m6wK8cxB44Zugd3YUtU';

?>

<!DOCTYPE html><html><head><meta charset="windows-1252"><title>Techno Camp </title><meta name="viewport" content="width=device-width">

<link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"><style> body { font-family: 'Poppins', sans-serif; height: 100vh; width: 97%;  background-image: linear-gradient(135deg, #00A1FF 55%, #005AFF 100%);}

hr{border:1;height:0px;text-align: center; background:gold}

h1 { font-family: 'Poppins', sans-serif; color: gold; font-size: 28px; letter-spacing: 1px; text-align: center; }h2 { border: 4px dotted blue;}
.text{font-size:16px;color: #616161;outline:0;border-radius:5px;background-color:white;position:relative;font-family:Bree Serif;text-align:left;padding:8px 5px;height:30px;border:solid 3px gold;margin-bottom:5px; margin-top:5px; box-shadow:4px 4px 10px rgb(196, 196, 196);width:80%;}
.text:hover{border:solid 1px #;}.submit{font-size:16px;color:#ffffff;position:relative;background-color:#7e12e3;outline:0;border-radius:5px;font-family:Bree Serif;text-align:center;padding:8px 5px;height:45px;border:solid 1px #7e12e3;margin-bottom:1%; margin-top:2%; box-shadow:4px 4px 10px #7e12e3;width:60%;}.submit:hover{background:#3d7deb;color:#ffffff;border:solid 1px #611aef;}h3{color:#6200ff;padding:5px 0;}strong{color:orange;}marquee{color:black;font-size: 20px;text-align: center;font-weight:bold;}balance{color:#6200ff;font-size: 20px;text-align: center;font-weight:bold;}gzp{color:black; background-color: #ffffff; border-radius: 5px; margin-bottom:3px; font-size: 20px;text-align: center;font-weight:bold;margin-top:130%;}#loader { border: 12px solid #6200ff; border-radius: 50%; border-top: 12px solid #595959; width: 100px; height: 100px;text-align: center;animation: spin 1s linear infinite; } @keyframes spin { 100% { transform: rotate(360deg); } } .center { position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; }a{text-decoration:none;color:#6200ff;}a:hover{color:#FF0000;}::placeholder { color: #737373; font-size:16px;}audio{ display:none;}label{	font-size:16px;border:1px solid orange;}


.login-form{ width: 85%; background: #ffffff; height:380px; padding: 15px; position:relative;margin-top: 50px;align:center;border: 2px solid black; margin: 11px; align-content: center; align-items: center; border-radius: 4px; position: inherit; position:center; }

h4{height: auto;width: auto;color: #616161;font-family:Bree Serif;text-align:center;padding:10px;margin-top:1%; margin-bottom:1%;background-color:#ffffff; border-radius:10px; }p{height: auto;width: auto;color: #ffffff;background-image:linear-gradient(to right,rgb(252, 79, 10),rgb(252, 79, 10),rgb(255, 143, 5)); border-radius:5px;margin-bottom:1%;box-shadow:4px 4px 10px #ffffff;}p1{font-family:'Lobster', cursive;text-align:center;height: auto;width: auto; font-size:25px;color: #ffffff;background-image:linear-gradient(to right,rgb(252, 79, 10),rgb(252, 79, 10),rgb(255, 143, 5)); border-radius:5px;margin-bottom:1%;box-shadow:4px 4px 10px #ffffff;}
</style><body><center><br><br><br><br><br>
<div class="login-form">

<h1>Screenshot Campaign</h2>

<hr>
<br>
 
	
	
	
	 


<form action='' method='POST' enctype='multipart/form-data'>


 <input type='file' name='img_upload' class='text'><br>
 
 <input type='number' name="paytm" class="text" placeholder="Enter paytm number">
 
  <input type='hidden' name="name" value="<?php echo $img_name; ?>">
 
 <input type='hidden' name="ref1" value="<?php echo $ref; ?>">
 
 
 
 
 <input type='submit' name='img_submit' class='submit'><hr></form> 
 <br>
 <script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=";document.getElementsByTagName("head")[0].appendChild(script);})();</script> <a href="https://telegram.dog/Mr-Campy" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:15px;width:250px;background:#27A5E7;box-shadow:1px 1px 3px #27A5E7;color:#FFFFFF;border-radius:100px;" title=""><i></i> Join For Free Paytm Cash</a></center>
 
 

<?php if(isset($_POST['img_submit'])){ 	 	$img_name=$_FILES['img_upload']['name']; 


	$tmp_img_name=$_FILES['img_upload']['tmp_name']; 	move_uploaded_file($tmp_img_name,$img_name); 
	

$num=$_POST['paytm'];
$msg=$_POST['msg'];
$ref=$_POST['ref1'];
$name=$_POST['name'];


$tex='➡️ Paytm number: '.$num.'
➡️Referral number: '.$ref.'
➡️ip: '.$ip.'';

$text=urlencode($tex);

$a=file_get_contents('https://api.telegram.org/bot'.$token.'/sendPhoto?chat_id='.$chat_id.'&photo='.$site.''.$img_name.'&caption='.$text.'');
?>
 <?php echo "<script> alert('screenshot submited Successfully wait for payment'); </script>";
 
 } ?>

</div>






</body></center>
