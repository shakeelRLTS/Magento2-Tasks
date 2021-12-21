<?php
namespace RLTSquare\UpdatePrice\Plugin;

class Price
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = $result + ($result * 10 / 100);
        return $result;
    }
}
