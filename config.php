<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '392783478566949',
  'app_secret'     => '24697fbd8d553cf343ad2d34dfe5ff3d',
  'default_graph_version'  => 'v8.0'
]);

?>
