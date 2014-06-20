<?php
    
  // Definitions to be used as cost factors later in the algorithm  
  // define("SCHOOL_COST", 1000);
  // define("HOME_COST", 100);
  // define("WORKER_SALARY", 3000);
  // define("SCHOLARSHIP_COST", 3000);
  // define("ORPHAN_YEAR_COST", 3000);
  // define("RICKSHAW_COST", 3000);
  // define("BICYCLE_COST", 3000);
  // define("MEAL_COST", 3000);
  // define("CLOTHING_COST", 3000);
  // define("FLASHLIGHT_COST", 3000);
  // define("BLANKET_COST", 3000);
  // define("WATER_COST", 3000);
  // define("BACKPACK_COST", 10);
  // define("BOOK_COST", 3000);
  // define("NOTEBOOK", 3000);
  // define("PENCIL_COST", 3000);
  // define("SANDALS_COST", 3000);
  // define("BALL_COST", 3000);
  // define("CRICKET_BAT_COST", 3000);
  // define("CRICKET_BALL_COST", 3000);
  // define("MANGO_COST", 3000);
  // define("SALINE_COST", 0.10);
  // define("CRACKER_COST", 0.20);
  // define("CANDY_COST", 0.10);

  $itemCosts = array(
    "SCHOOL_COST" => '{
                        "cost":3000,
                        "count":2,
                        "msg_for_single":"You could sponsor a school to give <span id=\'a1\' class=\'num_incr\' style=\'font-size:56px;\'>200</span> students a decent education",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools sustaining <span id=\'a1\' class=\'num_incr\' style=\'font-size:56px;\'>200</span> students each",
                        "img_path":"img/school.png"
                      }',
    "HOME_COST" => '{
                        "cost":700,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "WORKER_SALARY" => '{
                        "cost":500,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "SCHOLARSHIP_COST" => '{
                        "cost":300,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "ORPHAN_YEAR_COST" => '{
                        "cost":200,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "RICKSHAW_COST" => '{
                        "cost":50,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "BICYCLE_COST" => '{
                        "cost":25,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "MEAL_COST" => '{
                        "cost":1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "CLOTHING_COST" => '{
                        "cost":5,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "FLASHLIGHT_COST" => '{
                        "cost":0.5,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "BLANKET_COST" => '{
                        "cost":2,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "WATER_COST" => '{
                        "cost":1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "BACKPACK_COST" => '{
                        "cost":1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "BOOK_COST" => '{
                        "cost":8,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "NOTEBOOK" => '{
                        "cost":1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "PENCIL_COST" => '{
                        "cost":0.2,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "SANDALS_COST" => '{
                        "cost":1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "BALL_COST" => '{
                        "cost":0.1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "CRICKET_BAT_COST" => '{
                        "cost":10,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "CRICKET_BALL_COST" => '{
                        "cost":0.5,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "MANGO_COST" => '{
                        "cost":0.1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "SALINE_COST" => '{
                        "cost":0.1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "CRACKER_COST" => '{
                        "cost":0.1,
                        "count":0,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }',
    "CANDY_COST" => '{
                        "cost":0.1,
                        "count":2,
                        "msg_for_single":"Blah",
                        "msg_part1":"You could sponsor ",
                        "msg_part2":" schools in Bangladesh",
                        "img_path":"img/school.png"
                      }'
  );

  // Getting the POST data from the form submitted and trimming
  $value = (int)(trim($_POST['amount']));

  // Variable declarations for all the amounts of each item listed above
  $count = 0;

/*
  if ((int)($value/2) >= SCHOOL_COST) {
    $temp_amount = (int)(($value/2)/SCHOOL_COST);
    $temp = $value - ($temp_amount*SCHOOL_COST);
    $obj->{'count'} = $temp_amount;
    $value = $temp;
  }

  if ((int)($value/2) >= HOME_COST) {
    $temp_amount = (int)(($value/2)/HOME_COST);
    $temp = $value - ($temp_amount*HOME_COST);
    $homes = $temp_amount;
    $value = $temp;
  }*/

  /** MAIN THING RIGHT HERE **/

  foreach ($itemCosts as $item => $json_string) {

    $obj = json_decode($json_string);
    $tempcost = $obj->{'cost'};

    if ((int)($value/2) >= $tempcost) {
      $temp_amount = (int)(($value/2)/$tempcost);
      $temp = $value - ($temp_amount*$tempcost);
      // $obj->{'count'} = $temp_amount;
      $value = $temp;
    }
  }

  // while($value > 0){
  //   //First run through array until you find an item where you can get at least one of the item with half the value
  //   //Get left over money and repeat process
  //   $availableMoney = $value;
  //   $item = itemsWithHalf($availableMoney);
  //   $value /= 2;
  //   $value -= $itemCosts[''+$item];

  // }

  // function itemsWithHalf($availableMoney){
  //   foreach ($itemCosts as $item => $cost) {
  //     if(($availableMoney/2 - $cost) > 0){
  //       return $item;
  //     }
  //   }
  //   //need one more if statement for the case where nothing else can be afforded
  // }


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
<!-- 
      <div class="bio">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="row-fluid" style="height:50px; display:table;">
              <p id="logo" class="text-center" style="display: table-cell; vertical-align: middle;"><a href="index.html"><img src="img/logo.png" width="250"/></a></p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="describe">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="row-fluid" style="width:100%;height:100%;margin-top:15%;">
            <div>
            <h1 class="text-center">Lets take a look at what <span style="font-size:72px">$</span><span id="el" style="font-size:72px;">loading...</span> can buy...</h1><br>
          </div>
          </div>
          </div>
        </div>
      </div>

      <!-- <?php foreach ($itemCosts as $item => $json_string) { echo $item." ".$json_string; $obj = json_decode($json_string); echo $obj->{'count'}; } ?> -->

      <?php foreach ($itemCosts as $item => $json_string) { $obj = json_decode($json_string); if($obj->{'count'} > 0) { ?>


        <? if ($count % 2 == 1) { ?>
        <div class="finish-other">
        <? } else { ?>
        <div class="finish">
        <? } ?>
          <div class="row-fluid">
              <div class="span10 offset1">
                <? if ($count > 0) { ?>
                  <h1 class="text-center">And...</h1><br>
                <? } ?>
                <? if ($obj->{'count'} == 1) { ?>
                  <h1 class="text-center"><? echo $obj->{'msg_for_single'} ?></h1><br>
                <? } else { ?>
                  <h1 class="text-center"><? echo $obj->{'msg_part1'}." "; ?><span id="a1" class="num_incr" style="font-size:56px;"><? echo number_format($obj->{'count'}); ?></span><? echo " ".$obj->{'msg_part2'}; ?></h1><br>
                <? } echo "<br />"; $length_iterate = $obj->{'count'}; if ($obj->{'count'} > 10) { $length_iterate = 10;} for ($i = 0; $i < $length_iterate; $i++) { ?>
                  <img class="img_tile" src="<? echo $obj->{'img_path'}; ?>" width="200"/>
                <? } ?>
                <? if($obj->{'count'} >= 20) { ?>
                  <center><p style="float:left; padding-top:30px;"><i>Each figure represents approximately <? echo (int)($obj->{'count'}/10); ?> schools</i></p></center>
                <? } ?>
              </div>
          </div>
        </div>

      <? $count++; } } ?>



      <!-- <div class="finish">
        <div class="span10 offset1">
          <? if ($obj->{'count'} == 1) { ?>
            <h1 class="text-center">You could sponsor a school that could help <span id="a2" class="num_incr" style="font-size:56px;"><? echo number_format($obj->{'count'}*300); ?></span> children get an education.</h1><br>
          <? } else {   ?>
            <h1 class="text-center">You could sponsor <span id="a1" class="num_incr" style="font-size:56px;"><? echo number_format($obj->{'count'}); ?></span> schools that could help over <span id="a2" class="num_incr" style="font-size:56px;"><? echo number_format($obj->{'count'}*300); ?></span> children get an education.</h1><br>
          <? } echo "<br />"; if ($obj->{'count'} > 20) {$obj->{'count'} = 20;} for ($i = 0; $i < $obj->{'count'}; $i++) { ?>
            <img class="img_tile" src="img/school.png" width="200"/>
          <? } ?>
        </div>
      </div> -->

    <!-- REMINDER TO SELF: USE $count for the ID values and then in javascript only select a0 since that is the first one -->
      

    <div class="finish">
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
    <script>
        // Animate the element's value from x to y:
      var value_left = "<?php echo $value; ?>";
      var time;
      if (value_left >= 8) {time=3000;}
      else {time=1000;}
      $({someValue: 0}).animate({someValue: value_left}, {
          duration: time,
          easing:'swing', // can be anything
          step: function() { // called on every step
              // Update the element's text with rounded-up value:
              $('#el').text(commaSeparateNumber(Math.round(this.someValue)));
          },
          complete : function(){
              $('#el').text(commaSeparateNumber(value_left));
          }
      });

     function commaSeparateNumber(val){
        while (/(\d+)(\d{3})/.test(val.toString())){
          val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        }
        return val;
      }
  </script>
  </body>
</html>


