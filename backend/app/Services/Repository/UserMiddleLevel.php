<?php

namespace App\Services\Repository;

class UserMiddleLevel extends UserRange
{
    public function __construct () {
        $this->from = 91;
        $this->to = 94;
    }
    public function getUsersAccordingRange(): array
    {
        return [];
    }

}
