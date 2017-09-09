<?php

namespace Hontran\Catalog\Product;

use \Magento\Framework\App\ObjectManager;

class ListProduct extends \Magento\Catalog\Block\Product\ListProduct
{
    /**
     * @return mixed
     */
    public function getDisplayMode()
    {
        $this->setCategoryId($this->_storeManager->getStore()->getRootCategoryId());
        $objectManager = ObjectManager::getInstance();
        $category = $objectManager->create('Magento\Catalog\Model\Category')->load($this->getCategoryId());
        return $category->getDisplayMode();
    }
}
?>