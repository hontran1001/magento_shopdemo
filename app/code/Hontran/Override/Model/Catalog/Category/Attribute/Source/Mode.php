<?php
/**
 * Created by PhpStorm.
 * User: hontr
 * Date: 09/08/2017
 * Time: 16:13
 */

namespace Hontran\Catalog\Category\Attribute\Source;

Class Mode extends \Magento\Catalog\Model\Category\Attribute\Source\Mode{
    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['value' => \Magento\Catalog\Model\Category::DM_PRODUCT, 'label' => __('Products only')],
                ['value' => \Magento\Catalog\Model\Category::DM_PAGE, 'label' => __('Static block only')],
                ['value' => \Magento\Catalog\Model\Category::DM_MIXED, 'label' => __('Static block and products')],
                ['value' => 'laptop', 'label' => __('Display Type Laptop Product')],
                ['value' => 'mobile', 'label' => __('Display Type Mobile Product')],
            ];
        }
        return $this->_options;
    }
}