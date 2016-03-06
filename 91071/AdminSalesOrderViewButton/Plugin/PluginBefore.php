<?php

namespace MagePal\AdminSalesOrderViewButton\Plugin;
 
class PluginBefore
{
    public function beforePushButtons(
    	\Magento\Backend\Block\Widget\Button\Toolbar\Interceptor $subject,
        \Magento\Framework\View\Element\AbstractBlock $context,
        \Magento\Backend\Block\Widget\Button\ButtonList $buttonList
    ) {

    	$this->_request = $context->getRequest();
    	if($this->_request->getFullActionName() == 'sales_order_view'){
	          $buttonList->add(
	            'resetkk',
	            ['label' => __('Button 1'), 'onclick' => 'setLocation(window.location.href)', 'class' => 'reset'],
	            -1
	        );
      	}

    } 

}