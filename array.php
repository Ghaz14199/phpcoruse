<h1> ARRAY</h1>
<form action="array.php" method="GET">
Name: <input type="text" name="name" > <br>
 <br>
<input type="submit"  >
</form>

<?php

//$kname = $_GET["kname"];
 //echo $kname;
 /* Associative Aray
 $family= ["programer" =>"Maher", " chif "  => "Leen" ,  "gamer"=> "Ahmed"];
echo $family[$kname];*/

//$family= array("father", "mother", "sister");
//$family[1] = "love"; 
  //$family[3] = "brother"; 
  //echo $family["gamer"];
 //echo $family[1]; echo"<br>";
 //echo $family[3]; 
 //echo"<br>";
 //echo count($family); echo"<br>";
$name = $_GET["name"];
 /* $score= [ "Maher" =>["98", "A"],  "Leen"  =>[" 70" ,"C "] ,  "Ahmed"=> ["30" , "F"]];
echo  "score:" . $score[$name ][0]; echo"<br>";
echo  "grade:" . $score[$name ][1];echo"<br>";*/
// Associative 
$score= [ "Maher" =>[
  "score:" => "98", "grade:" => "A"
],  
"Leen"  =>[
  "score:" => "70", "grade:" => "C"
  ] , 
   "Ahmed"=> [
  "score:" => "30", "grade:" => "F"]];
echo  "score:" . $score[$name ]["score:" ];  echo"<br>";
echo  "grade:" . $score[$name ]["grade:"];echo"<br>";

 

 






?>