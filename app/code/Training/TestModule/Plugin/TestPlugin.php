<?php


namespace Training\TestModule\Plugin;


class TestPlugin
{
    public function beforesetName(\Magento\Catalog\Model\Product $subject,$name ){
        return 'Before Plugin ' . $name;
    }

    public function aftergetIdBySku(\Magento\Catalog\Model\Product $subject,$result ){
        return 'After Plugin ' . $result;
    }

    public function aroundgetIdBySku(\Magento\Catalog\Model\Product $subject,$proceed,$sku ){
        echo 'Before Proceed' . '</br>';
        $proceed($sku);
        echo 'After Proceed.' . '</br>';



    }

}
