<?php

namespace App\Services\Repository;

class UserAboveMediateLevel extends UserRange
{

    public function __construct () {
        $this->from = 95;
        $this->to = 105;
    }
    public function getUsersAccordingRange(): array
    {
        return [];
    }
}
