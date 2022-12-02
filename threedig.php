<?php
   // possible combination of 3 digit numbers
   
    function threeDigCom($num1,$num2,$num3)
    {
        $arr = array();
       
        $arr[]=$num1.$num2.$num3;
        $arr[]=$num1.$num3.$num2;
        $arr[]=$num2.$num1.$num3;
            
      
        return $arr;
    }
    $num1 = readline("Enter the number1: ");
    $num2 = readline("Enter the number2: ");
    $num3 = readline("Enter the number3: ");
    print_r(threeDigCom($num1,$num2,$num3));