<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\PowerInterface;

class Medium implements PowerInterface
{
   public function getPower()
   {
       echo 'Medium Power ';
   }
}