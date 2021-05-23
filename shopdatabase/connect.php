


<?php
mysql_connect("127.0.0.1", "root", "")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("ITdata")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
?>


