<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . './banco.sqlite';
$pdo = new PDO("sqlite:" . $databasePath);

$student = new Student(null, "Yuri Machado", new \DateTimeImmutable('1995-10-04'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInsert));

?>