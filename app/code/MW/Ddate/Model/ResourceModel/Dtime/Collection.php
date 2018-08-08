<?php
namespace MW\Ddate\Model\ResourceModel\Dtime;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MW\Ddate\Model\Dtime', 'MW\Ddate\Model\ResourceModel\Dtime');
    }
}
