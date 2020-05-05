<!-- Name=Rishant Rokaha
Course=ADV Web Programming
Date=3rd May 2020
Assignment 6 -->
<html>
<head>
  <title> My Calendar </title>
  <link rel="stylesheet"  href="style.css">
</head>
<body>
  <main>
    <h1> My Calendar </h1>
    <h2>Check the list of tuesdays between two dates</h2>
<form method="post" >
  <input type="hidden" name="action"  value="process_data">
<b>Start Date:</b> <input name="start_date" type="date"  size="10" value="dd/mm/yyyy" /><br>
<br>
<b>End Date  :</b> <input name="end_date" type="date"  size="10" value="dd/mm/yyyy" /><br>
<br>
<input type="Submit" value="Submit" />
<br><br>
</form>
<h2>Message:</h2>
<?php if($_POST == null || $_POST['action'] == null || $_POST['action'] == false): ?>
  <?php $message='';
else:?>



<h4>All the Tuesdays between the two dates fall between <?php echo $start?> and <?php echo $end?></h4>

     <table>
         <tr>

             <th >No.</th>
             <th class="heading">Tuesdays</th>
           </tr>
           <?php $n=1; ?>
           <?php foreach($tuesdays as $tuesday): ?>

           <tr>
             <td><?php echo $n; $n=$n+1?></td>
         <td><?php echo $tuesday; ?></td>
       </tr>


      <?php endforeach; ?>
<?php endif; ?>
      </table>
