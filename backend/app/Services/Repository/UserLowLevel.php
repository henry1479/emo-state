<?php

namespace App\Services\Repository;

class UserLowLevel extends UserRange
{

    public function __construct () {
        $this->from = 0;
        $this->to = 84;
    }

    public function getUsersAccordingRange(): array
    {
        return [];
    }
}
