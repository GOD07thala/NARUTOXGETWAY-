<?
session_start();

$session = $_SESSION['user'];
?><!doctype html><html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
 .form {
	padding: 15px 15px;	
	margin-left:50px;
	margin-right:50px;
	border: 2px solid #8e44ad;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<title>SWAT PANEL</title> </head> <body> <div class="body"> 
<nav class="navbar navbar-light" style="background-color: #fff; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);color:#000;"> <div class="container-fluid"> <a class="navbar-brand" href="#"><b>Dashboard</b></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarSupportedContent"> <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item"> <a class="nav-link" href="home.php">Home</a></li> 
<li class="nav-item"><a class="nav-link" href="livecampaign.php">Live Campaign</a></li>
<li class="nav-item"><a class="nav-link" href="addcamp.php">Add Campaign</a></li>
<li class="nav-item"><a class="nav-link" href="editcamp.php">Edit Campaign</a></li>
<li class="nav-item"><a class="nav-link" href="bannumber.php">Ban Number</a></li>
<li class="nav-item"><a class="nav-link" href="bannumber1.php">Ban Number List</a></li><li class="nav-item"><a class="nav-link" href="lead.php">Leads History</a></li>
<li class="nav-item"><a class="nav-link" href="addgateway.php">Add Gateway</a></li>

<li class="nav-item"><a  class="nav-link" href="connectpanel.php">Connect Panel</a></li>
<li class="nav-item"><a class="nav-link" href="botalert.php">Bot Alert</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
</ul>
</div></div></nav>
</div>
  </div>
</nav>
<div class="container">
 <br>
 
<?php
echo"<br><center><a href='lead.php?id=delete' style='text-decoration:none;
color:inherit;'><button class='delet'>Clear all</button></a></center><br><br>";

if(file_exists("$session/counte/lead.txt")){
$file=file_get_contents("$session/counte/lead.txt");
$pro = explode("+",$file);
for($i = 0; $i < count($pro); $i++){
if(!empty($pro[$i])){

$json=json_decode($pro[$i],true);
$campst=$json['campst'];
$name=$json['offer'];
$event=$json['event'];
$uamt=$json['uamt'];
$usta=$json['usta'];
$ramt=$json['ramt'];
$rsta=$json['rsta'];
$use=$json['user'];
$refer=$json['refer'];
echo"<div class='form'>
<b>♻️ Conversion ♻️</b>";
echo"<br><br>Offer : $name  [<code>$event</code>]<br><br>User : $use  [<code>$uamt</code>]<br>Status: $usta<br><br>Refer : $refer [<code>$ramt</code>]<br>Status: $rsta</div><br>
";
}}
}else{echo"<center><h3>Conversion not found";}


if(isset($_GET['id'])){

file_put_contents("$session/counte/lead.txt","");
?>
<script>
alert("All Conversations cleared");
</script>
<?php
echo"<meta http-equiv='refresh' content='0;url=lead.php'>";
}?>
  <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<div class="container"><br> </div>
<?php   
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{ 
     
}
?>
</body></html>