<?php
session_start();

use Source\Core\Core;

require 'config.php';
require 'vendor/autoload.php';

$core = new Core;
$core->start();
