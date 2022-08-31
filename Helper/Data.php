<?php
/**
 * Copyright (c) 2019 Kaliop Digital Commerce (https://digitalcommerce.kaliop.com) All Rights Reserved.
 * https://opensource.org/licenses/OSL-3.0  Open Software License (OSL 3.0)
 * Kaliop_CatalogGenericProductItem
 * tchausson <tchausson@kaliop.com> <dt@kaliop.com>
 */

namespace Kaliop\CatalogGenericProductItem\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Catalog\Model\Product;
use Magento\Framework\View\LayoutInterface;
use Magento\Framework\App\Helper\Context;

use Kaliop\CatalogGenericProductItem\Block\ProductList\Item;

/**
 * Class Data - Helper
 * @package Kaliop\CatalogGenericProductItem\Helper
 */
class Data extends AbstractHelper
{
    /**
     * @var LayoutInterface
     */
    private $layout;

    /**
     * Listing constructor.
     * @param Context $context
     * @param LayoutInterface $layout
     */
    public function __construct(
        Context $context,
        LayoutInterface $layout
    ) {
        parent::__construct($context);
        $this->layout = $layout;
    }

    /**
     * Render a product
     * @param Product $product
     * @param string $blocTypeClassName
     * @param string $templateName
     * @param array $params More info Kaliop\CatalogGenericProductItem\Block\ProductList\Item:setDefaultParams
     * @return string
     */
    public function renderProductListItem(
        Product $product,
        $blocTypeClassName = \Kaliop\CatalogGenericProductItem\Block\Item::class,
        $templateName = '',
        array $params = []
    ) {
        /**
         * @var Item
         */
        $item = $this->layout->createBlock($blocTypeClassName);
        if ($templateName) {
            $item->setTemplate($templateName);
        }
        $item->setProduct($product);
        if (count($params) > 0) {
            $item->addData($params);
        }
        return $item->toHtml();
    }
}
