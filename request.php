<?php

    $data = array('api'=>'API123456',
	'student_id'=>'5839010027',
	'birthday'=>'22/08/2539');


    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/web_service/test6_teq/test6.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $exec = curl_exec($curl);
    curl_close($curl);

	echo $exec;

    //var_dump(json_decode($exec));
?>