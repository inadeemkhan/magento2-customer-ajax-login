<?php
namespace Nadeem\AjaxLogin\Block;
  
class Popup extends \Magento\Framework\View\Element\Template
{   
    const STORE_CONFIG_IS_ENABLE = "customerlogin/customerlogin/enable";

    /**
     * @var \Magento\Customer\Model\Session
     */
	protected $_session;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
    	$this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    	$this->_customerSession = $this->_objectManager->get('Magento\Customer\Model\Session');
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
    	return $this->_customerSession->isLoggedIn();
    }

    public function getIsEnable() {
        $isEnable = $this->_scopeConfig->getValue(self::STORE_CONFIG_IS_ENABLE, 
                                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    return $isEnable;
    }
}