<?php
function printPattern($n) 
{ 
      
    $k = 0; 
  
    for ($i = 1; $i <= $n; $i++)  
    { 
        for ($j = 1; $j <= $n - $i; $j++)  
        { 
            echo " "; 
        } 
        while ($k != (2 * $i - 1))  
        { 
            if ($k == 0 or $k == 2 * $i - 2) 
                echo "*"; 
            else
                echo " "; 
            $k++; 
        } 
        $k = 0; 
        echo "\n"; 
    } 
    $n--; 
    
    for ($i = $n; $i >= 1; $i--) 
    { 
        for ($j = 0; $j <= $n - $i; $j++)  
        { 
            echo " "; 
        } 
        $k = 0; 
        while ($k != (2 * $i - 1))  
        { 
            if ($k == 0 or $k == 2 * $i - 2) 
                echo "*"; 
            else
                echo " "; 
            $k++; 
        } 
        echo "\n"; 
    } 
} 
    echo printPattern(5);
?> 