<?php
    
  // Definitions to be used as cost factors later in the algorithm  
  define("SCHOOL_COST", 1000);
  define("HOME_COST", 100);
  define("WORKER_SALARY", 3000);
  define("SCHOLARSHIP_COST", 3000);
  define("ORPHAN_YEAR_COST", 3000);
  define("RICKSHAW_COST", 3000);
  define("BICYCLE_COST", 3000);
  define("MEAL_COST", 3000);
  define("CLOTHING_COST", 3000);
  define("FLASHLIGHT_COST", 3000);
  define("BLANKET_COST", 3000);
  define("WATER_COST", 3000);
  define("BACKPACK_COST", 10);
  define("BOOK_COST", 3000);
  define("NOTEBOOK", 3000);
  define("PENCIL_COST", 3000);
  define("SANDALS_COST", 3000);
  define("BALL_COST", 3000);
  define("CRICKET_BAT_COST", 3000);
  define("CRICKET_BALL_COST", 3000);
  define("MANGO_COST", 3000);
  define("SALINE_COST", 0.10);
  define("CRACKER_COST", 0.20);
  define("CANDY_COST", 0.10);

  // Getting the POST data from the form submitted and trimming
  $value = (int)(trim($_POST['amount']));

  // Variable declarations for all the amounts of each item listed above
  $count = 0;

  $schools = 0;
  $homes = 0;
  $worker_salaries = 0;
  $scholarships = 0;
  $orphans = 0;
  $rickshaws = 0;
  $bicycle = 0;
  $meals = 0;
  $clothes = 0;
  $flashlights = 0;
  $blankets = 0;
  $water = 0;
  $backpacks = 0;
  $books = 0;
  $notebooks = 0;
  $pencils = 0;
  $sandals = 0;
  $balls = 0;
  $cricket_bat = 0;
  $cricket_ball = 0;
  $mangos = 0;
  $salines = 0;
  $crackers = 0;
  $candies = 0;

  if ((int)($value/2) >= SCHOOL_COST) {
    $temp_amount = (int)(($value/2)/SCHOOL_COST);
    $temp = $value - ($temp_amount*SCHOOL_COST);
    $schools = $temp_amount;
    $value = $temp;
  }

  if ((int)($value/2) >= HOME_COST) {
    $temp_amount = (int)(($value/2)/HOME_COST);
    $temp = $value - ($temp_amount*HOME_COST);
    $homes = $temp_amount;
    $value = $temp;
  }

  // echo "You could buy ".$schools." schools!<br/>";
  // echo $value;

?>
<html>
  <head>
    <title>Altruist - Help the needy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="http://use.typekit.net/baw6dig.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>
  <body>

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
            <div class="row-fluid" style="width:100%;height:60px;">
            <div>
            <h1 class="text-center">Lets take a look at what your money can buy...</h1><br><br>
          </div>
          </div>
          </div>
        </div>
      </div>

    <!-- REMINDER TO SELF: USE $count for the ID values and then in javascript only select a0 since that is the first one -->
      
    <? if ($schools > 0) { ?>

      <? if ($count % 2 == 1) { ?>
      <div class="finish-other">
      <? } else { ?>
      <div class="finish">
      <? } ?>
        <div class="row-fluid">
            <div class="span10 offset1">
              <? if ($schools == 1) { ?>
                <h1 class="text-center">You could sponsor a school that could help <span id="a2" class="num_incr" style="font-size:56px;"><? echo number_format($schools*300); ?></span> children get an education.</h1><br>
              <? } else { ?>
                <h1 class="text-center">You could sponsor <span id="a1" class="num_incr" style="font-size:56px;"><? echo number_format($schools); ?></span> schools that could help over <span id="a2" class="num_incr" style="font-size:56px;"><? echo number_format($schools*300); ?></span> children get an education.</h1><br>
              <? } echo "<br />"; $length_iterate = $schools; if ($schools > 10) { $length_iterate = 10;} for ($i = 0; $i < $length_iterate; $i++) { ?>
                <img class="img_tile" src="img/school.png" width="200"/>
              <? } ?>
              <? if($schools >= 20) { ?>
                <center><p style="float:left; padding-top:30px;"><i>Each figure represents approximately <? echo (int)($schools/10); ?> schools</i></p></center>
              <? } ?>
            </div>
        </div>
      </div>

    <? $count++; } ?>

    <? if ($homes > 0) { ?>

      <? if ($count % 2 == 1) { ?>
      <div class="finish-other">
      <? } else { ?>
      <div class="finish">
      <? } ?>
        <div class="row-fluid">
            <div class="span10 offset1">
              <? if($count > 0) { ?>
                <center><br /><br /><span style="font-size:72px; font-weight:bold;">And...</span><br /><br /><br /><br /></center>
              <? } ?>
              <? if ($homes == 1) { ?>
                <h1 class="text-center">You could provide one homeless family with a place to call home.</h1><br>
              <? } else { ?>
                <h1 class="text-center">You could provide homes for <span class="num_incr" style="font-size:56px;"><? echo number_format($homes); ?></span> homeless families that are currently on the streets.</h1><br>
              <? } echo "<br />"; if ($homes > 20) {$homes = 20;} for ($i = 0; $i < $homes; $i++) { ?>
                <img class="img_tile" src="img/home.png" width="200"/>
                <? if ($homes == 1) { ?>
                  <img class="img_tile" src="img/family.png" width="200"/>
                <? } ?>
              <? } ?>
            </div>
        </div>
      </div>

    <? $count++; } ?>

    <? if ($count % 2 == 1) { ?>
    <div class="finish-other">
    <? } else { ?>
    <div class="finish">
    <? } ?>
      <div class="row-fluid">
          <div class="span10 offset1">
            <h1 class="text-center">Still not convinced?</h1><br>
            <p>Lets take some time to chat.</p><br><br>
            <h3>Social media icons here</h3>
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
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>