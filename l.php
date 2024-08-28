<?php
$t= readline("When are you eating? ");

switch($t){
    case "Breakfast":
        echo "1.Idli,2.Dosa,3.Paratha,4.Ghogni\n";
        $m = readline("Which Item");
       switch($m){
        case 1 :
            $p = "Idli";
        case 2: 
            $p = "Dosa";
        case 3: 
            $p = "Paratha";
        case 4:
            $p = "Ghogni";
        }
        case "Lunch":
            echo "1.Idli,2.Dosa,3.Paratha,4.Ghogni";
        $m = readline("Which Item");
       switch($m){
        case 1 :
            $p = "Aalo Sabzi";
        case 2: 
            $p = "Raita";
        case 3: 
            $p = "Palaw";
        case 4:
            $p = "Chorchori";
        }
        case "Snacks":
            echo "1.Idli,2.Dosa,3.Paratha,4.Ghogni";
        $m = readline("Which Item");
       switch($m){
        case 1 :
            $p = "Bhujiya";
        case 2: 
            $p = "Dosa";
        case 3: 
            $p = "Paratha";
        case 4:
            $p = "Ghogni";
        }
        case "Dinner":
            echo "1.Idli,2.Dosa,3.Paratha,4.Ghogni";
        $m = readline("Which Item");
       switch($m){
        case 1 :
            $p = "Idli";
        case 2: 
            $p = "Dosa";
        case 3: 
            $p = "Paratha";
        case 4:
            $p = "Ghogni";
        }
}
echo "You have choose ", $p , " for your ",$t;
?>