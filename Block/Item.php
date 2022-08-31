<?php
/**
 * Copyright (c) 2019 Kaliop Digital Commerce (https://digitalcommerce.kaliop.com) All Rights Reserved.
 * https://opensource.org/licenses/OSL-3.0  Open Software License (OSL 3.0)
 * Kaliop_CatalogGenericProductItem
 * tchausson <tchausson@kaliop.com> <dt@kaliop.com>
 */

namespace Kaliop\CatalogGenericProductItem\Block;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Block\Product\View;
use Magento\Catalog\Block\Product\Context;

/**
 * Class Item
 * @package Kaliop\CatalogGenericProductItem\Block
 */
class Item extends View
{
    /**
     * Path to template file in theme.
     *
     * @var string
     */
    protected $_template = 'Kaliop_CatalogGenericProductItem::item.phtml';

    /**
     * @var Product
     */
    private $product;

    /**
     * @var Array
     */
    private $params = [];

    /**
     * Item constructor.
     * @param Context $context
     * @param \Magento\Framework\Url\EncoderInterface $urlEncoder
     * @param \Magento\Framework\Json\EncoderInterface $jsonEncoder
     * @param \Magento\Framework\Stdlib\StringUtils $string
     * @param \Magento\Catalog\Helper\Product $productHelper
     * @param \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig
     * @param \Magento\Framework\Locale\FormatInterface $localeFormat
     * @param \Magento\Customer\Model\Session $customerSession
     * @param ProductRepositoryInterface $productRepository
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
     * @param array $data
     */
    public function __construct(
        Context $context,
        \Magento\Framework\Url\EncoderInterface $urlEncoder,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Helper\Product $productHelper,
        \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
        \Magento\Framework\Locale\FormatInterface $localeFormat,
        \Magento\Customer\Model\Session $customerSession,
        ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        array $data = [],
        array $params = []
    ) {
        parent::__construct(
            $context,
            $urlEncoder,
            $jsonEncoder,
            $string,
            $productHelper,
            $productTypeConfig,
            $localeFormat,
            $customerSession,
            $productRepository,
            $priceCurrency,
            $data
        );
        $this->params = $params;
        $this->setDefaultParams();
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the product
     * @param Product $product
     * @return $this
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * set all params params
     * @param $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Return paramas
     * @return array|Array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set the default parameters for view
     * @return $this
     */
    private function setDefaultParams()
    {
        $this->setParams([
            "viewMode" => 'grid',
            'imageArea' => 'category_page_grid',
            "showDescription" => true,
            'templateType' => \Magento\Catalog\Block\Product\ReviewRendererInterface::SHORT_VIEW,
            "pos" => null,
            'addto' => null
        ]);
        return $this;
    }
}
