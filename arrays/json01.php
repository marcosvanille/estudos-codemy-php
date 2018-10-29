<?php

$json ='
    [{"nome":"joao","idade":20},{"nome":"glacio ","idade":25}]';

    $data = json_decode($json,true);

    var_dump($data);