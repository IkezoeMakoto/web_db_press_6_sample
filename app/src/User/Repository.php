<?php

namespace App\User;

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
        foreach ($this->dbDriver->select('users') as $data) {
            if ($data['id'] === $id) {
                return $entityFactory($data);
            }
        }
        return $entityFactory([]);
    }

    public function getByIds(array $ids, callable $entityFactory)
    {
        $results = [];
        $users = $this->dbDriver->select('users');
        foreach ($users as $user) {
            if (in_array($user['id'], $ids)) {
                $results[$user['id']] = $entityFactory($user);
            }
        }
        return $results;
    }

    /**
     * @inheritDoc
     */
    public function getAll(callable $entityFactory)
    {
        $result = [];
        foreach ($this->dbDriver->select('users') as $data) {
            $result[] = $entityFactory($data);
        }

        return $result;
    }
}