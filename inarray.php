<?php
$a=array("Priya"=>"30",
"Pooja"=>"34","Snehal"=>"40");
$newArray=array_change_key_case($a,CASE_UPPER);
echo"<pre>";
print_r($newArray);
echo"</pre>";
?>