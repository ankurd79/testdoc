<?php

$str="nobonita paul";
//echo substr($str,-2);
//echo strrev($str);

$d=array(1,2,3,5,6,78,56,90,1);
array_push($d,100,200,300); //  vvv
//print_r($d);

array_pop($d);
//print_r($d);

$sentence="1,2,3";
$slen=strlen($sentence);

for($i=0;$i<$slen;$i++)
{
	$c=$sentence[$i];
	if(ctype_alpha($c)) $alphas++;
	if(ctype_digit($c)) $digits++;
	if(ctype_space($c)) $space++;


}

//echo $alphas ." alphabets";
//echo $digits ." digits";

$strname="nobonita";
$mname=strlen($strname);


for($i=$mname;$i>=0;$i--)
{
	$strname[$i];
}

$numbers=range(1,10);
//print_r($numbers);
//echo implode('+',$numbers).'='.array_sum($numbers);


$mystring="1,2,3,5,6";
$slen=strlen($mystring);

for($d=0;$d<$slen;$d++)
{
	$c=$mystring[$d];
	if(ctype_digit($c)) 
		$asd=$c=+$c;
}



$p="Today is very hot day. Temparature is 40 degrees. Humidity level is 67 percent. It is only 10 AM";
$ln=strlen($p);
preg_match_all('/[0-9]+/',$p,$matches);
//print_r($matches);


$str='12k';
$str2=20;

$str+$str2;

$a=array("volvo","maruti","landrover","bmw");
//print_r($a);
$carstring=implode(",",$a);


$s="color of her cherry is red";
$d=explode(" ", $s);
echo $d[3];

//print_r($d);

foreach($d as $k=>$v)
{
	/*
	if($k==0)
	{
		echo strtoupper($v);
	}
	else
	{
		echo $v;
	}
	*/

	if($k%2==0)
	{
		echo strtoupper($v);
	}
	else
	{
		echo $v;
	}
}






/*
foreach($d as $data)
{
	ucfirst($data)." , ";

}
*/





$d=array(1,2,4,5,6,7,8);
$arrlen=sizeof($d);

for($i=$arrlen;$i>=0;$i--)
{
	echo $d[$i];
	echo '<br>';
}
 
 $object=new stdClass();
 foreach($d as $key=>$value){

	 $object->$key=$value;
	 //print_r($object);

 }


$array=[1=>[2,5=>[4,2],[7,8=>[3,6]],5],4];
print_r($array);

$arr=[];

array_walk_recursive($array, 
function($k){
	global $arr; 
	$arr[]=$k;
}
);
print_r($arr);




?>