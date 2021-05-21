<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    Vinicius Dias,
    new \DateTimeImmutable()
);

echo $student->age();