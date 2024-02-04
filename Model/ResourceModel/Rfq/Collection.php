<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace RouteMedia\Rfq\Model\ResourceModel\Rfq;

use RouteMedia\Rfq\Model\ResourceModel\AbstractCollection;

/**
 * CMS page collection
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'rfq_id';

    
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('RouteMedia\Rfq\Model\Rfq', 'RouteMedia\Rfq\Model\ResourceModel\Rfq');
        $this->_map['fields']['rfq_id'] = 'main_table.rfq_id';
    }

    
    public function addStoreFilter($store, $withAdmin = true)
    {
        return $this;
    }
}
