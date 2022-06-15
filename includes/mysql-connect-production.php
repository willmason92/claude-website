<?php

  $host_name = 'db5007345229.hosting-data.io';
  $database = 'dbs6051396';
  $user_name = 'dbu1359026';
  $password = 'Pass1704%';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }