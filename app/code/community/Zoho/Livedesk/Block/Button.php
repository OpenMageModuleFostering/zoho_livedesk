<?php
/**
 * @category   Zoho
 * @package    Zoho_Livedesk
 * @author     LiveDesk Team
 * @website    http://www.zoho.com/livedesk
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Zoho_Livedesk_Block_Button extends Mage_Core_Block_Template {
  
  public function getQuestion() {
    $question = 'Hi, I need to know more about ';
    $question .= $this->helper('catalog/data')->getProduct()->getName();
    $question .= ' (';
    $question .= $this->helper('core/url')->getCurrentUrl();
    $question .= ')';
    return htmlspecialchars(json_encode($question));
  }

  public function getLabel() {
    return $this->__('Click here to chat');
  }

  public function isQuickChatEnabled() {
    return $this->helper('livedesk')->isQuickChatEnabled();
  }
}
