<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\PowerInterface;

class High implements PowerInterface
{
  public function getPower()
  {
      echo 'High Power ';
  }
}