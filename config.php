<?php
session_start();
ob_start();
try {

    $db = new PDO('mysql:host=localhost; dbname=cv_project; charset=utf8', 'root', ''); //xamp parola kısmı boştur.
} catch (Exception $e) {

    echo "Connection Error: ";
    echo $e->getMessage(); // Hatayı getirir.
}
