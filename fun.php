<?php
$cars=["BMW","TOYOTA","MERCEDES","SWIFT","VOLVO","OPEL","HONDA"];
$newArray=array_chunk($cars,3);
echo"<pre>";
print_r($newArray);
echo"</pre>";
?>