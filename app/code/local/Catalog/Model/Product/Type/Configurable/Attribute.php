<?php

class Murtza_Catalog_Model_Product_Type_Configurable_Attribute 
    extends Mage_Catalog_Model_Product_Type_Configurable_Attribute
{

    /**
     * Retrieve attribute label
     * if not default to use, use storelabel
     *
     * @return string
     */
    public function getLabel()
    {
        if (!$this->getData('use_default') && $this->getProductAttribute()) {
            return $this->getProductAttribute()->getStoreLabel();
        } else if (is_null($this->getData('label')) && $this->getProductAttribute()) {
            $this->setData('label', $this->getProductAttribute()->getStoreLabel());
        }
        return $this->getData('label');
    }

}