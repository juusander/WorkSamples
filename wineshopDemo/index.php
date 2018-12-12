<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body link="#C0C0C0" vlink="#808080" alink="#FF0000">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.wrapper').fadeIn();
});

$(document).ready(function(){
    $(".back").click(function(){
        $(".menu").hide();
        $('html,body').animate({
            scrollTop: $(".plate").offset().top},
            'slow');

    });
    $("#menuimg,#menutext").click(function(){
        $(".menu").show();
    });
    $("#menuimg,#menutext").click(function() {
    $('html,body').animate({
        scrollTop: $(".menu").offset().top},
        'slow');
});
});
</script>

 <div class="wrapper">
   <div style="text-align:center" class="nav">
<p class="text4">
       <a href="#about">About Us</a>
     &nbsp; / &nbsp;
       <a href="login.php">Login</a>
</p>

   </div>
  <div class="plate">
  <p class="script"><span>Wine</span></p>
<br/><br/>
  <p class="shadow text2">Special</p>
  <br/><br/><br/>
  <p class="shadow text3">Wine</p>
<br/>
  <p class="script"><span>Dine</span></p>

  <br><br><br>


  <div class="container">
      <div class="img"><img id="menuimg" src="img/bottle-macro-shadow-121191.jpg" /></div>
      <div class="text"><p class="script" id="menutext"><span>Menu</span></p></div>
  </div>
  <div class="container">
      <div class="img"><img src="img/blur-close-up-cutlery-370984.jpg" /></div>
      <div class="text"><p class="script"><span>Restaurants</span></p></div>
  </div>
  <div class="container">
      <div class="img"><img src="img/alcohol-barrel-basement-434311.jpg" /></div>
      <div class="text"><p class="script"><span>Order</span></p></div>
  </div>

  <div style="display:none" id="about" class="about1">
    <p class="text4">
  [FOUNDERS] started [COMPANY] because [EXPLAIN PROBLEM IN YOUR INDUSTRY].

  That's why [DESCRIBE JOURNEY TO SOLUTION].

  Along the way, [SHARE MILESTONES AND WINS].

  We want to be [STATE YOUR MISSION GOING FORWARD].
    </p>
  </div>



<div class="menu">
  <p class="script"><span> Our Finest Collection</span></p>
  <br><br>
  <img class="menuimages" src="img/romanee.jpg"/>
  <p class="text4">Domaine de la Romanee-Conti 1990 <br/><br/>
    The Domaine has its private supply of oak from the Troncais forests, and 100% new oak is used.
    Maturation time depends on the quality of the vintage.
    There is no filtration and if racking off the lees is required this is done by gravity from cask to cask, never pumped. If the wines need to be fined, then fresh eggs are used. The wines spend sixteen to twenty months in wood before bottling. Both assemblage and bottling are done by gravity and usually cask by cask.

  </p>
  <br><br>
  <img class="menuimages" src="img/yquem.jpg"/>
  <p class="text4">Chateau d’Yquem 1811 <br/><br/>
    Harvesting is carefully timed, and on average six tries through the vineyard are undertaken each year to ensure that only the botrytized grapes are selected.
    The yield averages nine hectolitres per hectare (2.5 acres), compared to the usual twelve to twenty hectolitres per hectare in Sauternes. The grapes are pressed three times and transferred to oak barrels for maturation over a period of about three years.

  </p>

  <br><br>
  <img class="menuimages" src="img/burgundy.jpg"/>
  <p class="text4">Henri Jayer Richebourg Grand Cru <br/><br/>
  The color is no longer deep ruby but there is no bricking at all. A nose of incredible purity and elegance explodes from the glass with fresh and spicy black fruit aromas
  </p>
  <br><br>
  <div class="back">
  <p class="script"><span>Back</span></p>
</back>
</div>

</div>



<div class="container">

</div>
</div>
</body>
</head>
</html>
