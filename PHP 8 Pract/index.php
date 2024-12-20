<?php
require 'vendor/autoload.php';

use App\FileHandler;

$fileHandler = new FileHandler();
$filename = 'src/text.txt';
$content = $fileHandler->readFile($filename);

echo "Содержимое:\n";
echo $content;