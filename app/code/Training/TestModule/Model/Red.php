<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\ColorInterface;

class Red implements ColorInterface
{

    public function getColor()
    {
        return 'Red';
    }
}