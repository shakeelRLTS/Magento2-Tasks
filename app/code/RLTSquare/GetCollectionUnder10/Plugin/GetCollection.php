<?php
namespace RLTSquare\GetCollectionUnder10\Plugin;

class GetCollection
{
    public function aroundGetProductCollection(
        \Magento\Catalog\Model\Layer $subject,
        \Closure $proceed
    ) {

        $result = $proceed();
        $result->addAttributeToFilter('price', array('lteq' => 10));
        return $result;
    }
}
