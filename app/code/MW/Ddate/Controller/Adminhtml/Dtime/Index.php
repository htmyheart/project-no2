<?php
namespace MW\Ddate\Controller\Adminhtml\Dtime;

use MW\Ddate\Controller\Adminhtml\Dtime;

class Index extends Dtime
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->_initAction()->_addBreadcrumb(__('Manage Delivery Schedule'), __('Manage Delivery Schedule'));
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Manage Delivery Schedule'));
        $this->_view->renderLayout();
    }
}
