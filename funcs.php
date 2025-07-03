<?php
function db_conn()
{
    try {
        return new PDO('mysql:dbname=gs_db_class;charset=utf8;host=localhost', 'root', '');
    } catch (PDOException $e) {
        exit('DBConnectError: ' . $e->getMessage());
    }
}
