<?php
for( $i=0 ; $i<=5; $i++){
echo "$i +1 <br>"; 

}
echo"<br>";
for( $i=0 ; $i<=5; $i++){
    echo $i +10 . "<br>";
    
    } echo"<br>";

    $family= array("mona", "lila", "noor","maha");
    //echo count($family);
    for( $i=0 ; $i < count($family) ; $i++){
        echo "$family[$i] <br>";} echo"<br>";

$family= array("mona", "lila", "noor");
        foreach($family as $member){
            echo "$member <br>";
        }



?>