
<?php

//initialize information about sender
$from_name='';
$from_address='';
$from_city='';
$from_state='';
$from_zip='';

//initialize information about receiver
$to_name='';
$to_address='';
$to_city='';
$to_state='';
$to_zip='';

//initialize information about the package
  $height='';
  $length='';
  $width='';
  $weight='';

  $message='Enter some data and click the submit button';

  $action=filter_input(INPUT_POST, 'action');

  //retreiving the first name
  // $name=strtolower($from_name);
  //       $name=ucwords($name);
  //
  //       $i=strpos($name,' ');
  //       if($i===false){
  //         $first_name=$name;}
  //         else{
  //           $first_name=substr($name,0,$i);
  //         }



  $states = array(
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AS'=>'AMERICAN SAMOA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FM'=>'FEDERATED STATES OF MICRONESIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'GU'=>'GUAM GU',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MH'=>'MARSHALL ISLANDS',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'MP'=>'NORTHERN MARIANA ISLANDS',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PW'=>'PALAU',
	'PA'=>'PENNSYLVANIA',
	'PR'=>'PUERTO RICO',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VI'=>'VIRGIN ISLANDS',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
	'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
	'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
	'AP'=>'ARMED FORCES PACIFIC'
);


  switch($action){
      case "process_data":
      $from_name=filter_input(INPUT_POST,'from_name');
      $from_address=filter_input(INPUT_POST,'from_address');
      $from_city=filter_input(INPUT_POST,'from_city');
      $from_state=filter_input(INPUT_POST,'from_state');
      $from_zip=filter_input(INPUT_POST,'from_zip');

      $to_name=filter_input(INPUT_POST,'to_name');
      $to_address=filter_input(INPUT_POST,'to_address');
      $to_city=filter_input(INPUT_POST,'to_city');
      $to_state=filter_input(INPUT_POST,'to_state');
      $to_zip=filter_input(INPUT_POST,'to_zip');

      $height=filter_input(INPUT_POST,'height');
      $length=filter_input(INPUT_POST,'length');
      $width=filter_input(INPUT_POST,'width');
      $weight=filter_input(INPUT_POST,'weight');



      //validating dimensions of box
      if (($height>36) || ($width>36) || ($length>36)){
        $message="Each dimension of the package must be less than 36 inches.";
        break;
      }

//validating the weight of box
if ($weight>150){
  $message="Weight of the box must be less than 150 pounds";
  break;
}


if (!preg_match('#[0-9]{5}#', $to_zip)){
     $message="Invalid Reciever's ZipCode";
     break;
   }

if (!preg_match('#[0-9]{5}#', $from_zip)){
      $message="Invalid Sender's ZipCode";
      break;
    }

if(empty($to_name)||empty($from_name)){
  $message="Sender's or Receiver's name cannot be empty";
  break;
}

if(empty($from_address)||empty($to_address)){
  $message="Sender's or Reciever address cannot be empty";
  break;
}


if(empty($from_city)||empty($to_city)){
  $message="Sender's or Reciever city section is empty";
  break;
}



if(strlen($from_state)!==2){
  $message="State must be entered in two Uppercase letter";
}


if(strlen($to_state)!==2){
  $message="State must be entered in two Uppercase letter";
}



if(!array_key_exists($from_state,$states)){
  $message="Please enter valid US state name on Sender's section";
  break;
}

if(!array_key_exists($to_state,$states)){
  $message="Please enter valid US state name on Receiver section";
  break;
}




// if(empty($height)||empty($weight)||empty($width)||empty($length)){
//   $message=" Please enter the dimensions or weight of box";
//
// }

if(!is_numeric($height)||!is_numeric($weight)||!is_numeric($width)||!is_numeric($length)){
  $message="Please enter valid dimensions or weight of box";
  break;
}












        $message=
                "Hello $from_name,\n".
                "Thank you for entering the data:\n\n".
                "From:\n".
                "Name: $from_name\n".
                "Address: $from_address\n".
                "City: $from_city\n".
                "State: $from_state\n".
                "Zip: $from_zip\n\n".
                "To:\n".
                "Name: $to_name".
                "Address: $to_address\n".
                "City: $to_city\n".
                "State: $to_state\n".
                "Zip: $to_zip\n".
                "Dimensions of package is $length"."*$width"."*$height\n".
                "Weight of package: $weight"."lbs";

}



include 'package.php';
?>
