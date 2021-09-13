<?php
$queryUrl = 'https://b24-x18kac.bitrix24.ru/rest/1/s16zvj6vs0r4h672/crm.lead.add.json';
$queryData = http_build_query(array(
    'fields' => array(
        'TITLE' => 'Название формы', 
        'NAME' => $_POST["name"],
        'PHONE' => array(
            array(
                "VALUE" => $_POST["phone"], 
                "VALUE_TYPE" => "WORK"
            )
            ),
        'EMAIL' => $_POST["email"]
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
)); 
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
curl_close($curl);
?>