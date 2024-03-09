<?php

use Core\App;
use Models\Session;

$session = App::resolve(Session::class);


require view("index.view.php");
