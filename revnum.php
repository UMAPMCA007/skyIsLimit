<?php 


function revnum($range1,$range2)
{
    $arr = array();
    for($i=$range1;$i<=$range2;$i++)
    {
        $rev = strrev($i);
        if($i == $rev)
        {
            $arr[] = $i;
        }
    }
    return $arr;
}
// enter the range in console
$range1 = readline("Enter the range1: ");
$range2 = readline("Enter the range2: ");
print_r(revnum($range1,$range2));

?>