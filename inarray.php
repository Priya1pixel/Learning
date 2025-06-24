<?php
function compare($a,$b){if($a===$b){return 0;}}
$a1=array("a"=>"green","b"=>"red","C"=>"purple");
$a2=array("c"=>"red","e"=>"purple","d"=>"yellow");
$newarray=array_diff_uassoc($a1,$a2,"compare");
echo"<pre>";
print_r($newarray);
echo"</pre>";

?>