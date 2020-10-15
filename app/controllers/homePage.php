<?php
$config = include '../config/config.php';

use App\QueryBuilder;

$query = new QueryBuilder();

//    SELECT
//$res = $query->getAll('posts');


//    INSERT
//$query->insert([
//    'title' => 'Hi men how are you ?'
//], 'posts');


//   UPDATE
//$query->update([
//    'title' => 'Hi im new post go go go'
//], 'posts',1);


// DELETE
//$query->delete('posts', 2);

// GET ONE
$res = $query->getOne('posts', 3);

dd($res);


