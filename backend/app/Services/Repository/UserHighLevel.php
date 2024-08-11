<?php

namespace App\Services\Repository;

class UserHighLevel extends UserRange
{

    public function __construct ()
    {
        $this->from = 106;
        $this->to = 200;
    }
    public function getUsersAccordingRange(): array
    {
        return [];
    }
}
