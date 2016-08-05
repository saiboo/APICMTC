<?php

    $id = $_GET['id'];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/web_service/test6_teq/test6.json'.$id .'.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    

    $exec = curl_exec($curl);
    curl_close($curl);

	//print_r(json_decode ($exec));
	$data = json_decode($exec);

	foreach ($data as $key => $value)
	{
		echo 'Id - '. $value->_id;
		echo '<br>';
		echo 'RECV - '. $value->_rev;
		echo '<br>';
		echo 'ระยะเวลา - '. $value->Period;
		echo '<br>';
		echo 'จำนวนที่รับมา - '. $value->Amount;
		echo '<br>';
		echo 'เมื่อปี - '. $value->Year;
		echo '<hr>';
		
		




		
	}

    //var_dump(json_decode($exec));

?>
<a href="request_cmtc.php">กลับหน้าแรก</a>