<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\PowerInterface;

class Low implements PowerInterface
{
  public function getPower()
  {
      echo 'Low Power ';
  }
}