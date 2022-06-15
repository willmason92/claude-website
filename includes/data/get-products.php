<?php

$query = "SELECT * FROM products"; //You don't need a ; like you do in SQL
$products = $mysqli->query($query);

$product_path = 'assets/img/claude/';
