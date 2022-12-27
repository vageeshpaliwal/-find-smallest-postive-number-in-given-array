<?php
$arr=array(3,4,-1,1);
$size=count($arr);
sort($arr);
// sort array will be [-8,-1,0,2,1,3,4,5,5]
echo '<pre>';
print_r($arr);
$min=1;
for($i=0;$i<$size;$i++)
{
    if($arr[$i]>$min)
    break;
    if($arr[$i]==$min)
    $min=$min+1;
}
echo $min;

?>