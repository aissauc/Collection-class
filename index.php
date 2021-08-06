<?php

require_once 'Collection.php';

$db = new PDO('mysql:host=localhost;dbname=codecourse', 'root', '');

$a = $db->query("SELECT * FROM articles");
$a = $a->fetchAll(PDO::FETCH_OBJ);

$b = $db->query("SELECT * FROM articles");
$b = $b->fetchAll(PDO::FETCH_OBJ);

$articles = new Collection($a);
$moreArticles = new Collection($articles);

$moreArticles = $moreArticles->merge($articles);

var_dump($moreArticles->all());
