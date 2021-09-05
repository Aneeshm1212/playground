<?php

include '../conn.php';

$sql=$conn->query("select * from customer");

$result=array();

echo $sql;

?> 