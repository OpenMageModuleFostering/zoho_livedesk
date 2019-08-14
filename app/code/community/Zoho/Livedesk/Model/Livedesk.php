<?php
/**
 * @category   Zoho
 * @package    Zoho_Livedesk
 * @author     LiveDesk Team
 * @website    http://www.zoho.com/livedesk
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Zoho_Livedesk_Model_Livedesk extends Mage_Core_Model_Abstract {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'all_pages', 'label'=>Mage::helper('livedesk')->__('All Pages')),
            array('value' => 'cms_index_index', 'label'=>Mage::helper('livedesk')->__('Home Page')),
            array('value' => 'catalog_category_view', 'label'=>Mage::helper('livedesk')->__('Category Pages')),
            array('value' => 'catalog_product_view', 'label'=>Mage::helper('livedesk')->__('Product Pages')),
            array('value' => 'checkout_cart_index', 'label'=>Mage::helper('livedesk')->__('My Cart')),
            array('value' => 'checkout_onepage_index', 'label'=>Mage::helper('livedesk')->__('Checkout'))
        );
    }

}
