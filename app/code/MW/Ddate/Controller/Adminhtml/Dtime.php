<?php
namespace MW\Ddate\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class Dtime extends Action
{
    /**
     * Init action
     *
     * @return $this
     */
    protected function _initAction()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('MW_Ddate::mw_ddate_items')
            ->_addBreadcrumb(__('Delivery Schedule'), __('Delivery Schedule'));
        return $this;
    }

    /**
     * Is access to section allowed
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MW_Ddate::mw_ddate_items');
    }
}
