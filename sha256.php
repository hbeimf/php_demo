<?php

$data = "hello world !!";
$encode = hash("sha256", $data, true);

echo base64_encode($encode);

echo "\n";
