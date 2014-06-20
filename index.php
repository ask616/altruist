<?php
    $errflag = false;
    $traincontact = false;      
    $msg = NULL;

  if ($_POST['submit'] == 1)
  {
       $errflag = false;
       $traincontact = false;
       $msg = NULL;

       // from the form
       $email = trim(strip_tags($_POST['email']));
       $body = htmlentities($_POST['body']);

       if (preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email) == false && $errflag == false)
       {
          $errflag = true;
          $msg = 'Please enter a valid email.';
       }

       if ($body == NULL && $errflag == false)
       {
          $errflag = true;
          $msg = 'Please have content in your body.';
       }


       if ($errflag == false)
       {
         // set here
         $to = 'zuhaz3@gmail.com';

         $body = <<<HTML
$body
HTML;

         $headers = "From: $email\r\n";
         $headers .= "Content-type: text/html\r\n";

         // send the email
         if (mail($to, $subject, $body." ".$name." "."via Altruist Contact Form", $headers))
         {
            $traincontact = true;
         }
         else
         {
            $errflag = true;
            $msg = 'Your message was not sent. Please try again.';
         }
       }
     }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Altruist - Help the needy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <!-- <script type="text/javascript" src="http://use.typekit.net/baw6dig.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->
    <!-- // <script type="text/javascript" data-app-id="Jb6mFMu5mXSF0P3fEn5D3Q" src="https://assets.yammer.com/platform/yam.js"></script> -->
    <!-- // <script type="text/javascript" src="https://api.intel.com/js/v1/intel.cloudservices.min.js"></script> -->
  </head>
  <body>

<!--     <div class="login">
    <span id="yammer-login">
      <div class="landing">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div id = "featured">
            <img src="img/logo.png" width="25%" height="25%"><br><br>
            <h1 class="text-center">Give rewards to hard working employees</h1>
            </div>
          </div>
        </div>
      </div>
    </span>
    </div> -->
    
  <!-- <div id="" class="login">
  
    <div class="header">
      <div class="row-fluid">
        <div class="span10 offset1">
          <div class="row-fluid">
            <div class="span4">
              <p style="font-weight:900; font-size:25px">Yammbo</p>
            </div>
            <div class="span8">
              <p class="text-right">Reward Panel</p>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="search">
        <div class="row-fluid">
          <div class="span8 offset2">
              <h1 class="text-center" style="font-weight:900; font-size:32pt">Search for a employee:</h1>
              <input id="userSearch" type="text" class="input-huge">
              <input id="selected-uname" type="hidden" value="">
              <input id="selected-uid" type="hidden" value="">
              <div id="searchUsersList"></div>
          </div>
        </div>
      </div> -->
      <? if ($traincontact == true) { ?>
      <div class="bio" style="background-color:#2ECC71;">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="row-fluid" style="height:50px; display:table;">
              <a href="index.php" style="font-size:100px; color:white; text-decoration:none;">&times;</a><p id="logo" class="text-center" style="display: table-cell; vertical-align: middle;">Success, your message was sent. We'll get back to you.</p>
            </div>
          </div>
        </div>
      </div>
      <? } else if ($errflag == true) { ?>
      <div class="bio" style="background-color:#505050">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="row-fluid" style="height:50px; display:table;">
              <a href="index.php" style="font-size:100px; color:white; text-decoration:none;">&times;</a><p id="logo" class="text-center" style="display: table-cell; vertical-align: middle;"><? echo $msg; ?></p>
            </div>
          </div>
        </div>
      </div>
      <? } ?>

      <div class="bio">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="row-fluid" style="height:50px; display:table;">
              <p id="logo" class="text-center" style="display: table-cell; vertical-align: middle;"><a href="index.html"><img src="img/logo.png" width="250"/></a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="describe">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="row-fluid" style="height:300px; width:100%; display:table;">
            <div style="display: table-cell; vertical-align: middle;">
            <h1 class="text-center">Enter an amount to see what it values for in Bangladesh</h1><br><br>
            <div class="input-prepend span10 text-center">
              
              <div class="hidden-phone">
                <form method="POST" action="flow3.php">
                <span class="add-on" style="color:#505050; font-size:56px; font-weight:bold; line-height:100px; height:100px; padding-left:25px; padding-right:25px; ">$</span>
                <input style="font-size:48px; height: 100px; font-weight:bold; width: 100%; text-align:center; padding-left:20px; padding-right:20px" type="number" name="amount" required min="1" max="1000000000" />
                </form>
              </div>
              
              <div class="visible-phone">
                <form method="POST" action="flow3.php">
                    <span class="add-on" style="color:#505050; height:50px; line-height:50px;padding-left:10px; padding-right:10px; font-size:36px;">$</span>
                    <input type="number" name="amount" style="height: 50px; width:70%; font-size:36px; text-align:center;" required min="1" max="1000000000" />
                </form>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>

      <div class="finish">
      <div class="row-fluid">
          <div class="span10 offset1">
            <h1 class="text-center">Donate to Echo</h1><br>
            <p>Your money could turn these items into reality for the poor in Bangladesh. ECHO is a non profit organization that helps the needy in Bangladesh with education, sanitation, housing, and much more including skills development so that people can earn their own living. If you are serious please consider donating today.</p><br><br>
            <div class="hidden-phone">
              <a class="go" href="#" style="font-size:36px; font-weight:bold"><center>Donate now!</center></a>
            </div>
            <div class="visible-phone">
              <center>  
                <a class="go-mobile" href="#" style="font-size:36px; font-weight:bold"><center>Donate now!</center></a>
              </center>
            </div>
          </div>
        </div>
    </div>


    <div class="finish-other">
      <div class="row-fluid">
          <div class="span10 offset1">
            <h1 class="text-center">Leave us a Message</h1><br>
            <center>
            <form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
              <div class="row">
                <input type="text" name="email" style="height:50px; font-size:36px;" value="Email"><br>
                <textarea rows="5" name="body" style="line-height:38px;font-size:36px;">Message</textarea><br>
                <button type="submit" name="submit" class="go" style="width:220px;font-size:24px;" value="1">Send</button>
              </div>
            </form>
            </center>
          </div>
        </div>
    </div>
      

    <div class="footer">
      <div class="row-fluid">
        <div class="span10 offset1">
          <p>Copyright &copy; Zuhayeer Musa and Areeb Khan. All rights reserved.</p>
        </div>
      </div>
    </div>

</div> <!-- End of #after-login -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>