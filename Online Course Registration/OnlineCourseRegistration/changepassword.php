<?php
  session_start();
 ?>
<?php
if(isset($_SESSION['userId'])){
echo'
  <html>
  <head>
  <style>
  body{
    background-image: url("/OnlineCourseRegistration/images/background.jpg");;
  }
  .circleprof{
    width:20%;
    height:40%;
    background-color:  #ffb606;
    border-radius: 70%;
    text-align:center;
    font-size:50px;
    margin-bottom:30px;
    position: absolute;
    top: 10%;
    right:40%;
  }
  .info{
    border-radius: 25px;
    border: 2px solid  #ffb606;
    padding: 20px;
    margin-bottom:15px;
    width: 300px;
    height: 50px;
    position: absolute;
    top: 60%;
    right:40%;
    background-color:#BDBDBD;
  }
  .infolabel{
    font-size:20px;
    color:#ffb606;
  }
  .buttons{
    border-radius: 25px;
    background: #ffb606;
    padding:20px;
    width: 250px;
    height: 50px;
    margin-left:20%;
  }
  .title{
    color: #ffb606;
    font-size: 60px;
    position: absolute;top: 22%;  right:37%;
  }
  </style>
  </head>
  <body>
  <span class="title">Change Password</span>
  <form action="includes/change.inc.php" method="Post">
  <span class="infolabel" style= "position: absolute;top: 52%;  right:60%;">Old password</span><input  style="  position: absolute;top: 50%;  right:35%;" name="oldpwd" class="info" type="password"><br>
  <span class="infolabel" style="position: absolute;top: 62%;  right:60%;">New password</span><input  style="  position: absolute;top: 60%;  right:35%;" name="newpwd" class="info" type="password"><br>
  <span class="infolabel" style=" position: absolute;top: 72%;  right:60%;">confirm password</span><input  style="  position: absolute;top: 70%;  right:35%;" name="cnfpwd" class="info" type="password"><br>
  <button class="buttons" style="position: absolute;top: 90%;  right:40%;" type="submit" name="change-submit" ><span style="color: #FFFFFF;  font-size: 20px;	font-weight: 400;line-height: 0.5;">confirm</span></button>
  </form>
  </body>
  </html>
';
}
?>
