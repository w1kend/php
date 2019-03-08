<?php
    
    function fibonacci($n){
         $fib = array(0,1);
         for($i = 0; $i < $n - 2; $i++){
             $current = $fib[$i] + $fib[$i+1];
             array_push($fib,$current);
         }
         
         return implode("  ",$fib);
    }
    
    function fibonacci_recursive($n) {
        
        if($n <=2)
            return 1;
        else {
            return fibonacci_recursive($n-1) + fibonacci_recursive($n-2); 
        }
    }
    
    echo "simple function: " . fibonacci(64);
    echo "\n========================================================\nrecursive function: ";
    $i = 1;
    while($i < 64) {
        
        echo fibonacci_recursive($i)."  ";
        $i++;
    }

?>
