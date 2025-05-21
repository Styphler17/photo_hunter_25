<?php

try {
    $connexion = new PDO('mysql:host=' . 'localhost' . ';dbname=' . 'photo_hunter', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage;
}
