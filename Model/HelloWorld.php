<?php 

namespace Arrow\HelloWorld\Model;

class HelloWorld extends \Magento\Framework\Model\AbstractModel{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Arrow\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}