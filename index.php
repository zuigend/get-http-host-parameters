<?php
    $parameters = array(
        'requestTime' => $_SERVER["REQUEST_TIME"],
        'globalIpAddress' => $_SERVER["HTTP_X_FORWARDED_FOR"],
        'localIpAddress' => $_SERVER["REMOTE_ADDR"],
        'hostIpAddress' => $_SERVER["REMOTE_HOST"],
        'remoteUser' => $_SERVER["REMOTE_USER"]
    );
    echo json_encode($parameters);
?>