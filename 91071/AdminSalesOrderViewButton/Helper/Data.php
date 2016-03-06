<?php
/**
 * MagePal_AdminSalesOrderViewButton Magento component
 *
 * @category    MagePal
 * @package     MagePal_AdminSalesOrderViewButton
 * @author      MagePal Team <info@magepal.com>
 * @copyright   MagePal (http://www.magepal.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace MagePal\AdminSalesOrderViewButton\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;
    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\ObjectManagerInterface
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\ObjectManagerInterface $objectManager
    )
    {
        $this->_objectManager = $objectManager;
        parent::__construct($context);
    }
}