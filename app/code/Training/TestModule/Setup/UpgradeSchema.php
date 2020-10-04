<?php

namespace Training\TestModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '0.0.2', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('student'),
                'class',
                ['type' => Table::TYPE_INTEGER,'nullable' => false, 'length' => 4,
                    'comment' => 'Class','after' => 'grade']
            );
        }
        $setup->endSetup();
    }
}
