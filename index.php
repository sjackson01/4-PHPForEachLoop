<?php
/* !Foreach Loops! */ 

include ('list.php');

//Echo value of 'title' on each iteration
//Item becomes associative array with named key and value
foreach($list as $item){
    echo $item['title'] . "<br /> \n";
}


?>