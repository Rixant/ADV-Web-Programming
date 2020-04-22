<!-- Name=Rishant Rokaha
Date=8th March 2020
Subject=ADV Web Programming
Assignment=package.php -->
<html>
<head>
  <title> Shipping Info </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <main>
    <h1> Shipping Information </h1>
    <form action="." method="post">
      <input type="hidden" name="action" value="process_data">

<fieldset><legend>From</legend>
      <label>Name:</label>
      <input type="text" name="from_name" value="<?php echo htmlspecialchars($from_name);  ?>">
      <br>

      <label>Street Address:</label>
      <input type="text" name="from_address" value="<?php echo htmlspecialchars($from_address); ?>">
      <br>

      <label> City:</label>
        <input type="text" name="from_city" value="<?php echo htmlspecialchars($from_city);  ?>" >
        &nbsp;&nbsp;&nbsp;
        State:
        <input name="from_state" type="text"  size="3" maxlength="2" value="<?php echo htmlspecialchars($from_state);  ?>">
        &nbsp;&nbsp;&nbsp;ZIP:
        <input name="from_zip" type="text"  size="8" value="<?php echo htmlspecialchars($from_zip); ?>">
      </label>
    </fieldset>

    <fieldset><legend>To</legend>
          <label>Name:</label>
          <input type="text" name="to_name" value="<?php echo htmlspecialchars($to_name);  ?>">
          <br>

          <label>Street Address:</label>
          <input type="text" name="to_address" value="<?php echo htmlspecialchars($to_address); ?>">
          <br>


          <label> City:</label>
            <input type="text" name="to_city" value="<?php echo htmlspecialchars($to_city);  ?>">
            &nbsp;&nbsp;&nbsp;
            State:
            <input name="to_state" type="text"  size="3" maxlength="2" value="<?php echo htmlspecialchars($to_state); ?>">
            &nbsp;&nbsp;&nbsp;ZIP:
            <input name="to_zip" type="text"  size="8" value="<?php echo htmlspecialchars($to_zip); ?>">
          </label>
        </fieldset>

        <fieldset>
          <legend>Size </legend>
          <p><b>Height</b></p>
            <input name="height" type="text"  size="1" maxlength="2" value="<?php echo htmlspecialchars($height);  ?>"><i>inches</i>
            <p><b>Width</b></p>
            <input name="width" type="text"  size="1" maxlength="2" value="<?php echo htmlspecialchars($width);  ?>" ><i>inches</i>
            <p><b>Length</b></p>
            <input name="length" type="text"  size="1" maxlength="2" value="<?php echo htmlspecialchars($length);  ?>" ><i>inches</i>
            <p><b>Weight</b></p>
            <input name="weight" type="text"  size="1" maxlength="3" value="<?php echo htmlspecialchars($weight);  ?>"><i>lbs</i></p>
  </fieldset>
      <input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="Reset" value="Reset" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br>
      <form>

        <h2>Message: </h2>
        <p> <?php echo nl2br(htmlspecialchars($message));?>
        </p>


      </main>
    </body>
    </html>
