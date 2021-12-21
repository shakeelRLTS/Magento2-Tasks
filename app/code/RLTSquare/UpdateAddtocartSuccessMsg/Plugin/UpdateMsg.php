<?php
namespace RLTSquare\UpdateAddtocartSuccessMsg\Plugin;
use \Magento\Checkout\Controller\Cart\Add;

class UpdateMsg
{

    protected $messageManager;

    public function __construct(
        \Magento\Framework\Message\ManagerInterface $managerInterface
    ) {
        $this->messageManager = $managerInterface;
    }

    public function afterExecute(
        Add $subject,
            $result
    ) {
        $messageCollection = $this->messageManager->getMessages();
        $getMsgType = $messageCollection->getLastAddedMessage()->getType();
        if($getMsgType == 'success'){
            $this->messageManager->getMessages(true);
            $message = 'Product Add to Cart Successfully !!!';
            $this->messageManager->addSuccessMessage($message);
        }
        return $result;
    }
}
