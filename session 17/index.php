<?php
	$arr = [];//khai báo 1 mảng
	$arr =['Thang', 'Phan', 'Minh', 'Suong', 'Y'];
	$arr1 =['Thang'=>'Thang', 'Phan'=>'Phan', 'Minh'=>'Minh', 'Suong'=>'Suong','Y'=>'Y'];
	$arr2 =['Thang'=>'Thang', 'Phan'=>'Phan', 'Minh'=>'Minh', 'Suong'=>'Suong','Y'=>'Y'];
	// var_dump($arr);
	// var_dump($arr1);
	echo "////<br>";
	foreach ($arr as $key => $value) {
		echo $key.','.$value;
		echo "<br>";
	}
	echo "////<br>";
	foreach ($arr1 as $key => $value) {
		echo $key.','.$value;
		echo "<br>";
	}
	array_push($arr, 'tai');
	var_dump($arr);
	echo "<br>";
	array_pop($arr1);
	var_dump($arr1);
	echo "<br>";
	unset($arr2['Suong']);
	var_dump($arr2);
	echo "<br>";
	$arr3 = array_merge($arr, $arr1);
	var_dump($arr3);
	echo "<br>";
	foreach ($arr3 as $key => $value) {
		echo $key. ','.$value;
		echo "<br>";
	}
	echo "/////////<br>";
	$myClass = array();
	array_push($myClass, 'tuan');
	//var_dump($myClass);
	echo "<br>";
	$arrMyClass = array(
		'nhuy' => array(
				'name' => 'Nhy y',
				'age'  => 20,
				'gender' => 'female',
				'phone' => '0988...'
			),
		'tuan' => array(
				'name' => 'Tuan',
				'age'  => 21,
				'gender' => 'male',
				'phone' => '0934...'
			),
		'tai'=> array(
				'name' => 'Tai',
				'age'  => 23,
				'gender' => 'male',
				'phone' => '0905...'
			)
		);
	var_dump($arrMyClass);

	echo "<br><br>";
	function changeGenderVi($gender){
		return $gender == 'male'?"Nam":"Nu";
		// if ($gender == 'male') {
		// 	return "Nam";
		// }else {
		// 	return "Nu";
		// }
	}
	function listClass($arrMyClass) {
		$i = 1;
		foreach ($arrMyClass as $key => $value) {
			echo $i.' - '.$value['name'].' - '.$value['age'].' tuoi'.' - '.changeGenderVi($value['gender']).' - '.$value['phone'];
			echo "<br>";
			$i++;
		}
	}
	listClass($arrMyClass);
	// 1 - Nhy y - 20 tuoi - female - 0988...
	// 2 - Tuan - 21 tuoi - male - 0934...
	// 3 - Tai - 23 tuoi - male - 0905...
	$arrNewMember = array(
		'vuong'=> array(
				'name' => 'Vuong',
				'age'  => 25,
				'gender' => 'male',
				'phone' => '0978...'
			)
		);
	$arrNewClass = array_merge($arrMyClass, $arrNewMember);
	//var_dump($arrNewClass);
	echo "<br><br>";
	listClass($arrNewClass);
	echo $arrNewClass['nhuy']['phone'];
	$arrNewClass['nhuy']['phone'] = '0168...';
	echo "<br><br>";
	listClass($arrNewClass);
	
	unset($arrNewClass['tai']);
	echo "<br><br>";
	listClass($arrNewClass);

?>