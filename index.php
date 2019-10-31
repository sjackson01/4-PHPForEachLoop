<?php
/* !Foreach Loops! */ 

include ('list.php');

//Echo value of 'title' on each iteration
foreach($list as $item){
    echo $item['title'] . "<br /> \n";
}


?>