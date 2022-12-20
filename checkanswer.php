<?php
if($_POST)
{

 $quizname=$_POST['quizname'];
 $q1=$_POST['q1'];
 $q2=$_POST['q2'];
 $q3=$_POST['q3'];
 $q4=$_POST['q4'];
 $q5=$_POST['q5'];
 $q6=$_POST['q6'];
 $q7=$_POST['q7'];
 $q8=$_POST['q8'];
 $q9=$_POST['q9'];
 $q10=$_POST['q10'];
 
 $radio1=$_POST['radio1'];
 $radio2=$_POST['radio2'];
 $radio3=$_POST['radio3'];
 $radio4=$_POST['radio4'];
 $radio5=$_POST['radio5'];
 $radio6=$_POST['radio6'];
 $radio7=$_POST['radio7'];
 $radio8=$_POST['radio8'];
 $radio9=$_POST['radio9'];
 $radio10=$_POST['radio10'];
 $radio11=$_POST['radio11'];
 $radio12=$_POST['radio12'];
 $radio13=$_POST['radio13'];
 $radio14=$_POST['radio14'];
 $radio15=$_POST['radio15'];
 $radio16=$_POST['radio16'];
 $radio17=$_POST['radio17'];
 $radio18=$_POST['radio18'];
 $radio19=$_POST['radio19'];
 $radio20=$_POST['radio20'];
 $radio21=$_POST['radio21'];
 $radio22=$_POST['radio22'];
 $radio23=$_POST['radio23'];
 $radio24=$_POST['radio24'];
 $radio25=$_POST['radio25'];
 $radio26=$_POST['radio26'];
 $radio27=$_POST['radio27'];
 $radio28=$_POST['radio28'];
 $radio29=$_POST['radio29'];
 $radio30=$_POST['radio30'];
 $radio31=$_POST['radio31'];
 $radio32=$_POST['radio32'];
 $radio33=$_POST['radio33'];
 $radio34=$_POST['radio34'];
 $radio35=$_POST['radio35'];
 $radio36=$_POST['radio36'];
 $radio37=$_POST['radio37'];
 $radio38=$_POST['radio38'];
 $radio39=$_POST['radio39'];
 $radio40=$_POST['radio40'];

 $question1=array($radio1,$radio2,$radio3,$radio4);
 $question2=array($radio5,$radio6,$radio7,$radio8);
 $question3=array($radio9,$radio10,$radio11,$radio12);
 $question4=array($radio13,$radio14,$radio15,$radio16);
 $question5=array($radio17,$radio18,$radio19,$radio20);
 $question6=array($radio21,$radio22,$radio23,$radio24,);
 $question7=array($radio25,$radio26,$radio27,$radio28);
 $question8=array($radio29,$radio30,$radio31,$radio32);
 $question9=array($radio33,$radio34,$radio35,$radio36);
 $question10=array($radio37,$radio38,$radio39,$radio40);
//  $soa=count($question1);
//  for($i=0;$i<$soa;$i++)
// {
//  echo"".$question1[$i]."<br>";
// }
echo"  
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Page</title>
</head>
<body>
    <!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Quiz</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <style>
        .main
        {
          display:flex;
          width: 100%;
          height:100%;
        }
        .container
        { 
          display: flex;
          flex-wrap: wrap;
          position:relative;
          padding: 0%;
          margin-top:0.5rem;
          width: 100rem;
          height:90vh;
          overflow-y:auto;
          border:3px solid black;
          /* border-bottom:none; */
          outline: none;
          border-radius: 0.2rem;
        }
        .header1
        {
          display: flex;
          justify-content: center;
          align-items: center;
          width:69.98rem;
          height:8rem;
          background-color: rgb(255, 197, 50);
          border: 3px solid rgb(69, 68, 68);
          position: fixed;
        }
        .header1,h1
        {
          color:black;
          font-size:4rem;
        }
        h3 input
        {
          width: 30rem;
          border:2px solid black;
        }
        .question
        {
          visibility: visible;
          margin-top:12rem;
          margin-left:3rem;
        }
        .question ul li
        {
          font-size:1rem;
        }
        ul
        {
          font-size: 12rem;
        }
        li h4
        {
          font-size: 1.2rem;
        }
        .radio
        {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
        }
        .radiobtn input
        {
          width: 1rem;
          height:4rem;
        }
        .radiobtn input
        {

          border:2px solid white;
          accent-color: red;
        }
        .radiobtn
        {
          display: flex;
          flex-direction: row;
          align-items:center;
        }
        .radiobtn h6
        {
          margin-left:0.5rem;
          font-weight: 400;
        }
        .formbtn
        {
          display: flex;
          flex-direction: row;
          justify-content: space-evenly;
          margin: 0.5rem;
        }
        .formbtn .btn1
        {
          flex-grow: 0.2;
        }
        .formbtn .btn2
        {
          flex-grow: 0.2;
        }
        .inputques h4 input
        {
            border: 0.5px solid black ;
            border-radius: 0.2rem;
            outline: none;
            width: 60rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .radiobtn input input
        {
          visibility: visible;
          width: 50rem;
          padding-right: 3rem;
        }
        .input
        {
          display: none;
        }
        .edit
        {
          visibility:visible;
        }
        .editbtn
        {
          position:fixed;
          left:40rem;
          top:20rem;
        }
        #quizname
        {
            border-radius: 0.2rem;
            outline: none;
            width: 30rem;
            height: 2.5rem;
            margin-left: 5rem;
        }
        .noq
        { 
            border-radius: 0.2rem;
            outline: none;
            width: 30rem;
            height: 2.5rem;
            margin-left: 5rem;
            border: 0.5px solid black ;
            margin-bottom:3rem;
        }
        .question h1
        {
          text-align: center;
        }
        .optindicate
        {
          display:none;
        }
      
        // .radioafter
        // {
        //   visibility: hidden;
        // }
        // .optionvisible input
        // {
        //   width: 40rem;
        //   height: 2rem;
        //   border: 1px solid black;
        // }

    </style>
    <script>
    alert('Your Quiz is Ready');
        // var count=0;
        // function change(obj)
        // {
        //        if(document.getElementsByClassName('noq')[0].value=='')
        //        {
        //         alert('Please entered Quiz name');
        //        }
        //        else
        //        {
        //        var x=document.getElementsByClassName('input');
        //        document.getElementsByTagName('h4')[count].innerHTML= obj.value; 
        //        obj.style.visibility='hidden';
        //        document.getElementsByClassName('noq')[0].style.display='none';
        //        document.getElementsByTagName('span')[0].style.display='none';
        //        document.getElementsByTagName('h5')[0].innerHTML=document.getElementsByClassName('noq')[0].value;
        //        count++;
        //        }
        // }
      
    </script>
  </head>
  <body>
    <div class='main'>
        <div class='container'>
            <div class='header1'><h1 id='h5noq'>".$quizname."</h1></div>
            <div class='question'>
              <ul>                
               <b><li type='1' class='inputques' ><h4>".$q1."</h4></li></b>
                <!-- 8 -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <div class='radiobtn'>  <input type='radio' name='btn' class='radioafter' required /><h6 class='optionvisible'>". $radio1."</h6></div>
                  <div class='radiobtn'>  <input type='radio' name='btn' class='radioafter' required /><h6 class='optionvisible'>". $radio2."</h6></div>
                  <div class='radiobtn'>  <input type='radio' name='btn' class='radioafter' required /><h6 class='optionvisible'>". $radio3."</h6></div>
                  <div class='radiobtn'>  <input type='radio' name='btn' class='radioafter' required /><h6 class='optionvisible'>". $radio4."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q2."</h4></li></b>
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <!-- The reference of the array -->
                  <div class='radiobtn'><input type='radio' name='btn1' class='radioafter' required /><h6 class='optionvisible' >". $radio5."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn1' class='radioafter' required /><h6 class='optionvisible' >". $radio6."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn1' class='radioafter' required /><h6 class='optionvisible' >". $radio7."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn1' class='radioafter' required /><h6 class='optionvisible' >". $radio8."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q3."</h4></li></b>
                <!-- Objects -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <div class='radiobtn'><input type='radio' name='btn2' class='radioafter'required /><h6 class='optionvisible'  >". $radio9."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn2' class='radioafter'required /><h6 class='optionvisible'  >". $radio10."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn2' class='radioafter'required /><h6 class='optionvisible'  >". $radio11."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn2' class='radioafter'required /><h6 class='optionvisible'  >". $radio12."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q4."</h4></li></b>
                <!-- At the run time -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                 <div class='radiobtn'><input type='radio'  name='btn3' class='radioafter' required /><h6 class='optionvisible'  >". $radio13."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn3' class='radioafter' required /><h6 class='optionvisible'  >". $radio14."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn3' class='radioafter' required /><h6 class='optionvisible'  >". $radio15."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn3' class='radioafter' required /><h6 class='optionvisible'  >". $radio16."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q5."</h4></li></b>
                <!-- java.lang.Object -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                 <div class='radiobtn'><input type='radio'  name='btn4' class='radioafter' required /><h6 class='optionvisible' >". $radio17."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn4' class='radioafter' required /><h6 class='optionvisible' >". $radio18."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn4' class='radioafter' required /><h6 class='optionvisible' >". $radio19."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn4' class='radioafter' required /><h6 class='optionvisible' >". $radio20."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q6."</h4></li></b>
                <!-- And int values -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                 <div class='radiobtn'><input  type='radio' name='btn5' class='radioafter' required /><h6 class='optionvisible' >". $radio21."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn5' class='radioafter' required /><h6 class='optionvisible' >". $radio22."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn5' class='radioafter' required /><h6 class='optionvisible' >". $radio23."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn5' class='radioafter' required /><h6 class='optionvisible' >". $radio24."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q7."</h4></li></b>
                <!-- java.lang -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <div class='radiobtn'><input type='radio' name='btn6' class='radioafter' required /><h6 class='optionvisible'  >". $radio25."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn6' class='radioafter' required /><h6 class='optionvisible'  >". $radio26."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn6' class='radioafter' required /><h6 class='optionvisible'  >". $radio27."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn6' class='radioafter' required /><h6 class='optionvisible'  >". $radio28."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q8."</h4></li></b>
                <!-- 13 -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <div class='radiobtn'><input type='radio' name='btn7' class='radioafter' required  /><h6 class='optionvisible'  >". $radio29."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn7' class='radioafter' required  /><h6 class='optionvisible'  >". $radio30."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn7' class='radioafter' required  /><h6 class='optionvisible'  >". $radio31."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn7' class='radioafter' required  /><h6 class='optionvisible'  >". $radio32."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q9."</h4></li></b>
                <!-- 3.0 -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <div class='radiobtn'><input type='radio' name='btn8' class='radioafter' required  /><h6 class='optionvisible' >". $radio33."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn8' class='radioafter' required  /><h6 class='optionvisible' >". $radio34."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn8' class='radioafter' required  /><h6 class='optionvisible' >". $radio35."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn8' class='radioafter' required  /><h6 class='optionvisible' >". $radio36."</h6></div>
                </div>
                <b><li type='1' class='inputques' ><h4>".$q10."</h4></li></b>
                <!-- Interface -->
                <div class='radio'>
                  <h5 class='optindicate'>Option :- </h5>
                  <div class='radiobtn'><input type='radio' name='btn9' class='radioafter' required /><h6 class='optionvisible'>". $radio37."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn9' class='radioafter' required /><h6 class='optionvisible'>". $radio38."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn9' class='radioafter' required /><h6 class='optionvisible'>". $radio39."</h6></div>
                  <div class='radiobtn'><input type='radio' name='btn9' class='radioafter' required /><h6 class='optionvisible'>". $radio40."</h6></div>
                </div>
                </ul>
            </div>
        </div>     
    </div>
    <div class='formbtn'>
    <button class='btn1 btn btn-danger' type='reset'>Reset</button>
    <button class='btn2 btn btn-success' onclick='checkAnswer()'>Submit</button>
  </div>    
</div>

</form>
  </body>
  <div class='formbtn'>
  <button class='btn2 btn btn-primary' type='button' ><a style='color:white;text-decoration:none' href='Editable.html'>Customize Quiz</a></button>
</div>
</html>
</body>
</html>

";
}