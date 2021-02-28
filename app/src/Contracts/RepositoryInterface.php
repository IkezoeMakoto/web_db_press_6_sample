<?php

namespace App\Contracts;

interface RepositoryInterface
{
    /**
     * idをもとにデータを永続化装置から取得してentityに変換して返す
     * @param string $id
     * @param callable $entityFactory entityを構成するための関数
     * @return mixed
     */
    public function getById(string $id, callable $entityFactory);

    /**
     * すべてのデータを永続化装置から取得してentityに変換して返す
     * @param callable $entityFactory
     * @return mixed
     */
    public function getAll(callable $entityFactory);
}