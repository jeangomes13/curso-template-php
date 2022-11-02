<?php

$data = ['name' => 'Jean', 'age' => 25];
ob_start();

echo 'Home';

extract($data);

require 'home.php';

$content = ob_get_contents();

ob_end_clean();

var_dump('content: ', $content);
