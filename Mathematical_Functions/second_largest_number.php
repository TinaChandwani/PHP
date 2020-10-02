
<?php 
// PHP program to find second largest  
// element in an array 
  
// Function to print the  
// second largest elements 
function print2largest($arr, $arr_size) 
{ 
  
    // There should be atleast  
    // two elements  
    if ($arr_size < 2) 
    { 
        echo(" Invalid Input "); 
        return; 
    } 
  
    $first = $second = PHP_INT_MIN; 
    for ($i = 0; $i < $arr_size ; $i++) 
    { 
          
        // If current element is 
        // smaller than first 
        // then update both  
        // first and second  
        if ($arr[$i] > $first) 
        { 
            $second = $first; 
            $first = $arr[$i]; 
        } 
  
        // If arr[i] is in  
        // between first and  
        // second then update  
        // second  
        else if ($arr[$i] > $second && 
                 $arr[$i] != $first) 
            $second = $arr[$i]; 
    } 
    if ($second == PHP_INT_MIN) 
        echo("There is no second largest element\n"); 
    else
        echo("The second largest element is " . $second . "\n"); 
} 
  
// Driver Code 
$arr = array(12, 35, 1, 10, 34, 1); 
$n = sizeof($arr); 
print2largest($arr, $n); 
?> 
