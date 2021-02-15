<?php

require 'rutes/Router.php';
require 'rutes/Request.php';


//var_dump($_SERVER);

require Router::carregar('rutes.php')
    ->direct(Request::uri());

