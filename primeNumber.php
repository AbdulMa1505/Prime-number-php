<?php
function Prime($number){
    if($number <=1){
        return false;
    }
    for($i=2;$i<=sqrt($number);$i++){
        if($number%2==0){
            return false;
        }
    }
    return true;
}
$number =2;
if(Prime($number)){
    echo "this ".$number . " is a prime number";
}
else{
    echo "this  ". $number ."is not a prime number";
}
?>