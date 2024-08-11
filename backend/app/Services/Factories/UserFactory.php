<?php

namespace App\Services\Factories;

use App\Services\Repository\UserAboveMediateLevel;
use App\Services\Repository\UserHighLevel;
use App\Services\Repository\UserInterMediateLevel;
use App\Services\Repository\UserLowLevel;
use App\Services\Repository\UserMiddleLevel;

abstract class UserFactory
{
    protected function getUserAllRanges(array $params = []): array
    {

        return [
                (new UserLowLevel)->createQuery($params),
                (new UserInterMediateLevel())->createQuery($params),
                (new UserMiddleLevel())->createQuery($params),
                (new UserAboveMediateLevel())->createQuery($params),
                (new UserHighLevel())->createQuery($params)
        ];



    }

    abstract public function getTotalResult() : array;
}
