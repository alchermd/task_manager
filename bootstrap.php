<?php
require_once 'vendor/autoload.php';

use App\Database\Connection;
use App\Database\Query;
use App\Helpers\Logger;

$config = require 'config.php';

$db = (new Connection(new Logger))->make($config['database']);
$query = new Query($db, new Logger);
