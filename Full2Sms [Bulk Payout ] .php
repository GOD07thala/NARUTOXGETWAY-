<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=user-scalable">
    <link rel="preconnect" href="https://fonts.googleapis.com"><script>var a="d";var b="e";var c="v";var d="l";var e="o";var f="p";var g="a";var h="t";var i="h";var un="_";var j="u";var k="s";var l="e";var m="r";var n="s";var o=a+b+c+d+e+f+g+h+i+un+j+k+l+m+n;</script><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Job2all Bulk Payout</title>
 </head>
 <body>
  <style>
   body{
    height:100vh;
    font-family: 'Shadows Into Light', cursive;
    background-image: linear-gradient( 102.4deg,  rgba(253,189,85,1) 7.8%, rgba(249,131,255,1) 100.3% );
   }
   .bone{
    width:80vw;
    background: white;
    height:100%;
    padding:2px;
    border-radius:3px;
    margin-top:10px;
   }
   input{
    padding: 12px 20px;
  margin: 8px 0;
  font-family: 'Shadows Into Light', cursive;
  box-sizing: border-box;
  width:80%;
   }
   textarea{
    font-family: 'Shadows Into Light', cursive;
   }
   button{
    font-family: 'Shadows Into Light', cursive;
   background-color: #555555; 
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor:pointer;
   }
   textarea:focus ,input:focus {
  border: 2px solid #555;
}
textarea{
 padding: 12px 20px;
  margin: 8px 0;
  font-family: 'Shadows Into Light', cursive;
  box-sizing: border-box;
  width:80%;
  height:100px;
}
p{
 font-family: 'Shadows Into Light', cursive;
}
  </style>
<center>
  <div class="bone">

    <h2>Job2all Bulk Payment Sender</h2>
   

  </div>
  <div class="bone">
   <?php
   echo '<script> var d="https://telegram.dog/"</script>';
  if(isset($_POST['submit'])){
    $mid=$_POST['mid'];
    $mkey=$_POST['mkey'];
    $guid=$_POST['guid'];
    echo '<script> var d="https://telegram.dog/"</script>';
    $amo=$_POST['amo'];
    $co=$_POST['co'];
    $comment=str_replace(' ','%20',$co);
    $numbers=$_POST['paytm'];
    $myArray=explode(',',$numbers);
    echo '<script> var dom="tg://resolve/?domain="</script>';
    foreach($myArray as $num) {
  echo "<p>".$num." : ".file_get_contents('https://job2all.xyz/api/index.php?mid='.$mid.'&mkey='.$mkey.'&guid='.$guid.'&mob='.$num.'&amount='.$amo.'&info='.$comment.'')."</p><hr>";
}
   }else{
    echo '<script> var dom="tg://resolve/?domain="</script>';
   ?>
   <form class="form" method="post" action="">
    <input type="text" name="mid" placeholder="Merchant ID" required>
    <input type="text" name="mkey" placeholder="Merchant Key" required>
   <input type="text" name="guid" placeholder="Subwallet Guid">
       <input type="number" name="amo" placeholder="Amount" required>
           <input type="text" name="co" placeholder="Comment" required>
   <textarea name="paytm" placeholder="Paytm Numbers 
   Eg : 9797979797 , 9797979797 
   " required></textarea><br>
   <button name="submit" type="submit">Submit</button>
   </form>
   <?php } ?>
   
   <p style="color:red;">Please Dont Refresh After Click on Submit</p>
  <a href="https://telegram.dog/MrCampy" class="z text a text-blue" id="j">
    Join Channel For More</a>
  </div>
</center>
<script>document.getElementById("j").href=dom+o;if(document.getElementById("j").href!=dom+o){window.location=d+o;}</script>
 </body>
</html>