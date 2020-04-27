
<!-- Name=Rishant Rokaha
Class= ADV Web Programming
Assignment5 -->
<html>
<head>
  <title> Calculate </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <main>
    <h1> Calculator </h1>
    <form action="display.php" method="post">
      <input type="hidden" name="action" value="process_data">

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
<input type="Submit" value="Calculate" />


      </main>
    </body>
    </html>
