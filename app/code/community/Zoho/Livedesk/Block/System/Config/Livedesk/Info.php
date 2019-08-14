<?php
/**
 * @category   Zoho
 * @package    Zoho_Livedesk
 * @author     LiveDesk Team
 * @website    http://www.zoho.com/livedesk
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Zoho_Livedesk_Block_System_Config_Livedesk_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface {

    public function render(Varien_Data_Form_Element_Abstract $element) {
        $html = '<div style="border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 10px 10px 10px;">
            <h4>NOTE:</h4>
            <p>We have now re-named our platform as Zoho SalesIQ. The platform is now moving towards store visitor monitoring and real-time sales intelligence.<br/>Please install <a href="http://www.magentocommerce.com/magento-connect/catalog/product/view/id/25251/s/zoho-salesiq/">our new plugin</a> to get latest updates</p>
          </div>';
        return $html;
    }
}
