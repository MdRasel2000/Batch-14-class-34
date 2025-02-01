<?php

$marks = 80;

if($marks>=80){

    echo "A+";
}

  else if ($marks>=70){

    echo "A-";
  }

  else{
    echo "Fail";
  }


 
echo "<br> <br>";


$color =  "black";

switch($color){

    case "green";
    echo  "success <br>";
    break;

    case "yewollo";
    echo  "warning <br>";
    break;

    case "blue";
    echo  "info <br>";
    break;

    default: {

        echo "failure <br>";
    }


}


   
echo "<br>";


$marks =  80 ;

switch($marks){

    case 80 ;
    echo  "A+ <br>";
    break;

    case 70 ;
    echo  "A <br>";
    break;

    case  60 ;
    echo  "A- <br>";
    break;

    default: {

        echo "failure <br>";
    }


}

  
echo "<br>";


  $Array = [ 70, 80, 99, 80, 90, 77];

   for($i=0; $i<=5; $i++){

    echo  $Array[$i]. "<br>";
   }


   
   echo "<br>";
   

   foreach($Array as $elements){

     echo $elements. "<br>";
   }

     
   echo "<br>";


   $i= 0;

   while($i<=5){

    echo  $Array[$i]. "<br>";

    $i++;


   }

   echo "<br>";


    $i= 0;

    do{

        echo  $Array[$i]. "<br>";

    $i++;

    }

    while($i<=5 );

?>