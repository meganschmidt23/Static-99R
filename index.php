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
               Static- 99R Form
            </p>
            <p class="subtitle">
                This form created by R. Karl Hanson and David Thorton uses unchanging risk factors that predict the potential for re-offense. These
                factors include age of release from custody, number of previous convictions, and the characteristics
                of their victims.
                <br>
                <i>This assessment is typically admnistered by licensed mental health professionals, parole agents, 
                    and probation officers.</i>
            </p>
        </div>
    </section> 
    <form action = "calculateScore.php" method = "POST"> 
    <div class="container">
      <div class="notification">
        Question 1: What was the age of the offender at release?
      </div>
      <p>
      <label class="radio" for="ans1">
        <input type="radio" name="ans1" id= "ans1" value="1">
          18 - 34.9
        </label> 
        <br>   
        <input type="radio" name="ans1" id= "ans1" value="0">
         35 - 39.9
        </label>  
        <br>  
        <input type="radio" name="ans1" id= "ans1" value="-1">
          40 - 59.9
          </label> 
          <br>   
        <input type="radio" name="ans1" id= "ans1" value="-3">
          60+     
      </label>
      </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 2: Has the offender ever lived with a lover for at least 2 years?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans2" id= "ans2" value="0">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans2" id= "ans2" value="1">
          No     
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 3: Does the offender have any <b>index</b> non-sexual violence convictions?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans3" id= "ans3" value="1">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans3" id= "ans3" value="0">
          No     
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 4: Does the offender have any <b>prior</b> non-sexual violence convictions?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans4" id= "ans4" value="1">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans4" id= "ans4" value="0">
          No     
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 5: Please indicate the number of occurences of the following:
      </div>
        <div class="container">
          <div class="content">
            <p>
            <i>Charges of sex offences</i>
          </p>
          </div>
          <p>
            <label class="radio">
              <input type="radio" name="ans5charges" id= "ans5charges" value="0">
               0
              </label>
            <br>
            <label class="radio">
             <input type="radio" name="ans5charges" id= "ans5charges" value="1">
             1 - 2
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="ans5charges" id= "ans5charges" value="2">
                3 - 5
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="ans5charges" id= "ans5charges" value="3">
                6 +     
            </label>
          </p>
          <div class="content">
            <p><i>
            Convictions of sex offences
        </p></i>
          </div>
          <p>
          <label class="radio">
            <input type="radio" name="ans5conv" id= "ans5conv" value="0">
              0
            </label>
          <br>
          <label class="radio">
            <input type="radio" name="ans5conv" id= "ans5conv" value="1">
            1
          </label>
          <br>
          <label class="radio">
            <input type="radio" name="ans5conv" id= "ans5conv" value="2">
              2 - 3
          </label>
          <br>
          <label class="radio">
            <input type="radio" name="ans5conv" id= "ans5conv" value="3">
              4 +     
          </label>
          </p>
        </div>
    </div>
    <div class="container">
      <div class="notification">
        Question 6: How many prior sentencing dates (excluding index) does the offender have?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans6" id= "ans6" value="0">
          3 or less    
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans6" id= "ans6" value="1">
          4 or more   
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 7: Does the offender have any convictions for non-contact sex offences?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans7" id= "ans7" value="1">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans7" id= "ans7" value="0">
          No     
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 8: Does the offender have any unrelated victims?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans8" id= "ans8" value="1">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans8" id= "ans8" value="0">
          No     
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 9: Does the offender have any stranger victims?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans9" id= "ans9" value="1">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans9" id= "ans9" value="0">
          No     
      </label>
        </p>
    </div>
    <div class="container">
      <div class="notification">
        Question 10: Does the offender have any male victims?
      </div>
      <p>
      <label class="radio">
        <input type="radio" name="ans10" id= "ans10" value="1">
          Yes     
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="ans10" id= "ans10" value="0">
          No     
      </label>
        </p>
    </div>
    <p>
    <div>
      <!--<a href= "./calculateScore.php?ans1="+ans1+"&ans2="+ans2; ?>&ans3=<?php echo $ans3; ?>&ans4=<?php echo $ans4; ?>&ans5conv=<?php echo $ans5convictions; ?>&ans5charges=<?php echo $ans5charges; ?>&ans6=<?php echo $ans6; ?>&ans7=<?php echo $ans7; ?>&ans8=<?php echo $ans8; ?>&ans9=<?php echo $ans9; ?>&ans10=<?php echo $ans10;?>"> -->
      <button class="button is-success">Submit</button>
      </div> 
        </p>   
</div>
        </form>
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