<?php
if(isset($_POST['submit'])){
 $paytm=$_POST['paytm'];
$name=$_POST['name'];
$radio=$_POST['flexRadioDefault'];
 $amount=1;
 $token="yRNSet9uIQfi5D4g";
 $order_id="DEDICTION".mt_rand(111111,999999999).rand(1111111,99999999);
if(!is_file('TRANSACTIONS')){
 mkdir('TRANSACTIONS');
}
$data='{"name":"'.$name.'","paytm":"'.$paytm.'","status":"'.$radio.'"}';
file_put_contents('TRANSACTIONS/'.$order_id.'.json',$data);
fopen('TRANSACTIONS/'.$order_id.'.txt','w');
      
 echo file_get_contents('https://full2sms.in/accept_payment_api.php?token='.$token.'&amount='.$amount.'&order_id='.$order_id);
}
if(isset($_GET['order_id'])){
$gpin="3PAbXKUwaulre10Q7Q286PlOM";
 $order_id=$_GET['order_id'];
 $li=json_decode(file_get_contents('https://full2sms.in/status_order.php?order_id='.$order_id.'&gpin='.$gpin.''),true);
$status= $li['status'];
if($status=="success"){
 if(is_file('TRANSACTIONS/'.$order_id.'.txt')){
  $num=rand(0,2);
$arr = array( "a"=>"Head", "b"=>"Tail",);

shuffle($arr);
 

$r=$arr[0];

 $fetch=json_decode(file_get_contents('TRANSACTIONS/'.$order_id.'.json'),true);
 $paytm=$fetch["paytm"];
 $amount=2;
 $status11=$fetch["status"];
 if($status11==$r){
  file_get_contents('https://job2all.xyz/api/index.php?mid=&mkey=&guid=&mob='.$paytm.'&amount='.$amount.'&info=PREDICTION_PAYOUT+@devlopath_users');
  unlink('TRANSACTIONS/'.$order_id.'.txt');
  $message="You have Won and Paytm Cash Successfully Transfered";
 }else{
  $message="You have lose";
 }
 
 
 
     echo "<script>alert('Answer : $r , $message');</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
 }else{
          echo '<meta http-equiv="refresh" content="0; url=index.php">';
 }
}else{
     echo "<script>alert('Payment Failed');</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Predict And Earn</title>
  </head>
  <style>
   *{
    font-family: 'Rubik', sans-serif;
   }
   input{
    width:100%;
    padding:2px;
    border:2px solid black;
    margin-top:3px;
    border-radius: 6px;
    
    font-family: 'Rubik', sans-serif;
   }
   input[type=number]{
    margin-bottom:7px;
   }
   button{
    margin-top: 30px;
    font-family: 'Rubik', sans-serif;
    width:50%;
    border:2px solid black;
    background: #5df5c2;
    border-radius: 20px;
   }
  </style>
  <body class="bg-success bg-opacity-75">
<div class="main text-center container" style="margin-top:10px;">
 <h1 class="text-light" style="font-weight:bold;">💸 Predict Head Or Tail And Earn Paytm Cash 💸</h1><br>
 <p1 class="text-light">Add ₹1 And Get ₹2 If Prediction Correct.</p1>
</div><br>
 <div class="container bg-light" style="width:250px; height:300px;padding:15px;border-radius:5px;">
  <form class="form" action="" method="post">
   <input type="text" placeholder="Name" required name="name">
   <input type="number" placeholder="Paytm Number" required name="paytm">
   <label>Select an Option :</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Head">
  <label class="form-check-label" for="flexRadioDefault1">
    Head
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Tail">
  <label class="form-check-label" for="flexRadioDefault2">
    Tail
  </label>
</div>
   <button name="submit" type="submit">Pay ₹1</button>
     
  </form>
     <button style="width:100%;"><a href="https://telegram.dog/php_giveaway">Join Channel</a></button>
 </div>
 <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3><b>Coder : @EagleTekLite</b></h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>