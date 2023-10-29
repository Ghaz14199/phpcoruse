<?php
function hello($x){
//echo " Welcome gh "; echo"<br>";
$user = $x ;
if ($user === "hind"){
    echo " Welcome  " . $user;  
}else{
    echo " Bye " . $user;  
}

//echo "gh" . $user ;

}
hello("noor");
echo"<br>";
hello("hind"); 
echo"<br>";

function add($x,$y){
    return $x+$y;
}
echo add(9,9);
?>