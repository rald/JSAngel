<?php

header("content-type: text/html");

$obj = json_decode(file_get_contents('php://input'));

chmod("angel.rive",0777);

$f = fopen("angel.rive", "w+") or die("fopen failed");

fwrite($f, $obj->data);

fclose($f);

echo "success";

?>
