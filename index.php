<?php
/* !Foreach Loops! */ 

include ('list.php');


foreach($list as $item){//Item becomes associative array with named key and value
    echo $item['title'] . "<br /> \n";//Echo value of 'title' on each iteration
}


?>