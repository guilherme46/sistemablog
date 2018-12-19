<?php


function pdo()
{
    $db = new \PDO('mysql:host=localhost;dbname=bdsitebv;charset=utf8', 'root', '');
    return $db;
}