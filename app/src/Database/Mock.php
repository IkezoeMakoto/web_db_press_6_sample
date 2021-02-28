<?php

namespace App\Database;

class Mock
{
    public function IOWait()
    {
        usleep(random_int(100, 1000));
    }
}