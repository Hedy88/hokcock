<?php
        $db_connection = new mysqli($mysql_data['db_host'], $mysql_data['db_user'], $mysql_data['db_pass'], $mysql_data['db_name']);
         
        if ($db_connection->connect_error) {
          die("Error: DB Connection Failed. If you are a user, Please report this to the HokCock Discord");
        }
?>