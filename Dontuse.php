<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  
  </head>
  
  
  <body>
    <style>
      body{
  margin: 0;
  padding: 0;
  border: 0;
  
}

.container{
  width: 100%;
  height: 100vh;
  background-color: #00ccff;
  display: flex;
  justify-content: center;
  align-items: center;
  
}


.main{
  width: 90%;
  height: 500px;
  background-color: white;
  align-items: center;
  border-radius: 11px;
  margin-bottom: 51px;
}

.login{
  font-size: 30px;
  font-family: 'Poppins', sans-serif;
  
}

.inp{
  height: 40px;
  width: 80%;
  border-radius: 7px;
  text-align: center;
  border: 1px solid #7f7f7f;
  outline: none;
  font-size: 15px;
  
  
}

.password{
  height: 40px;
  width: 80%;
  border-radius: 7px;
  text-align: center;
  border: 1px solid #7f7f7f;
  outline: none;
  font-size: 15px;
  
}

.btn{ 
  height: 40px;
  width: 80%;
  border-radius: 7px;
  font-size: 16px;
  font-weight:600;
  text-transform: capitalize;
  background: linear-gradient(200deg,green,#07b465);
  margin: 10px auto;
  border: none;
  outline: none;
  cursor: pointer;
  transition: all 40;
  color: white;
  margin-top:25px;
  
  
}
    </style>
    
    <div class="container">
      
      <div class="main">
        
        <center>
          <br /> <br /> <br /> <br />
                  <h2 class="login">Register</h2>
        <br/>
        
        <form class="form" action="" method="post">
       <input type="text" name="user" class="input inp"  placeholder="username" required>
          
         <br />
         <br />
         
            <input type="password" name="pwd" class="password"  placeholder="password" required>
          
                   <br />
         <br />
          
          <input type="submit" id="submit" name="submit" class="btn" value="SUBMIT">
          
        </form>
        <?php   
    if($_POST['submit']){

   
        $pwd=$_POST['pwd'];
        $user=$_POST['user'];
mkdir("user");               
$data="user/$user.txt";
file_put_contents($data,$pwd);
                 
    echo '<script>alert("Register Success")</script>';
 }  
?> 