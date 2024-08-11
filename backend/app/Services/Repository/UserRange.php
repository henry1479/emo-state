<?php

namespace App\Services\Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

abstract class UserRange
{

    protected int $from;
    protected int $to;

    public function createQuery(array $params): float
    {
        $result = User::query()
            ->select("*")
            ->where($params)
            ->whereBetween("emotional_intellect", [$this->from, $this->to])
            ->avg("emotional_intellect");
        return round($result, 2);
    }


    public function createBestUsersQuery(array $params = []): Collection
    {
        $result = User::query()
            ->select($params["field"])
            ->whereBetween("emotional_intellect", [$this->from, $this->to])
            ->orderBy("emotional_intellect", "desc")
            ->offset($params['offset'] ?? 0)
            ->limit(1)
            ->get()
            ->map(fn (User $user) => $user->toArray()[$params["field"]]);


        return $result;

    }


}
