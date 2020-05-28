<?php
    $parameters = array(
        'requestTime' => $_SERVER["REQUEST_TIME"],
        'globalIpAddress' => $_SERVER["HTTP_X_FORWARDED_FOR"],
        'localIpAddress' => $_SERVER["REMOTE_ADDR"]
    );
    echo json_encode($parameters);
?>