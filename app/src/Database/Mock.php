<?php

namespace App\Database;

use App\Contracts\Infrastructures\canDatabaseAccess;

class Mock implements canDatabaseAccess
{
    private array $data;
    public function __construct()
    {
        $this->data = [
            'users' => [
                [
                    'id' => '603b33722d5233.84190225',
                    'name' => '山田太郎',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-01-30 19:00:00')
                ],
                [
                    'id' => '603b30e88f2051.05855572',
                    'name' => '佐藤花子',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-05 12:00:00'),
                ],
                [
                    'id' => '603b33722d5233.841902251',
                    'name' => '山田太郎1',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-01-30 19:00:00')
                ],
                [
                    'id' => '603b30e88f2051.058555721',
                    'name' => '佐藤花子1',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-05 12:00:00'),
                ],
                [
                    'id' => '603b33722d5233.841902252',
                    'name' => '山田太郎2',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-01-30 19:00:00')
                ],
                [
                    'id' => '603b30e88f2051.058555722',
                    'name' => '佐藤花子2',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-05 12:00:00'),
                ],
            ],
            'todo' => [
                [
                    'id' => '603b3464dcc111.74951946',
                    'title' => '執筆',
                    'content' => '原稿を完成させる',
                    'assigneeId' => '603b33722d5233.84190225',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-01 19:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b30da9bec14.67110921',
                    'title' => '掃除',
                    'content' => '部屋の掃除をする',
                    'assigneeId' => '603b30e88f2051.05855572',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-25 12:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-04')
                ],
                [
                    'id' => '603b330df0ff38.37423489',
                    'title' => '買い物',
                    'content' => '一週間分の食材をスーパーで買う',
                    'assigneeId' => '603b30e88f2051.05855572',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-26 9:30:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b33552ef0c5.45027018',
                    'title' => 'PCの修理',
                    'content' => '壊れたPCの修理を依頼する',
                    'assigneeId' => '603b33722d5233.84190225',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-28 18:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b3464dcc111.74951946',
                    'title' => '執筆',
                    'content' => '原稿を完成させる',
                    'assigneeId' => '603b33722d5233.841902251',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-01 19:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b30da9bec14.67110921',
                    'title' => '掃除',
                    'content' => '部屋の掃除をする',
                    'assigneeId' => '603b30e88f2051.058555721',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-25 12:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-04')
                ],
                [
                    'id' => '603b330df0ff38.37423489',
                    'title' => '買い物',
                    'content' => '一週間分の食材をスーパーで買う',
                    'assigneeId' => '603b30e88f2051.058555721',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-26 9:30:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b33552ef0c5.45027018',
                    'title' => 'PCの修理',
                    'content' => '壊れたPCの修理を依頼する',
                    'assigneeId' => '603b33722d5233.841902251',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-28 18:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b3464dcc111.74951946',
                    'title' => '執筆',
                    'content' => '原稿を完成させる',
                    'assigneeId' => '603b33722d5233.841902252',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-01 19:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b30da9bec14.67110921',
                    'title' => '掃除',
                    'content' => '部屋の掃除をする',
                    'assigneeId' => '603b30e88f2051.058555722',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-25 12:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-04')
                ],
                [
                    'id' => '603b330df0ff38.37423489',
                    'title' => '買い物',
                    'content' => '一週間分の食材をスーパーで買う',
                    'assigneeId' => '603b30e88f2051.058555722',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-26 9:30:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b33552ef0c5.45027018',
                    'title' => 'PCの修理',
                    'content' => '壊れたPCの修理を依頼する',
                    'assigneeId' => '603b33722d5233.841902252',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-28 18:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b3464dcc111.74951946',
                    'title' => '執筆',
                    'content' => '原稿を完成させる',
                    'assigneeId' => '603b33722d5233.841902252',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-01 19:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b30da9bec14.67110921',
                    'title' => '掃除',
                    'content' => '部屋の掃除をする',
                    'assigneeId' => '603b30e88f2051.058555722',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-25 12:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-04')
                ],
                [
                    'id' => '603b330df0ff38.37423489',
                    'title' => '買い物',
                    'content' => '一週間分の食材をスーパーで買う',
                    'assigneeId' => '603b30e88f2051.058555722',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-26 9:30:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
                [
                    'id' => '603b33552ef0c5.45027018',
                    'title' => 'PCの修理',
                    'content' => '壊れたPCの修理を依頼する',
                    'assigneeId' => '603b33722d5233.841902252',
                    'createdAt' => \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-02-28 18:00:00'),
                    'dueDate' => \DateTimeImmutable::createFromFormat('Y-m-d', '2021-03-01')
                ],
            ]
        ];
    }

    /**
     * @throws \Exception
     */
    private function IOWait()
    {
        // 疑似的なデータ読み込みsleep
        usleep(random_int(1000, 1000));
    }

    /**
     * @param string $from
     * @return array
     */
    public function select(string $from):array {
        $this->IOWait();
        return $this->data[$from] ?? [];
    }
}