<?php
foreach(array('HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED', 'HTTP_CLIENT_IP', 'REMOTE_ADDR') as $key) {
    if(array_key_exists($key, $_SERVER) === true && filter_var($_SERVER[$key], FILTER_VALIDATE_IP)) {
        echo $_SERVER[$key];
        break;
    }
}
?>
