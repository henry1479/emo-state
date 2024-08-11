<?php

namespace App\Http\Controllers;


use App\Services\Factories\AgeUserFactory;
use App\Services\Factories\BestUsersFactory;
use App\Services\Factories\CityUserFactory;
use App\Services\Factories\GenderUserFactory;
use Illuminate\Http\JsonResponse;


class UserController extends Controller
{
    public function getGenderUsers(): JsonResponse
    {

        $genderResult = (new GenderUserFactory())->getTotalResult();
        return response()->json($genderResult)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }


    public function getAgeUsers(): JsonResponse
    {
        $ageResult = (new AgeUserFactory())->getTotalResult();
        return response()->json($ageResult)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    public function getCityUsers(): JsonResponse
    {
        $cityResult = (new CityUserFactory())->getTotalResult();
        return response()->json($cityResult)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }


    public function getBestUsers(): JsonResponse
    {
        $bestUsersResult = (new BestUsersFactory())->getTotalResult();
        return response()->json($bestUsersResult)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }


    public function getAllSelectionUsers(): JsonResponse
    {
        $total = [
            "gender" => (new GenderUserFactory())->getTotalResult(),
            "age" => (new AgeUserFactory())->getTotalResult(),
            "city" => (new CityUserFactory())->getTotalResult(),
            "best" => (new BestUsersFactory())->getTotalResult(),

        ];
        return response()->json($total)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
}
