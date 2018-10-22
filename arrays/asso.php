<?php 
$arr = array('fname' => 'JONILYN',
'lname' => 'TEJADA',
'grade' => array(100,60,79,90,85)
);
$grades = $arr['grade'];
$len = count($grades);
$sum=0;
for($i=0;$i<$len;$i++){
	$sum = $grades[$i] + $sum;
}
$average = $sum/$len;
echo "average: $average";



?>