<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Connect
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/**
 * Block for contents
 *
 * @category    Mage
 * @package     Mage_Connect
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Connect_Block_Adminhtml_Extension_Custom_Edit_Tab_Contents
    extends Mage_Connect_Block_Adminhtml_Extension_Custom_Edit_Tab_Abstract
{
    /**
     * Retrieve list of targets
     *
     * @return array
     */
    public function getMageTargets()
    {
        $targets = Mage::getModel('connect/extension')->getLabelTargets();
        if (!is_array($targets)) {
            $targets = array();
        }
        return $targets;
    }

    /**
     * Get Tab Label
     *
     * @return string
     */
    public function getTabLabel()
    {
        return Mage::helper('connect')->__('Contents');
    }

    /**
     * Get Tab Title
     *
     * @return string
     */
    public function getTabTitle()
    {
        return Mage::helper('connect')->__('Contents');
    }
}
