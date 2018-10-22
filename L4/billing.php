<?php 
$prevMeter = $_POST['prevMeter'];
$currMeter = $_POST['currMeter'];
$customerType = $_POST['customerType'];
$wattage = $currMeter - $prevMeter;

switch ($customerType) {
	case 1:
		$cCharge = $wattage * 0.1;
		$gCharge = $wattage * 0.01;
		$tCharge = $wattage * 0.0012;
		$dCharge = $wattage * 0.01;
		$total = $cCharge + $gCharge + $tCharge + $dCharge;
		$sTax = $total * 0.1;
		$bill = $total + $sTax;
		break;
	case 2:
		$cCharge = $wattage * 0.2;
		$gCharge = $wattage * 0.03;
		$tCharge = $wattage * 0.0012;
		$dCharge = $wattage * 0.01;
		$total = $cCharge + $gCharge + $tCharge + $dCharge;
		$sTax = $total * 0.05;
		$bill = $total + $sTax;
		break;
	case 3:
		$cCharge = $wattage * 0.15;
		$gCharge = $wattage * 0.05;
		$tCharge = $wattage * 0.0012;
		$dCharge = $wattage * 0.02;
		$total = $cCharge + $gCharge + $tCharge + $dCharge;
		$sTax = $total * 0.05;
		$bill = $total + $sTax;
		break;
	case 4:
		$cCharge = $wattage * 0.05;
		$gCharge = $wattage * 0.05;
		$tCharge = $wattage * 0.0012;
		$dCharge = $wattage * 0.03;
		$total = $cCharge + $gCharge + $tCharge + $dCharge;
		$bill = $total;
		break;
}
echo "The bill is: $bill";
?>