<!-- Name=Rishant Rokaha
Course=ADV Web Programming
Date=3rd May 2020
Assignment 6 -->



<?php

$message='Enter some data and click the submit button';


 $action=filter_input(INPUT_POST, 'action');

 // $days=array(1=>"Monday",
 //              2=>"Tuesday",
 //              3=>"Wednesday",
 //              4=>"Thursday",
 //              5=>"Friday",
 //              6=>"Saturday",
 //              7=>"Sunday")


 switch($action){

      case "process_data":
        $start=filter_input(INPUT_POST,'start_date');
        $start_date=strtotime($start);
        $end=filter_input(INPUT_POST,'end_date');
          $end_date=strtotime($end);





          if(empty($start) || empty($end) ) {
              $message="Please enter valid date";
              break;
            }
            else if($start>$end){
            $message="Start date cannot be greater than End date";
            break;
            }
            else {
              $message='';

            $tuesdays=array();
            // $start_date=strtotime($start_date);
            // $end_date=strtotime($end_date);
            $secInDay = 86400;

              for($i = $start_date; $i <= $end_date; $i += $secInDay) {
                  $day = date('D', $i);
                  // echo $day;
                  if($day == "Tue") {

                      $tuesdays[] = date('d/m/Y', $i);

                    $i += 6 * $secInDay;
                  }
              }
          }

    }


include 'form.php'

?>
