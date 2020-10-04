<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\ColorInterface;

class White implements ColorInterface
{

    public function getColor()
    {
        return 'White';
    }
}