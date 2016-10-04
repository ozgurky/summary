<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Ozgurky\Summary\Summary;

$text = 'Shure we want to do a simple test to verify if our class is working well. You can create a new project and "paste" your classes inside it or test inside your own project, wich is better and easier. We\'re creating a Composer project so we must have Composer files installed inside our projects. So, install it running "composer install" inside your root dir:';

echo Summary::summarize($text);
