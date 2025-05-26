<!doctype html><html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cashbackcamp.xyz/eff.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><style>
.a{
        text-decoration: none;
        color: white;
      }
.main{
  width: 90%;
  height: 500px;
  background-color: white;
  align-items: center;
  border-radius: 11px;
  margin-bottom: 51px;
}

.inp{
  height: 40px;
  width: 80%;
  border-radius: 5px;
  text-align: center;
  border: 1px solid #7f7f7f;
  outline: none;
  font-size: 15px;
}
input[type=submit]{ 
  height: 40px;
  width: 30%;
  border-radius: 5px;
  font-size: 16px;
  font-weight:500;
  background-color: #147AFF;
  border:none solid white;
  color: white;
  margin-top:25px;
  margin-left:260px;
  }
    </style> <!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
</div></div></nav><center><br>
<div class="container"><br><table class="table caption-top"><thead> <tr> <th scope="col">Id</th> <th scope="col">Number</th><th scope="col">Action</th></tr> </thead> 
  <?php
    
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
     
$ban1=file_get_contents(''.$session.'/bannumber/1.json');

$ban2=file_get_contents(''.$session.'/bannumber/2.json');

$ban3=file_get_contents(''.$session.'/bannumber/3.json');

$ban4=file_get_contents(''.$session.'/bannumber/4.json');

$ban5=file_get_contents(''.$session.'/bannumber/5.json');

$ban6=file_get_contents(''.$session.'/bannumber/6.json');

$ban7= file_get_contents(''.$session.'/bannumber/7.json');

$ban8=file_get_contents(''.$session.'/bannumber/8.json');

$ban9=file_get_contents(''.$session.'/bannumber/9.json');

$ban10= file_get_contents(''.$session.'/bannumber/10.json');

if (file_exists(''.$session.'/bannumber/1.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>1</font></th> <td><font color='red' size='3'>$ban1</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=1'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/2.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>2</font></th> <td><font color='red' size='3'>$ban2</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=2'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/3.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>3</font></th> <td><font color='red' size='3'>$ban3</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=3'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/4.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>4</font></th> <td><font color='red' size='3'>$ban4</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=4'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/5.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>5</font></th> <td><font color='red' size='3'>$ban5</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=5'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/6.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>6</font></th> <td><font color='red' size='3'>$ban6</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=6'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/7.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>7</font></th> <td><font color='red' size='3'>$ban7</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=7'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/8.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>8</font></th> <td><font color='red' size='3'>$ban8</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=8'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/9.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>9</font></th> <td><font color='red' size='3'>$ban9</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=9'>Unban</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/bannumber/10.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>10</font></th> <td><font color='red' size='3'>$ban10</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='delete1.php?id=10'>Unban</button></font></td></tr></tbody>";
}
echo"</table></center>
<form action='' method='post'>
<input type='submit' id='submit' name='submit10' value='Delete all'>";
}
if(isset($_POST['submit10'])){
$files2 = glob(''.$session.'/bannumber/*'); // get all file names
foreach($files2 as $file2){ // iterate files
  if(is_file($file2)) {
    unlink($file2); // delete file
  }}
file_put_contents(''.$session.'/counte/ban.json',"0");
echo '<script>alert("Deleted Successfully")</script>';
echo"<meta http-equiv='refresh' content='0;url=bannumber1.php'>";
}
?>

