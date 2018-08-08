<?php
namespace MW\Ddate\Model\ResourceModel;

class Dtime extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mwdtime', 'dtime_id');
    }
}