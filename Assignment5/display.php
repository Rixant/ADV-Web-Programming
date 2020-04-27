<!-- Name=Rishant Rokaha
Class= ADV Web Programming
Date= 19th April 2020
Assignment5 -->

<?php
$num1='';
$num2='';

$message='Enter some data and click the submit button';
 $action=filter_input(INPUT_POST, 'action');

 switch($action){
      case "process_data":
      $num1=filter_input(INPUT_POST,'num1');
      $num2=filter_input(INPUT_POST,'num2');
      $operand=filter_input(INPUT_POST,'Operands');


      if(!isset($num1)&&!isset($num2)){
    $message="Please enter valid numbers";
    break;
    }

      if(!is_numeric($num1) || !is_numeric($num2)){
    $message="Please enter valid numbers";
    break;
  }


      if($operand==="Add"){
        $op="+";
        $result=$num1+$num2;
;
            }
      elseif($operand==="Subtract"){
        $op="-";
        $result=$num1-$num2;
  }
      elseif($operand==="Multiply"){
        $op="*";
        $result=$num1*$num2;
      ;
      }
      else{
        $op="/";
        $result=$num1/$num2 ;
        $result=number_format($result, 2);
          ;
        }
        $message='<tt>'.$num1.' '.$op.' '.$num2.' = '.$result.'</tt>';

        }



?>
<html>
<head>
  <title> Calculator </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <main>
    <form action="display.php" method="post">
      <input type="hidden" name="action" value="process_data">
      <h1> Calculator </h1>

      <b>Number 1:</b> <input name="num1" type="text"  size="10" /><br>
      <br>
      <b>Number 2:</b> <input name="num2" type="text"  size="10" /><br>
      <br>
      <b>Operand :</b>
      <select name="Operands">
<option value="Add"><b>Addition(+)</b></option>
<option value="Subtract"><b>Subtraction(-)</b></option>
<option value="Multiply"><b>Multiplication(*)</b></option>
<option value="Divide"><b>Division(/)</b></option>
</select><br>
<br>
<input type="Submit" value="Calculate" /><br>
<br>
  <h2><b>Results: <?php  print($message) ; ?></b></h2>


  </main>
</body>
</html>
