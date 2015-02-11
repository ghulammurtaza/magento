<?php

class Murtza_Promo_Block_Quote_Edit extends Mage_Adminhtml_Block_Promo_Quote_Edit
{

    /**
     * Initialize form
     * Add "Save and Continue" button
     *
     * Murtaza: added a js function to confirm
     * if admin user wants to add promo withoud coupon
     */
    public function __construct()
    {
        parent::__construct();
        $this->_updateButton('save', 'onclick', 'return confirmCodeAdded(\'save\');');
        $this->_updateButton('save_and_continue_edit', 'onclick', 'return confirmCodeAdded(\'savencontinue\');');
    }

}
