<?php
$env = json_decode(file_get_contents("/app/conf/environment.json"), true);
print_r($env);
?>
