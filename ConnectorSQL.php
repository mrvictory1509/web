<?php

$connection = pg_connect("host=ec2-174-129-253-157.compute-1.amazonaws.com port=5432 dbname=ddt4kf2tt55npb user=tvipgwpndvwuxg
 password=25121c48dbc1ca27983d208cd335239df3cefcba63f5d9663dbb657285249d83");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
