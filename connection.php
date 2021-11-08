<?php 
    $conn = pg_connect('localhost', 'root', '', 'giau123')
            or die("Can not connect database".pg_connect_error());
?>