<!-- Name=Rishant Rokaha
Class= ADV Web Programming
Date= 5th April 2020
Assignment4 -->
<?php
require_once('database.php');



$action=filter_input(INPUT_POST, 'action');
switch($action){
      case "process_data":
              $price=filter_input(INPUT_POST,'price');
            if( !isset($price)){
              $price=0;}


              $query="SELECT dish_name, price, is_spicy FROM dishes WHERE price >= $price ORDER BY price";
              $statement1=$db->prepare($query);
              $statement1->bindValue('price',$price);
              $statement1->execute();
              $menu=$statement1->fetchAll();
              $statement1->closeCursor();}

              ?>
              <!DOCTYPE html>
              <html>

              <!-- the head section -->
              <head>
                  <title>My Restaurant</title>
                  <link rel="stylesheet" type="text/css" href="style.css" >
              </head>

              <!-- the body section -->
              <body>
                <main>
                <h2>Search our dishes based on the minimum price</h2>
            <form method="post" action="">
              <input type="hidden" name="action" value="process_data">
            Price: <input name="price" type="text"  size="5" />
            <input type="Submit" value="GO" />
            <br><br>
            </form>
              <header><h1>My Restaurant</h1></header>

                  <h1>Menu</h1>

    <section>
                      <!-- display a list of categories -->
        <table>
            <tr>
                <th class="heading">Dishes</th>
                <th>Price</th>
                <th class="right">Spicy</th>
            </tr>
                      <?php foreach ($menu as $dict): ?>
          <tr>
            <td><?php echo $dict['dish_name']; ?></td>
            <td><?php echo $dict['price']; ?></td>
            <td><?php   if($dict['is_spicy']=="0"){
            $sp="No";}
                      else{
                        $sp="Yes";} echo $sp; ?></td>


        </tr>
        <?php endforeach; ?>
      </table>

 </section>
 </main>

</body>
</html>
