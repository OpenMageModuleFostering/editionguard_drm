<?php
/**
 * EditionGuard
 *
 * This source file is proprietary property of EditionGuard. Any reuse or
 * distribution of any part of this file without prior consent is prohibited.
 *
 * @category    EditionGuard
 * @package     Editionguard_Editionguard
 * @copyright   Copyright (c) 2012 EditionGuard. All rights Reserved.
 */


$installer = $this;

$installer->startSetup();

// Add the columns to the downloadable/link table
$installer->getConnection()->addColumn(
    $installer->getTable('downloadable/link'),
    'use_editionguard',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_SMALLINT,
        'UNSIGNED'  => true,
        'NULLABLE'  => false,
        'DEFAULT'   => '0',
        'COMMENT'   => 'Editionguard flag'
    )
);

$installer->getConnection()->addColumn(
    $installer->getTable('downloadable/link'),
    'editionguard_resource',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'LENGTH'    => 255,
        'COMMENT'   => 'Editionguard unique resource ID'
    )
);

$installer->getConnection()->addColumn(
    $installer->getTable('downloadable/link'),
    'editionguard_src',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'LENGTH'    => 255,
        'COMMENT'   => 'Editionguard content source URL'
    )
);


// Add the columns to the downloadable/link_purchased_item table
$installer->getConnection()->addColumn(
    $installer->getTable('downloadable/link_purchased_item'),
    'use_editionguard',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_SMALLINT,
        'UNSIGNED'  => true,
        'NULLABLE'  => false,
        'DEFAULT'   => '0',
        'COMMENT'   => 'Editionguard flag'
    )
);

$installer->getConnection()->addColumn(
    $installer->getTable('downloadable/link_purchased_item'),
    'editionguard_resource',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'LENGTH'    => 255,
        'COMMENT'   => 'Editionguard unique resource ID'
    )
);

$installer->getConnection()->addColumn(
    $installer->getTable('downloadable/link_purchased_item'),
    'editionguard_src',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'LENGTH'    => 255,
        'COMMENT'   => 'Editionguard content source URL'
    )
);

$installer->endSetup();