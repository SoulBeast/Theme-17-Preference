<?php

namespace Dolphin\PreferenceDemo\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        return "Preference Demo";
    }
}
