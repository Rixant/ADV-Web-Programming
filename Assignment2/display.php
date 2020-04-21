<!--  Rishant Rokaha
       ADV Web Programming
     9th February 2020
       Assignment2=display.php  -->
<?php
$hamburgers=$_POST['hamburgers'];
$fries=$_POST['fries'];
$milkshakes=$_POST['milkshakes'];

//calculating total cost of items
$cost_hamburgers=$hamburgers*2.95;
$cost_fries=$fries*1.95;
$cost_milkshakes=$milkshakes*0.85;

//calculating tax and tips
$meal=($cost_fries+$cost_hamburgers+$cost_milkshakes);
$tax_amount=$meal*0.075;
$tips=$meal*0.16;
$final_cost=$meal+$tax_amount+$tips;

//formatting the costs
$cost_hamburgers_formatted="$".number_format($cost_hamburgers, 2);
$cost_fries_formatted="$".number_format($cost_fries, 2);
$cost_milkshakes_formatted="$".number_format($cost_milkshakes, 2);
$meal_formatted="$".number_format($meal, 2);
$tax_amount_formatted="$".number_format($tax_amount, 2);
$tips_formatted="$".number_format($tips, 2);
$final_cost_formatted="$".number_format($final_cost, 2);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title> Restaurant Order</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
   <body>
     <main>
     <h1> Restaurant Order</h1>

     <!-- Date and Time -->
     <p>
       <?php echo date('H:i jS F Y');?>
     </p>

     <hr>
     <h2> Order Receipt </h2>
     <label> Total cost of Hamburgers: </label>
     <span> <?php  echo $cost_hamburgers_formatted; ?> </span> <br>
     <label> Total cost of Fries: </label>
     <span> <?php echo $cost_fries_formatted; ?></span><br><br>
     <label> Total cost of Milkshakes:</label>
     <span> <?php echo $cost_milkshakes_formatted; ?></span><br><hr>
     <label> Total cost of Meal:</label>
     <span> <?php echo $meal_formatted; ?></span><br>
     <label>  Tax Amount:</label>
     <span> <?php echo $tax_amount_formatted; ?></span><br>
     <label> Tips: </label>
     <span> <?php echo $tips_formatted; ?></span><br><hr>
     <label> Final Cost of Order: </label>
     <span> <?php echo $final_cost_formatted; ?></span><br>


     </body>
     </html>
