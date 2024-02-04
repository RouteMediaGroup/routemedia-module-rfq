<?php

namespace RouteMedia\Rfq\Model;

class Rfq extends \Magento\Framework\Model\AbstractModel
{
        
        
    protected function _construct()
    {
        $this->_init('RouteMedia\Rfq\Model\ResourceModel\Rfq');
    }
        
        
    public function getAvailableStatuses()
    {
                
                
        $availableOptions = ['New' => 'New',
                          'Under Process' => 'Under Process',
                          'Pending' => 'Pending',
                          'Done' => 'Done'];
                
        return $availableOptions;
    }
        
    public function getBudgetStatuses()
    {
                
                
        $options = ['Approved' => 'Approved',
                          'Approval Pending' => 'Approval Pending',
                          'Open' => 'Open',
                          'No Approval' => 'No Approval'];
                
        return $options;
    }
}
