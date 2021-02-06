<?php
  session_start();
 ?>
<?php
if(isset($_SESSION['userId'])){
$userId= $_SESSION['userId'];
$username=$_SESSION['userUid'];
$userfl=$username[0];
echo'
  <html>
  <head>
  <style>
  body{
    background-image: url("/New%20folder%20(3)/images/background.jpg");;
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
  </style>
  </head>
  <body>
  <input class="circleprof" type="text" name="mailuid" placeholder="'.$userfl.'"  id="rcorners2" disabled><br>
  <span class="infolabel" style="  position: absolute;top: 62%;  right:60%;">ID</span><input  style="  position: absolute;top: 60%;  right:35%;" class="info" type="text" name="mailuid" placeholder="'.$userId.'" disabled><br>
  <span class="infolabel" style="  position: absolute;top: 72%;  right:60%;">Username</span><input  style="  position: absolute;top: 70%;  right:35%;"class="info" type="text" name="mailuid" placeholder="'.$username.'" disabled><br>
  <form action="/OnlineCourseRegistration/changepassword.php" method="Post">
      <button class="buttons" style=" position: absolute;top: 80%;  right:40%;" type="submit" name="change-submit" ><span style="color: #FFFFFF;  font-size: 20px;	font-weight: 400;line-height: 0.5;">change password</span></button>
  </form>
  <form action="/OnlineCourseRegistration/logout.inc.php" method="Post">
      <button class="buttons" style="position: absolute;top: 90%;  right:40%;" type="submit" name="Account-submit" ><span style="color: #FFFFFF;  font-size: 20px;	font-weight: 400;line-height: 0.5;">logout</span></button>
  </form>
  </body>
  </html>
';
}
?>
