<?php

namespace App\User;

use App\Contracts\RepositoryInterface;
use App\Database\Mock;

class Repository implements RepositoryInterface
{
    private array $data;
    private $datastore;

    /**
     * Repository constructor.
     */
    public function __construct()
    {
        // 疑似データストア
        $this->datastore = new Mock();
        // 疑似永続データ
        $this->data = [
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
        ];
    }

    /**
     * @inheritDoc
     */
    public function getById(string $id, callable $entityFactory)
    {
        foreach ($this->data as $data) {
            if ($data['id'] === $id) {
                // 疑似的なデータ読み込みsleep
                $this->datastore->IOWait();
                return $entityFactory($data);
            }
        }
        return $entityFactory([]);
    }

    /**
     * @inheritDoc
     */
    public function getAll(callable $entityFactory)
    {
        $result = [];
        foreach ($this->data as $data) {
            // 疑似的なデータ読み込みsleep
            $this->datastore->IOWait();
            $result[] = $entityFactory($data);
        }

        return $result;
    }
}