<?php

namespace App\Todo;

class Entity {
    private string $id;
    private string $title;
    private string $assigneeId;
    private string $content;
    private \DateTimeImmutable $createdAt;
    private \DateTimeImmutable $dueDate;

    public function __construct(string $title, string $assigneeId, string $content, \DateTimeImmutable $dueDate)
    {
        $this->id = uniqid('', true);
        $this->title = $title;
        $this->content = $content;
        $this->assigneeId = $assigneeId;
        $this->createdAt = new \DateTimeImmutable('now');
        $this->dueDate = $dueDate;
    }

    /**
     * 永続装置からデータを再構成する
     * @param array $data
     * @return Entity
     */
    public static function restore(array $data)
    {
        $entity = new self(
            $data['title'] ?? '',
            $data['assigneeId'] ?? '',
            $data['content'] ?? '',
            $data['dueDate'] ?? ''
        );
        $entity->id = $data['id'];
        $entity->createdAt = $data['createdAt'];

        return $entity;
    }

    /**
     * assigneeのIDを取得
     * @return string
     */
    public function getAssigneeId()
    {
        return $this->assigneeId;
    }

    /**
     * entityを出力する
     */
    public function printEntity()
    {
        echo 'id: ' . $this->id . '<br>';
        echo 'title: ' . $this->title . '<br>';
        echo 'assigneeId: ' . $this->assigneeId . '<br>';
        echo 'content: ' . $this->content . '<br>';
        echo 'createdAt: ' . $this->createdAt->format('Y-m-d H:i:s') . '<br>';
        echo 'dueDate: ' . $this->dueDate->format('Y-m-d') . '<br>';
    }
}