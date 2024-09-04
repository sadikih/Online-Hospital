<?php
 include "connect.php";
?>
<html>
<head>
  <title>Login</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/signupstyle.css">
</style>
</head>
<body>
  <?php include "navbar.php"?>
        
        
    <div class="contain">
        <div class="r_left">
            <div class="testbox">
              <h1>Register<br> <small>as a specialist</small> </h1>
                
                  <hr>
    <div class="msg">
        <?php
            
            if(isset($_REQUEST['specialist_r'])){
                $Name = $_REQUEST['username'];
                $Email = $_REQUEST['Email'];
                $Password = $_REQUEST['Password'];
                $Address   = nl2br(htmlentities($_REQUEST['Address'], ENT_QUOTES));
                
                $que = "SELECT * FROM `specialist` WHERE `Email`= '$Email'";
                
                $result = $con->query($que);                
                    
                
                if(!$result->num_rows){
                    $que = "INSERT INTO `specialist`(`username`, `Email`, `Password`, `Address`) VALUES ('$Name', '$Email', '$Password', '$Address')";
                
                    $result = $con->query($que);

                    if($result){
                        $msg = '<h2 align="center" style="color: #07FD1C;">Account created successfully !</h2>';
                    }
                } else {
                    $msg = '<h2 align="center" style="color: #FDCACB;">This e-mail address already exist!</h2>';
                }
            } else {
                $msg = '';
            }
    
        ?>
        
    
        
    </div>
                  <hr>
                
              <form method="post" action="">
              <label id="icon" for="Email"><i class="icon-envelope "></i></label>
              <input type="email" name="Email" id="Email" placeholder="Email" required/>
                  
              <label id="icon" for="username"><i class="icon-user"></i></label>
              <input type="text" name="username" id="username" placeholder="username" required/>
                  
              <label id="icon" for="Password"><i class="icon-shield"></i></label>
              <input type="password" name="Password" id="name" placeholder="Password" required/>
                  
              <p style="font-size: 14px; font-weight: bold; color: aqua;">Please enter address</p><br>
              <textarea  name="Address" id="name" placeholder="address" required></textarea><br><br>
         <br>
                  <input type="submit" name="specialist_r" class="button" value="Register">
   <a href="login.php" style="color: white;">Already have an account?</a>
   <br><br>
  </form>
</div>
        </div>
    
        <div class="r_right">
            <div class="testbox">
  <h1>Register<br> <small>as a patient</small> </h1>
                
      <hr><div class="msg">
        <?php
            
            if(isset($_REQUEST['patient_r'])){
                $Email = $_REQUEST['Email'];
                $Name = $_REQUEST['username'];
                $Password = $_REQUEST['Password'];
                $Address   = nl2br(htmlentities($_REQUEST['Address'], ENT_QUOTES));
              
                $que = "SELECT * FROM `patient` WHERE `Email`= '$Email'";
                
                $result = $con->query($que);                
                    
                
                if(!$result->num_rows){
                    $que = "INSERT INTO `patient`(`username`, `Email`, `Password`,`Address`) VALUES ('$Name', '$Email', '$Password', '$Address')";
                
                    $result = $con->query($que);

                    if($result){
                        $msg = '<h2 align="center" style="color: #07FD1C;">Account created successfully !</h2>';
                    }
                } else {
                    $msg = '<h2 align="center" style="color: #FDCACB;">This e-mail address already exist!</h2>';
                }
            } else {
                $msg = '';
            }
    
        ?>
        
        <?php
            echo $msg;
        ?>
        
    </div>
      <hr>
                
  <form action="" method="post">
  <label id="icon" for="Email"><i class="icon-envelope "></i></label>
  <input type="email" name="Email" id="Email" placeholder="Email" required/><br>
      
  <label id="icon" for="username"><i class="icon-user"></i></label>
  <input type="text" name="username" id="username" placeholder="username" required/><br>
      
  <label id="icon" for="Password"><i class="icon-shield"></i></label>
  <input type="password" name="Password" id="Password" placeholder="Password" required/>
      
  
  <p style="font-size: 14px; font-weight: bold; color: aqua;">Please enter address</p><br>
  <textarea name="Address" id="Address" placeholder="address" class="ta_box" required></textarea><br><br>
  
 <br><br>
</div>
        

<br>
      <input type="submit" name="patient_r" class="button" value="Register">
   <a href="login.php" style="color: white;">Already have an account?</a>
   <br><br>
  </form>
</div>
            </div>
        </div>
<?php include "footer.html" ?>
</body>
</html>