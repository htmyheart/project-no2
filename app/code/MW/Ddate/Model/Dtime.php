<?php
namespace MW\Ddate\Model;

class Dtime extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Model construct that should be used for object initialization
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('MW\Ddate\Model\ResourceModel\Dtime');
//        $this->setIdFieldName('dtime_id');
    }
}
