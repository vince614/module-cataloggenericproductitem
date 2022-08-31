
[comment]: # (You have been able to install the module by following the Install.md instructions step by step, now let's see some vocabulary and use cases.)


**Concepts & Terms that matter**
--------------------------------

### Item
An html block which has product data.

Scenarios
---------

***Disclaimer***  
The following scenarios can be seen on Cap Promo project.

### I want to display an item with basics data  

#### Steps

1) Set usage  
~~~php
use \Kaliop\CatalogGenericProductItem\Helper\Data As kaliopCatalogHelper;
~~~

2) Make your DI (assuming here that $this->kaliopGenericItemHelper is typeof kaliopCatalogHelper) 

3) Make your call 
~~~php
return $this->kaliopGenericItemHelper->renderProductListItem($product,\Cap\Catalog\Block\Product\Renderer\Item::class);
~~~


### I want to display an item with basics datas

#### Steps
1) Set usage 
~~~php
//assuming that
//@var Product $product
use \Kaliop\CatalogGenericProductItem\Helper\Data As kaliopCatalogHelper;
~~~

2) Make your DI (assuming here that $this->kaliopGenericItemHelper is typeof kaliopCatalogHelper) 

3) Make your call 
~~~php
//assuming that
//@var Magento\Catalog\Model\ResourceModel\Product $product
//@var $myBlockType extends Kaliop\CatalogGenericProductItem\Block\View
$myBlockType = "\Your\Module\Block\Product\Renderer\Item::class"; 
return $this->kaliopGenericItemHelper->renderProductListItem($product,$myBlockType);
~~~


### I want to display an item with my own template
You want to return a product html block with your own template 

#### Steps
1) Set usage 
~~~php
//assuming that
//@var Magento\Catalog\Model\ResourceModel\Product $product
use \Kaliop\CatalogGenericProductItem\Helper\Data As kaliopCatalogHelper;
~~~

2) Make your DI (assuming here that $this->kaliopGenericItemHelper is typeof kaliopCatalogHelper) 

3) Make your call 
~~~php
//assuming that
//@var Product $product
$myTemplate = "My_Module::item.phtml"; 
return $this->kaliopGenericItemHelper->renderProductListItem($product,'',$myTemplate);
~~~


### I want to display an item with my own template and block type
You want to return a product html block with your own template and own block type

#### Steps
1) Set usage 
~~~php
//assuming that
//@var Magento\Catalog\Model\ResourceModel\Product $product
use \Kaliop\CatalogGenericProductItem\Helper\Data As kaliopCatalogHelper;
~~~

2) Make your DI (assuming here that $this->kaliopGenericItemHelper is typeof kaliopCatalogHelper) 

3) Make your call 
~~~php
//assuming that
//@var Product $product
//@var $myBlockType extends Kaliop\CatalogGenericProductItem\Block\View
$myBlockType = "\Your\Module\Block\Product\Renderer\Item::class"; 
$myTemplate = "My_Module::item.phtml"; 
return $this->kaliopGenericItemHelper->renderProductListItem($product,$myBlockType,$myTemplate);
~~~