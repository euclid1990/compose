<?php
    echo '<h1>Running a multi-container application using Docker Compose</h1>';
    $link = mysql_connect('mariadb', 'guest', '123456Aa@');
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Database connected successfully';
    mysql_close($link);
?>