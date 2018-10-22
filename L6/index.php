<?php 
$var = array(1,2,3,4,5,6,7,8,9,10);
//echo $var[5];
/**
for($i=0;$i<count($var);$i++){
	echo "$var[$i]" . "<br/>";
}
**/
$countries=array('a' => 'argentina',
	'b'=>'bolivia',
	'c'=>'china',
	'd'=>'denmark');
foreach($var as $item){
	echo $item . "<br/>";
}
foreach($countries as $country){
	echo "$country <br>";
}
foreach($countries as $index => $country){
	echo "$index: $country <br/>";
}
echo "iterator sample<br/>";
$iterator = new ArrayIterator($countries);
$iterator->rewind();
while($iterator->valid()){
	echo $iterator->key(). ": " . $iterator->current() . "<br/>";
	$iterator->next();
}





?>