<?php


namespace Training\TestModule\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{


    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if(!$setup->tableExists('student')){
            $table = $setup->getConnection()->newTable('student')
                ->addColumn(
                    'entity_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' =>true,'nullable' => false, 'primary' => true],
                    'Entity Id'
                )
                ->addColumn(
                    'student_name',
                    Table::TYPE_TEXT,
                    20,
                    ['nullable' => false],
                    'Student Name'
                )
                ->addColumn(
                    'grade',
                    Table::TYPE_TEXT,
                    2,
                    ['nullable' => false],
                    'Grade'

                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )
                ->addColumn(
                    'updated_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                    'updated At'
                )
                ->setComment('Student');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
