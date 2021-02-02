<?php 
$color = "is-white";
$riskfactor = "none";
$total = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if( isset($_POST["ans1"]) && isset($_POST["ans2"]) && isset($_POST["ans3"]) && isset($_POST["ans4"]) && isset($_POST["ans5conv"]) && isset($_POST["ans5charges"]) && isset($_POST["ans6"]) && isset($_POST["ans7"]) && isset($_POST["ans8"]) && isset($_POST["ans9"]) && isset($_POST["ans10"]) ) {
        $ans1 = (int)$_POST["ans1"];
        $ans2 =(int)$_POST["ans2"];
        $ans3 = (int)$_POST["ans3"];
        $ans4=(int)$_POST["ans4"];
        $ans5conv=(int)$_POST["ans5conv"];
        $ans5charges=(int)$_POST["ans5charges"];
        $ans6=(int)$_POST["ans6"];
        $ans7 = (int)$_POST["ans7"];
        $ans8 = (int)$_POST["ans8"];
        $ans9=(int)$_POST["ans9"];
        $ans10 = (int)$_POST["ans10"];
        $total = (int)$ans1 + $ans2+$ans3+$ans4+$ans5charges+$ans5conv+$ans6=$ans7+$ans8+$ans9+$ans10;
        if($total > -4 && $total < 2){
            $color = "is-success";
            $riskfactor = "Low";
        } elseif($total < 4){
            $color = "is-warning";
            $riskfactor = "Low-Moderate";
        } elseif($total < 6) {
            $color = "is-danger is-light"; 
            $riskfactor = "Moderate-High";
        }else{
            $color = "is-danger";
            $riskfactor = "High";
        }
    }
}    
?>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">  
        <style>
          p {
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 5px;
            padding-top: 5px;
          }
</style>
      </head>
    <body>
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
               Static- 99R Form Results
            </p>
        </div>
    </section>
    <section>
    <article class="message <?php echo $color; ?>">
        <div class="message-header">
            <p>Results: <?php echo $riskfactor; ?> Risk</p>
        </div>
  <div class="message-body">
    Based on the submission, the total score for this offender is <?php echo $total ;?>, and they are in the <?php echo $riskfactor; ?> risk category.
  </div>
</article>
    </section>
    </body>
    <footer>
      <br>
        <footer class="footer">
            <div class="content has-text-centered">
              <p>
                Code by <a href="https://www.linkedin.com/in/meganschmidt23/">Megan Schmidt</a>.
                <br>
                <b>Note: I did not create this form. I merely transformed it from a physical paper into a website.</b>
              </p>
            </div>
          </footer>
    </footer>
</html>