<?php
require_once __DIR__.'/vendor/autoload.php';

use App\Todo\Repository as TodoRepository;
use App\User\Repository as UserRepository;

$todoRepo = new TodoRepository();

$todos = $todoRepo->getAll(['\App\Todo\Entity', 'restore']);
$userIds = [];
// $todosからuserリストを取得
foreach ($todos as $todo) {
    $userIds[] = $todo->getAssigneeId();
}
// 重複を省く
$userIds = array_unique($userIds);

$userRepo = new UserRepository();
// userを一括で取得する
$users = $userRepo->getByIds($userIds, ['\App\User\Entity', 'restore']);

foreach ($todos as $todo) {
    $todo->printEntity();
    // todoのassigneeをもとにuserを判定
    $user = $users[$todo->getAssigneeId()];
    $user->printEntity();
    echo '<hr>';
}