<?php

class User {
    private string $id;
    private string $name;
    public function __construct(string $name) {
        $this->id = uniqid('', true);
        $this->name = $name;
    }
}
$user = new User('山田太郎');
var_dump($user);