<?php

namespace App\Services\Factories;



class GenderUserFactory extends UserFactory
{
    private function getMaleUsersIndicator() : array
    {
        $params = ["sex" => "мужчина"];
        return $this->getUserAllRanges($params);
    }

    private function getFemaleUsersIndicator() : array
    {
        $params = ["sex" => "женщина"];
        return $this->getUserAllRanges($params);
    }

   public function getTotalResult(): array
   {
       return [
           "male" => $this->getMaleUsersIndicator(),
           "female" => $this->getFemaleUsersIndicator(),
       ];
   }


}
