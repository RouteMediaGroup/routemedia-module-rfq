<?php

namespace RouteMedia\Rfq\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {

        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            // Füge das neue Feld hinzu
            $table = $installer->getTable('routemedia_rfq');

            $installer->getConnection()->addColumn(
                $table,
                'requestData',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => '64k',
                    'nullable' => true,
                    'comment' => 'Request Data',
                ]
            );
        }

        else if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $installer = $setup;
            $installer->startSetup();
            /**
             * update column 'overview'
            **/
            $table = $installer->getTable('routemedia_rfq');
            
            $installer->getConnection()->modifyColumn(
                $table,
                'overview',
                [
                        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        'length' => '64k',
                        'nullable' => true,
                        'default' => null,
                        'comment' => 'Overview'
                ]
            );
            $installer->endSetup();
        }
    }
}
