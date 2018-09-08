<?php
// comment php
/*
*comment nhiều dòng
*/
$text = "hello word";
echo "<div style = 'text-align:center;font-size:50px'>". $text . "</div>";
$firstname = 'Thăng';
echo $firstname;

function MyFunction(){
	echo "<br>";
	$a =  5;
	return $a;
}
echo MyFunction();
function mySum($a, $b){
	return $a + $b;
}
	echo "<br>";
	echo mySum(5, 6);
	echo "<br>";
	$tong = mySum(122, 5); 
	if ($tong %2 == 0) {
		 echo "tổng số này là chẳn";
	}else if ($tong %3 == 0){
		echo "tổng số là lẽ và chia hết cho 3";
	}else{
		echo "tổng số là lẽ";
	}
	echo "<br>";
	$n = 2;
	switch ($n) {
		case '1':
		case '3':
		case '5':
		case '7':
		case '8':
		case '10':
		case '12':
			echo "tháng $n có 31 ngày";
			break;
		case '4':
		case '6':
		case '9':
		case '11':
			echo "tháng $n có 30 ngày";
			break;
		case '2':
			echo "năm nhuận tháng $n có 29 ngày <br>
			 tháng $n có 28 ngày nếu năm không nhuận";
			break;
		
		default:
			echo "số $n không phải là tháng";
			break;
	}
	//------------------------------
	echo "<br><br>";
	echo "bài tập 4 <br>";
	$dv = 0;
	if ($tong < 1000 ) {
		echo "tổng là $tong <br>";
		$dv = $tong % 10;
			echo "giá trị hàng đơn vị là $dv <br>";
		if ($dv %2 == 0) {
			echo "giá trị đơn vị là chẵn <br>";
		}else if($dv %3 == 0){
			echo "đơn vị là lẽ và chia hết cho 3 <br>";
		}else{
			echo "đơn vị là lẻ";
		}
	}
?>
<!-- <br/>
echo "hello word" -->
