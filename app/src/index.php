<?php
require_once __DIR__.'/vendor/autoload.php';

use App\Todo\Repository as TodoRepository;
use App\User\Repository as UserRepository;

$todoRepo = new TodoRepository();

$todos = $todoRepo->getAll(['\App\Todo\Entity', 'restore']);

foreach ($todos as $todo) {
    $userRepo = new UserRepository();
    $user = $userRepo->getById($todo->getAssigneeId(), ['\App\User\Entity', 'restore']);
    $todo->printEntity();
    $user->printEntity();
    echo '<hr>';
}