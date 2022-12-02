<?php
 function revtext($text)
 {
        $revtext=strrev($text);
        return $revtext;

 }
 $text = readline("Enter the text: ");
 echo revtext($text);
 
 
 ?>