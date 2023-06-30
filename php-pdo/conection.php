<?php
$databasePath = __DIR__ . '/sqlite:banco.sqlite';
$pdo = new PDO('sqlite:'.$databasePath);

echo 'Success!';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');

$student = new Student(null, 'Vinicius Dias', new \DateTimeImmutable('1997-10-15'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

echo $sqlInsert;