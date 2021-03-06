<?php
namespace Magento\Ui\Controller\Adminhtml\Bookmark\Delete;

/**
 * Interceptor class for @see \Magento\Ui\Controller\Adminhtml\Bookmark\Delete
 */
class Interceptor extends \Magento\Ui\Controller\Adminhtml\Bookmark\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Element\UiComponentFactory $factory, \Magento\Ui\Api\BookmarkRepositoryInterface $bookmarkRepository, \Magento\Ui\Api\BookmarkManagementInterface $bookmarkManagement)
    {
        $this->___init();
        parent::__construct($context, $factory, $bookmarkRepository, $bookmarkManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
