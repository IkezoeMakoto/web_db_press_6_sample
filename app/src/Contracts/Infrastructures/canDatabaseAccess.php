<?php

namespace App\Contracts\Infrastructures;

interface canDatabaseAccess {
    public function select(string $from): array;
}
