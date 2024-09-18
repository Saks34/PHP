<?php
function outer(){
    $a = "hello";  
    echo $a;      
   
    function inner(&$a){  
        echo $a;         
        $a = "bye";       
        echo $a;          
    }
    
    inner($a);  
    echo $a;
}
outer();
?>
