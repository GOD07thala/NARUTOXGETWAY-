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
  width: 80%;
  border-radius: 5px;
  font-size: 16px;
  font-weight:500;
  background-color: #147AFF;
  border:none solid white;
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
</div></div></nav>
<center><br>     
  <?php
    
error_reporting(0);
session_start();

$session = $_SESSION['user'];

if(!isset($_SESSION['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
if(!isset($_GET['id'])){

$live="LCamp";
$offer="offer";

echo'<h6>Notes : After Id : 20 Give Delete All And Then Add.</h6>
            <hr>
<div class="container"><br><table class="table caption-top"><thead> <tr> <th scope="col">Id</th> <th scope="col">Campaign</th><th scope="col">Action</th></tr> </thead>';

$json_object = file_get_contents(''.$session.'/'.$live.'/1.json');
$dec=json_decode($json_object,true);
$id1=$dec['id'];
$campname1=$dec['campname'];
$offerid1=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/2.json');
$dec=json_decode($json_object,true);
$id2=$dec['id'];
$offerid2=$dec['offerid'];
$campname2=$dec['campname'];
$json_object = file_get_contents(''.$session.'/'.$live.'/3.json');
$dec=json_decode($json_object,true);
$id3=$dec['id'];
$campname3=$dec['campname'];
$offerid3=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/4.json');
$dec=json_decode($json_object,true);
$id4=$dec['id'];
$campname4=$dec['campname'];
$offerid4=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/5.json');
$dec=json_decode($json_object,true);
$id5=$dec['id'];
$campname5=$dec['campname'];
$offerid5=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/6.json');
$dec=json_decode($json_object,true);
$id6=$dec['id'];
$campname6=$dec['campname'];
$offerid6=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/7.json');
$dec=json_decode($json_object,true);
$id7=$dec['id'];
$campname7=$dec['campname'];
$offerid7=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/8.json');
$dec=json_decode($json_object,true);
$id8=$dec['id'];
$campname8=$dec['campname'];
$offerid8=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/9.json');
$dec=json_decode($json_object,true);
$id9=$dec['id'];
$campname9=$dec['campname'];
$offerid9=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/10.json');
$dec=json_decode($json_object,true);
$id10=$dec['id'];
$campname10=$dec['campname'];
$offerid10=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/11.json');
$dec=json_decode($json_object,true);
$id11=$dec['id'];
$campname11=$dec['campname'];
$offerid11=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/12.json');
$dec=json_decode($json_object,true);
$id12=$dec['id'];
$offerid12=$dec['offerid'];
$campname12=$dec['campname'];
$json_object = file_get_contents(''.$session.'/'.$live.'/13.json');
$dec=json_decode($json_object,true);
$id13=$dec['id'];
$campname13=$dec['campname'];
$offerid13=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/14.json');
$dec=json_decode($json_object,true);
$id14=$dec['id'];
$campname14=$dec['campname'];
$offerid14=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/15.json');
$dec=json_decode($json_object,true);
$id15=$dec['id'];
$campname15=$dec['campname'];
$offerid15=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/16.json');
$dec=json_decode($json_object,true);
$id16=$dec['id'];
$campname16=$dec['campname'];
$offerid16=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/17.json');
$dec=json_decode($json_object,true);
$id17=$dec['id'];
$campname17=$dec['campname'];
$offerid17=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/18.json');
$dec=json_decode($json_object,true);
$id18=$dec['id'];
$campname18=$dec['campname'];
$offerid18=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/19.json');
$dec=json_decode($json_object,true);
$id19=$dec['id'];
$campname19=$dec['campname'];
$offerid19=$dec['offerid'];
$json_object = file_get_contents(''.$session.'/'.$live.'/20.json');
$dec=json_decode($json_object,true);
$id20=$dec['id'];
$campname20=$dec['campname'];
$offerid20=$dec['offerid'];

if (file_exists(''.$session.'/'.$live.'/1.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id1</font></th> <td><font color='red' size='3'>$campname1</font></td><td><font color='red' size='3'><button class='btn btn-danger'><a class='a' href='editcamp.php?id=$id1&offerid=$offerid1'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/2.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id2</font></th> <td><font color='red' size='3'>$campname2</font></td><td><font color='red' size='3'><button class='btn btn-danger'><a class='a' href='editcamp.php?id=$id2&offerid=$offerid2'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/3.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id3</font></th> <td><font color='red' size='3'>$campname3</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id3&offerid=$offerid3'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/4.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id4</font></th> <td><font color='red' size='3'>$campname4</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id4&offerid=$offerid4'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/5.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id5</font></th> <td><font color='red' size='3'>$campname5</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id5&offerid=$offerid5'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/6.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id6</font></th> <td><font color='red' size='3'>$campname6</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id6&offerid=$offerid6'>Edit</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/7.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id7</font></th> <td><font color='red' size='3'>$campname7</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id7&offerid=$offerid7'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/8.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id8</font></th> <td><font color='red' size='3'>$campname8</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id8&offerid=$offerid8'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/9.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id9</font></th> <td><font color='red' size='3'>$campname9</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id9&offerid=$offerid9'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/10.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id10</font></th> <td><font color='red' size='3'>$campname10</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id10&offerid=$offerid10'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/11.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id11</font></th> <td><font color='red' size='3'>$campname11</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id11&offerid=$offerid11'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/12.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id12</font></th> <td><font color='red' size='3'>$campname12</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id12&offerid=$offerid12'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/13.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id13</font></th> <td><font color='red' size='3'>$campname13</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id13&offerid=$offerid13'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/14.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id14</font></th> <td><font color='red' size='3'>$campname14</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id14&offerid=$offerid14'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/15.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id15</font></th> <td><font color='red' size='3'>$campname15</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id15&offerid=$offerid15'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/16.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id16</font></th> <td><font color='red' size='3'>$campname16</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id16&offerid=$offerid16'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/17.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id17</font></th> <td><font color='red' size='3'>$campname17</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id17&offerid=$offerid17'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/18.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id18</font></th> <td><font color='red' size='3'>$campname18</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id18&offerid=$offerid18'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/19.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id19</font></th> <td><font color='red' size='3'>$campname19</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id19&offerid=$offerid19'>Remove</button></font></td></tr></tbody>";
}
if (file_exists(''.$session.'/'.$live.'/20.json')){
echo"<tbody><tr><th scope='row'><font color='red' size='3'>$id20</font></th> <td><font color='red' size='3'>$campname20</font></td><td><font color='red' size='3'><button class='btn btn-danger' name='delete'><a class='a' href='editcamp.php?id=$id20&offerid=$offerid20'>Remove</button></font></td></tr></tbody>";
}
}

if(isset($_GET['id'])){
$id=$_GET['id'];
$offer=$_GET['offerid'];

$json_object = file_get_contents(''.$session.'/offer/'.$offer.'.json');
$dec=json_decode($json_object,true);
$id2=$dec['id'];
$campname2=$dec['campname'];
$useramo=$dec['useramo'];
$referamo=$dec['referamo'];
$usercom=$dec['usercom'];
$refercom=$dec['refercom'];
$goal=$dec['goal'];

echo'<br/><br/>
<form action="" method="POST">
 <div class="container">
        <div class="main">
        <center>
        <br/>       
       <input type="text" name="campname" class="input inp"  placeholder="Campaign Name" value="'.$campname2.'">
          
         <br />
         <br />
         
       <input type="text" name="offerid" class="input inp"  placeholder="Offer Id" value="'.$offer.'" readonly>
          
         <br />
         <br /> 
       <input type="text" name="USERAMO" class="input inp"  placeholder="User Amount" value="'.$useramo.'">
          
         <br />
         <br /> 
       <input type="text" name="REFERAMO" class="input inp"  placeholder="Refer Amount" value="'.$referamo.'">
          
         <br />
         <br />
                                  
       <input type="text" name="USERCOM" class="input inp"  placeholder="User Payment Comment" value="'.$usercom.'">
          
         <br />
         <br /> 
       <input type="text" name="REFERCOM" class="input inp"  placeholder="Refer Payment Comment"value="'.$refercom.'">
          
         <br />
         <br />         
  <input type="text" name="goal" class="input inp"  placeholder="Event / Goal Name" value="'.$goal.'">
          <br />
          <input type="hidden" name="id" value="'.$id.'">
        
<input type="submit" name="submit" value="SUBMIT">
          
        </form>';
}
if(isset($_POST['submit'])){
$campname=$_POST['campname'];
$offerid=$_POST['offerid'];
$goal=$_POST['goal'];
$USERAMO=$_POST['USERAMO'];
$REFERAMO=$_POST['REFERAMO'];
$USERCOM=$_POST['USERCOM'];
$REFERCOM=$_POST['REFERCOM'];
$id=$_POST['id'];

$json='{"key":"'.$session.'","campname":"'.$campname.'","offerid":"'.$offerid.'","useramo":"'.$USERAMO.'","referamo":"'.$REFERAMO.'","usercom":"'.$USERCOM.'","refercom":"'.$REFERCOM.'","goal":"'.$goal.'"}';
file_put_contents(''.$session.'/offer/'.$offerid.'.json', $json);

$json4='{"id":"'.$id.'","campname":"'.$campname.'","offerid":"'.$offerid.'"}'; 
file_put_contents(''.$session.'/LCamp/'.$id.'.json',$json4);

echo '<script>alert("Campaign Edited Successfully")</script>';
  echo"<meta http-equiv='refresh' content='0;url=editcamp.php'>";
}}
?>