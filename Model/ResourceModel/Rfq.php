<?php

namespace RouteMedia\Rfq\Model\ResourceModel;

class Rfq extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
        
        
           
    protected function _construct()
    {
        $this->_init('routemedia_rfq', 'rfq_id');
    }
}
