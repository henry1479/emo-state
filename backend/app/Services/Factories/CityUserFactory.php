<?php

namespace App\Services\Factories;

class CityUserFactory extends UserFactory
{

    private function getMoscowUsers () : array
    {
        $params = ["city" => "Москва"];
        return $this->getUserAllRanges($params);

    }

    private function getStPeterburgUsers () : array
    {
        $params = ["city" => "Санкт-Петербург"];
        return $this->getUserAllRanges($params);

    }

    private function getVladivostokUsers () : array
    {
        $params = ["city" => "Владивосток"];
        return $this->getUserAllRanges($params);

    }

    private function getKrasnodarUsers () : array
    {
        $params = ["city" => "Краснодар"];
        return $this->getUserAllRanges($params);

    }



    public function getTotalResult(): array
    {
        // TODO: Implement getTotalResult() method.
        return [
            "Москва" => $this->getMoscowUsers(),
            "Санкт-Петербург" => $this->getStPeterburgUsers(),
            "Владивосток" => $this->getVladivostokUsers(),
            "Краснодар" => $this->getKrasnodarUsers()
        ];

    }

}
