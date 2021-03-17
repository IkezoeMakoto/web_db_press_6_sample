<?php

namespace App\User;

class Entity {
    private string $id;
    private string $name;
    private \DateTimeImmutable $createdAt;

    public function __construct(string $name)
    {
        $this->id = uniqid('', true);
        $this->name = $name;
        $this->createdAt = new \DateTimeImmutable('now');
    }

    /**
     * 永続装置からデータを再構成する
     * @param array $data
     * @return Entity
     */
    public static function restore(array $data)
    {
        $entity = new self(
            $data['name'] ?? ''
        );
        $entity->id = $data['id'];
        $entity->createdAt = $data['createdAt'];

        return $entity;
    }

    /**
     * @param string $id
     * @return bool
     */
    public function isSameId(string $id): bool
    {
        return $this->id === $id;
    }
    /**
     * entityを出力する
     */
    public function printEntity()
    {
        echo 'name: ' . $this->name . '<br>';
    }
}