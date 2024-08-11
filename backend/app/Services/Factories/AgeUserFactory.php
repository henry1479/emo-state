<?php

namespace App\Services\Factories;

class AgeUserFactory extends UserFactory
{


    private function getFrom18to24Users():array {
        $params = [[
            "age", ">=", 18
        ],[
            "age", "<=", 24, "and"
        ]];
        return $this->getUserAllRanges($params);
    }

    private function getFrom25to32Users(): array {
        $params = [[
            "age", ">=", 25
        ],[
            "age", "<=", 32, "and"
        ]];
        return $this->getUserAllRanges($params);
    }


    private function getFrom33to40Users(): array{
        $params = [[
            "age", ">=", 33
        ],[
            "age", "<=", 40, "and"
        ]];
        return $this->getUserAllRanges($params);
    }


    private function getFrom41to45Users():array {
        $params = [[
            "age", ">=", 41
        ],[
            "age", "<=", 45, "and"
        ]];
        return $this->getUserAllRanges($params);
    }


    private function getFrom46Users():array {
        $params = [
            ["age", ">=", 46]
        ];
        return $this->getUserAllRanges($params);
    }



    public function getTotalResult(): array
    {
        // TODO: Implement getTotalResult() method.
        return [
            "18-24" => $this->getFrom18to24Users(),
            "24-32" => $this->getFrom25to32Users(),
            "32-40" => $this->getFrom33to40Users(),
            "40-45" => $this->getFrom41to45Users(),
            ">45" => $this->getFrom46Users()
        ];
    }
}
