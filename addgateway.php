<!doctype html><html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"><style>
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
  width: 80%;
  border-radius: 5px;
  font-size: 16px;
  font-weight:500;
  background-color: #147AFF;
  margin: 10px auto;
  border:0px;
  color: white;
  margin-top:25px;
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
</div></div></nav><center>
 <?php   
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{ 
     
if(!isset($_POST['submit'])){
echo '<form action="" method="POST">
 <div class="container">
        <div class="main">
        <center>
        <br/> <br><br> <br><br><br><br>  
       <input type="text" name="mid" class="input inp"  placeholder="Enter Your Mid">
          
         <br />
         <br />
         
       <input type="text" name="mkey" class="input inp"  placeholder="Enter Your Mkey">
          
         <br />
         <br /> 
       <input type="text" name="guid" class="input inp"  placeholder="Enter Your Guid">
          <br />
<input type="submit" id="submit" name="submit" class="btn" value="SUBMIT">
          
        </form>';
        }
        
if(isset($_POST['submit'])){
     
$mid=$_POST['mid'];
$mkey=$_POST['mkey'];
$guid=$_POST['guid'];

if( is_dir("$session/gatew00") === false){mkdir("$session/gatew00");}

$json1='{"11":"'.$mid.'","21":"'.$mkey.'","31":"'.$guid.'"}';
file_put_contents(''.$session.'/gatew00/index1.json', $json1);

echo '<script>alert("Gateway Updated Successfully")</script>';
  echo"<meta http-equiv='refresh' content='0;url=addgateway.php'>";
}}
?>