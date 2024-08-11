<?php

namespace App\Services\Repository;

class UserInterMediateLevel extends UserRange
{
    public function __construct () {
        $this->from = 85;
        $this->to = 90;
    }
    public function getUsersAccordingRange(): array
    {
        return [];
    }
}
