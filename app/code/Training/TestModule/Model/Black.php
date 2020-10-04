<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\ColorInterface;

class Black implements ColorInterface
{

    public function getColor()
    {
        return 'Black Color';
    }
}