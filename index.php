<?php

error_reporting( E_ALL );

require_once 'vendor/autoload.php';

$app = OpenCafe\Codalizer\MainLoader::render(
  (array)json_decode( file_get_contents('FormBuilder.json', true))
);
