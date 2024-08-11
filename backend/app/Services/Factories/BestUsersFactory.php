<?php

namespace App\Services\Factories;

use App\Services\Repository\UserAboveMediateLevel;
use App\Services\Repository\UserHighLevel;
use App\Services\Repository\UserInterMediateLevel;
use App\Services\Repository\UserLowLevel;
use App\Services\Repository\UserMiddleLevel;


class BestUsersFactory extends UserFactory
{

    protected function getUserAllRanges(array $params = []): array
    {
        return [
            (new UserLowLevel)->createBestUsersQuery($params),
            (new UserInterMediateLevel())->createBestUsersQuery($params),
            (new UserMiddleLevel())->createBestUsersQuery($params),
            (new UserAboveMediateLevel())->createBestUsersQuery($params),
            (new UserHighLevel())->createBestUsersQuery($params),
        ];

    }

    public function getTotalResult(): array

    {
        $names = $this->serviceForTotalResult("name");
        $intellect = $this->serviceForTotalResult("emotional_intellect");
        return ["e_i" => $intellect, "name" => $names];
    }

    private function serviceForTotalResult( string $field):array
    {
        $result = [];
        for ($i = 1; $i <= 3; $i++) {
            $result ["{$i}-ое место"] = collect([
                $this->getUserAllRanges(["offset" => $i - 1, "field" => $field])[0],
                $this->getUserAllRanges(["offset" => $i - 1, "field" => $field])[1],
                $this->getUserAllRanges(["offset" => $i - 1, "field" => $field])[2],
                $this->getUserAllRanges(["offset" => $i - 1, "field" => $field])[3],
                $this->getUserAllRanges(["offset" => $i - 1, "field" => $field])[4],
            ])->flatten(3)->toArray();
        }
        return $result;
    }
}
