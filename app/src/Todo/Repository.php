<?php

namespace App\Todo;

use App\Contracts\Infrastructures\canDatabaseAccess;
use App\Contracts\RepositoryInterface;
use App\Database\Mock;

class Repository implements RepositoryInterface
{
    private $dbDriver;

    /**
     * Repository constructor.
     */
    public function __construct(canDatabaseAccess $dbDriver = null)
    {
        // 疑似データストア
        $this->dbDriver = $dbDriver ?? new Mock();
    }

    /**
     * @inheritDoc
     */
    public function getById(string $id, callable $entityFactory)
    {
        foreach ($this->dbDriver->select('todo') as $data) {
            if ($data['id'] === $id) {
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
        // 疑似的なデータ読み込みsleep
        foreach ($this->dbDriver->select('todo') as $data) {
            $result[] = $entityFactory($data);
        }

        return $result;
    }
}