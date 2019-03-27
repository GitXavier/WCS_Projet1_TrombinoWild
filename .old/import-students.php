<?php

$arrayStudents = array();

$lines = file(__DIR__ . '/listStudents.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $listStudent => $data)
{
    $arrayStudents[$listStudent] = str_getcsv($data);
}

